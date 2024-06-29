    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {

        if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
            $('.top').addClass('top-normal');
            $('.back-to-top').css("display", "block");
        } else {
            $('.top').removeClass('top-normal');
            $('.back-to-top').css("display", "none");
        }
    }

    $('.btn-gr').find('a').last().hover(function () {
        $('.btn-gr').find('a').first().css('background', 'rgba(255,255,255,0)');
    }, function () {
        $('.btn-gr').find('a').first().css('background', '#f26f21');
    });


    function topFunction() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    }

	$('#myTab .nav-item').first().find('a').addClass('active');