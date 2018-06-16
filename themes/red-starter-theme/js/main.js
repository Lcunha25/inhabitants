jQuery( document ).ready(function($) {

    // prevent javascript animation from kicking person back to begining of page
    $('a[href=#]').on('click', function(e){
        e.preventDefault();
    });
    // Search nav bar icon show and hide
    $('.search-field').hide();
    $('.search-toggle').click(function() {
        $('.search-field').animate({
        width:['toggle', 'swing'],
        },500);
    });

    // change color of menu on scrolldown
    function changeNav(){

        // Front page
        $('.fp-content-area .logo-nav img').remove();
        $('.fp-content-area .logo-nav').append("<img src='wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
        $('.fp-content-area .header-search .search-form .search-field').css('color', 'white');
        // About page
        $('.about-content-area .logo-nav img').remove();
        $('.about-content-area .logo-nav').append("<img src='../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
        $('.about-content-area .header-search .search-form .search-field').css('color', 'white');
        // single.adventures page
        $('.single-adventures-content-area .logo-nav img').remove();
        $('.single-adventures-content-area .logo-nav').append("<img src='../../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
       
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
                // single.adventures page
                $('.single-adventures-content-area .logo-nav img').remove();
                $('.single-adventures-content-area .logo-nav').append("<img src='../../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent-white.svg' />");
                
                // General CSS changes for about and front pages
                $('.site-header').css('position', 'absolute');
                $('#primary-menu li a').css('color', 'white');
                $('.search-toggle i').css('color', 'white');
                $('.header-search .search-form .search-field').css('color', 'white');
                $('.site-header').css({
                    'background-color': 'transparent',
                    'border-bottom': 'transparent'
                });
            } else {
                $('.logo-nav img').remove();
                $('.fp-content-area .logo-nav').append("<img src='wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent.svg' />");
                $('.about-content-area .logo-nav').append("<img src='../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent.svg' />");
                $('.single-adventures-content-area .logo-nav').append("<img src='../../wp-content/themes/red-starter-theme/images/logos/inhabitent-logo-tent.svg' />");
               
                // General CSS changes for about and front pages
                $('.site-header').css('position', 'fixed');
                $('#primary-menu li a').css('color', '#248A83');
                $('#primary-menu li a').css('color', '#248A83');
                $('.search-toggle i').css('color', '#248A83');
                $('.header-search .search-form .search-field').css('color', 'black');
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
    // function to verify if all informations are filled on form when user is submitting info and to append/hide form info.
    function validate() {
        var $result = $('.return-msg-wrong');
        var email = $('.email-input').val();
        var element = $('.form-input');
        $result.text("");
        
        if (validateEmail(email) && $(element).val() !== '') {
            $(this).val('Submiting...'); //TODO: Disable the button and loading message before removing form

            setTimeout(function(){
                $('.input-line').hide('slow');
                $('.subscribe-text').hide('slow');
                $('.return-msg-wrong').hide();
                $('.return-msg-ok').append('<h1>' + 'Thanks for subscribing' + '</h1>' + '<br>' + '<p>' + 'You ll start receiving free tips and resources soon.' + '</p>');
                $('.return-msg-ok').css({
                    'color' : 'white',
                    'margin' : '40px 0',
                });
            }
            , 2000);

        } else {
            alert('Please enter a valid email address and fill out all the fields');
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