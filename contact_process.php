<?php
// Set headers to handle AJAX requests
header('Content-Type: application/json');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Basic CSRF protection - check referer
$allowedReferers = ['http://localhost/Indsutrio/', 'https://your-production-domain.com/'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$validReferer = false;

foreach ($allowedReferers as $allowed) {
    if (strpos($referer, $allowed) === 0) {
        $validReferer = true;
        break;
    }
}

if (!$validReferer) {
    http_response_code(403); // Forbidden
    echo json_encode(['success' => false, 'message' => 'Invalid request origin']);
    exit;
}

// Simple rate limiting (prevents form flooding)
session_start();
$currentTime = time();
$timeWindow = 60; // 1 minute
$maxAttempts = 3; // Max 3 submissions per minute

if (!isset($_SESSION['form_submissions'])) {
    $_SESSION['form_submissions'] = [];
}

// Clean up old submissions
foreach ($_SESSION['form_submissions'] as $time => $count) {
    if ($time < $currentTime - $timeWindow) {
        unset($_SESSION['form_submissions'][$time]);
    }
}

// Count recent submissions
$recentAttempts = 0;
foreach ($_SESSION['form_submissions'] as $count) {
    $recentAttempts += $count;
}

if ($recentAttempts >= $maxAttempts) {
    http_response_code(429); // Too Many Requests
    echo json_encode(['success' => false, 'message' => 'Too many submissions. Please try again later.']);
    exit;
}

// Record this submission
if (!isset($_SESSION['form_submissions'][$currentTime])) {
    $_SESSION['form_submissions'][$currentTime] = 1;
} else {
    $_SESSION['form_submissions'][$currentTime]++;
}

// Get form data with stronger sanitization
$name = isset($_POST['name']) ? htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(strip_tags(trim($_POST['subject'])), ENT_QUOTES, 'UTF-8') : '';
$message = isset($_POST['message']) ? htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES, 'UTF-8') : '';

// Validate data - more thorough validation
if(empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill all the required fields.']);
    exit;
}

// Validate name (letters, spaces, and some special characters only)
if (!preg_match('/^[a-zA-Z\s\.\'-]{2,50}$/', $name)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid name.']);
    exit;
}

// Validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

// Validate subject (reasonable length and character set)
if (!preg_match('/^[a-zA-Z0-9\s\.\,\-\_\'\"\!\?]{2,100}$/', $subject)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid subject.']);
    exit;
}

// Validate message length
if (strlen($message) < 10 || strlen($message) > 3000) {
    echo json_encode(['success' => false, 'message' => 'Message must be between 10 and 3000 characters.']);
    exit;
}

// Recipient email - hardcoded for security
$to = 'Brainandtruth@gmail.com';

// Email subject with additional sanitization
$email_subject = "New Contact Form Submission: " . $subject;

// Email content
$email_body = "You have received a new message from your website contact form.\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n";
$email_body .= "Message:\n$message\n";
$email_body .= "\n\nIP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
$email_body .= "Date: " . date("Y-m-d H:i:s") . "\n";

// Secure email headers
// Avoid header injection by ensuring no newlines in the email
$clean_email = str_replace(["\r", "\n"], '', $email);
$headers = "From: contact@yourdomain.com\r\n"; // Use your domain email instead of user input
$headers .= "Reply-To: $clean_email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Log email attempts (optional but recommended for security auditing)
$log_file = 'email_log.txt';
$log_message = date("Y-m-d H:i:s") . " | IP: " . $_SERVER['REMOTE_ADDR'] . " | Name: $name | Email: $email | Subject: $subject\n";
file_put_contents($log_file, $log_message, FILE_APPEND);

// Attempt to send email
if(mail($to, $email_subject, $email_body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
} else {
    // Log failure
    file_put_contents($log_file, date("Y-m-d H:i:s") . " | FAILED EMAIL | IP: " . $_SERVER['REMOTE_ADDR'] . "\n", FILE_APPEND);
    echo json_encode(['success' => false, 'message' => 'Sorry, your message could not be sent. Please try again later or email us directly at Brainandtruth@gmail.com']);
}
?>