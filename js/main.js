$(".orderButton").click(function() {
        location.href = "order.php";
    });

$(".readBmuneButton").click(function() {
        location.href = "bmunevid.php";
    });

$("#thankYouButton").click(function() {
        location.href = "index.php";
    });

$("#wrongButton").click(function() {
        location.href = "contact.php";
    });

$(".arrow").click(function() {
    $('html,body').animate({
        scrollTop: $(".scrollTo").offset().top},
        'slow');
});

$("#stepOneArrow").click(function() {
    $('html,body').animate({
        scrollTop: $(".stepTwo").offset().top},
        'slow');
});

$("#stepTwoArrow").click(function() {
    $('html,body').animate({
        scrollTop: $(".stepThree").offset().top},
        'slow');
});

// $(window).ready(setInterval(function() {
//       $('.navbarmain').fadeIn(900);
//  },2000));

$(document).ready(function() {
    $("#sendButton").click(function (e) {
         e.preventDefault(); // prevent page reload
        $.ajax({
            type: "POST",
            url: '/contact',
            data: $("#contact").serialize(),
            success: function (response) {
            $("#submitResponse").html(response);
            }
        });
    });
});
$(document).ready(function() {
      if ( $(window).width() <= 500) {
           $('#home').addClass('homeMobile');
      }
});

$(document).ready(function() {
    $('.homeMobile').vegas({
        slides: [
            { src: 'images/img4.jpg' },
            { src: 'images/img5.jpg' },
            { src: 'images/img6.jpg' }
        ]
    });
});
$(document).ready(function() {
    $('.home').vegas({
        slides: [
            { src: 'images/img1.jpg' },
            { src: 'images/img3.jpg' }
        ]
    });
});
