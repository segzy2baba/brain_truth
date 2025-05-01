(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar - This can remain as it targets the class added by PHP
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Modal Video
  var $videoSrc;
  $(".btn-play").click(function () {
    $videoSrc = $(this).data("src");
  });
  console.log($videoSrc);
  $("#videoModal").on("shown.bs.modal", function (e) {
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
    );
  });
  $("#videoModal").on("hide.bs.modal", function (e) {
    $("#video").attr("src", $videoSrc);
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Project carousel
  $(".project-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    loop: true,
    center: true,
    dots: false,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
    },
  });

  // Contact Form Submission Logic
  $(function () {
    // Ensure DOM is ready

    $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
      preventSubmit: true,
      submitError: function ($form, event, errors) {
        // Handle validation errors (jqBootstrapValidation library does this visually)
        $("#form-messages").html(
          "<div class='alert alert-danger'>Please fill out all required fields correctly.</div>"
        );
      },
      submitSuccess: function ($form, event) {
        event.preventDefault(); // Prevent default form submission

        // Get form values
        var name = $("input#name").val();
        var email = $("input#email").val();
        var subject = $("input#subject").val();
        var message = $("textarea#message").val();

        var $submitButton = $("#sendMessageButton");
        $submitButton.prop("disabled", true).html("Sending..."); // Disable button

        // **Update this line to point to your PHP script**
        var serverEndpoint = "contact_process.php"; // <--- UPDATED

        fetch(serverEndpoint, {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded", // Common type for PHP
          },
          // Encode data for server-side script (PHP example)
          body: new URLSearchParams({
            name: name,
            email: email,
            subject: subject,
            message: message,
          }),
        })
          .then((response) => {
            if (!response.ok) {
              // If server response is not OK (e.g., 404, 500)
              return response.text().then((text) => {
                throw new Error(text || "Server error");
              });
            }
            return response.json(); // Assuming server sends back JSON { success: true/false, message: "..." }
          })
          .then((data) => {
            // Success message from server
            $("#form-messages").html(
              "<div class='alert alert-success'>" +
                (data.message || "Your message has been sent.") +
                "</div>"
            );
            $("#contactForm").trigger("reset"); // Clear form
          })
          .catch((error) => {
            // Error message (network error or error from server)
            console.error("Form submission error:", error);
            $("#form-messages").html(
              "<div class='alert alert-danger'>Sorry, it seems that my mail server is not responding. Please try again later or email us directly at Brainandtruth@gmail.com. Error: " +
                error.message +
                "</div>"
            );
          })
          .finally(() => {
            // Re-enable button whether success or error
            $submitButton.prop("disabled", false).html("Send Message");
          });
      },
      filter: function () {
        return $(this).is(":visible"); // Validate only visible fields
      },
    });

    // Make links clickable inside validation messages (if needed)
    $('a[data-toggle="tab"]').click(function (e) {
      e.preventDefault();
      $(this).tab("show");
    });

    // Clear success/error messages when user starts typing
    $("#contactForm input, #contactForm textarea").focus(function () {
      $("#form-messages").html("");
    });
  });
})(jQuery);
