// HOME
$(document).ready(function(){
    // animations
    AOS.init();
    //scroll smoothly
    $(function() {
        $('#havbar a').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                    scrollTop: target.offset().top
                    }, 1000);
                return false;
                }
            }
        });
    });
    // navigation mobile
    $('.nav-link').click(function(){
        $('.navbar-collapse.collapse').collapse('hide');
        if($('.main-nav').hasClass('mobile')){
            $('.main-nav').removeClass('mobile')
        }
    });
    $('.navbar-toggler').click(function(){
        $('.main-nav').toggleClass('mobile');
    });
});