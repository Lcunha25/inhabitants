jQuery( document ).ready(function($) {
    // Search nav bar icon show and hide
    $('.search-field').hide();
    $('.search-toggle').click(function() {
       $('.search-field').slideToggle();
    });

    // change color of menu on scrolldown
    function changeNav(){
        
        // Front page
        $('.fp-content-area .logo-nav img').remove();
        $('.fp-content-area .logo-nav').append("<img src='wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
       
        // About page
        $('.about-content-area .logo-nav img').remove();
        $('.about-content-area .logo-nav').append("<img src='../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");

        var targetOffset = $(".anchor-point").offset();
        var scrollVar = $(window).scroll( function(){

            var scrollOnTop = $(window).scrollTop();

            if ( scrollOnTop < targetOffset.top) { 
                // Front Page
                $('.fp-content-area .logo-nav img').remove();
                $('.fp-content-area .logo-nav').append("<img src='wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");        
                // About Page
                $('.about-content-area .logo-nav img').remove();
                $('.about-content-area .logo-nav').append("<img src='../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
                
                // General CSS changes for about and front pages
                $('.site-header').css('position', 'absolute');
                $('#primary-menu li a').css('color', 'white');
                $('.search-toggle i').css('color', 'white');
                $('.site-header').css({
                    'background-color': 'transparent',
                    'border-bottom': 'transparent'
                });
            } else {
                $('.logo-nav img').remove();
                $('.fp-content-area .logo-nav').append("<img src='wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent.svg' />");
                $('.about-content-area .logo-nav').append("<img src='../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent.svg' />");
               
                // General CSS changes for about and front pages
                $('.site-header').css('position', 'fixed');
                $('#primary-menu li a').css('color', '#248A83');
                $('#primary-menu li a').css('color', '#248A83');
                $('.search-toggle i').css('color', '#248A83');
                $('.site-header').css({
                    'background-color': 'hsla(0,0%,100%,.85)',
                    'border-bottom': '1px solid #e1e1e1'
                });
            }
        });
    }
    changeNav();

    // E-mail Submit Button.
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    function validate() {
        var $result = $('.return-msg-wrong');
        var email = $('.email-input').val();
        $result.text("");
    
        if (validateEmail(email)) {
            $(this).val('Submiting...'); //TODO: Disable the button

            setTimeout(function(){
                $('.input-line').hide('slow');
                $('.subscribe-text').hide('slow');
                $('.return-msg-wrong').hide();
                $('.return-msg-ok').append('<h3>' + 'Thanks for subscribing' + '</h3>' + '<br>' + '<p>' + 'You ll start receiving free tips and resources soon.' + '</p>');
                $('.return-msg-ok').css({
                    'color' : 'white',
                    'margin' : '40px 0',
                });
            }
            , 2000);

        } else {
            $('.return-msg-wrong').text('Please enter a valid email address');
            $('.return-msg-wrong').css({
                'color' : '#C23628',
                'font-size' : '12px',
                'margin' : '10px 0 0 0',
            });
        }
        return false;
    }
    $('.submit').click(validate);


});