'use strict';

var smoothScroll = smoothScroll.init({
    speed: 1000,
    easing: 'easeInOutQuart',
    offset: 0,
    updateURL: true
});



$(document).ready(function() {

    var $interesting = $('#interesting');

    // Preloader
    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});

    });

 //VALIDATE FORM
   var $validator = $('form').validate({
        ignore: ':hidden:not(select)',
        rules: {
            firstName: 'required',
            lastName: 'required',
            zip_code: 'required',
            state: 'required',
            city: 'required',
            address: 'required',
            phone: 'required',
            interesting: 'required',
            last: 'required',
            email: {
              required: true,
              email: true
            }
        },
        messages: {
            name: 'Please specify your name',
            email: {
              required: 'We need your email address to contact you',
              email: 'Your email address must be in the format of name@domain.com'
        }
    },

    errorPlacement: function(error, element) {
        // check if element has Selectric initialized on it
        var data = element.data('selectric');
        error.appendTo( data ? element.closest( '.' + data.classes.wrapper ).parent() : element.parent() );
    },
    submitHandler: function() {

        var $thank = $('#thank');
        var $bgBlackThank = $('.bgBlack-thank');


        if ($validator.numberOfInvalids() === 0) {

            $.ajax({
                type: 'POST',
                url: $('#contact-form').attr('action'),
                data: $('#contact-form').serialize(),
                success: function() {
                    // What should happen when message is sent
                    $thank.animate({bottom: '0', opacity: '1'}, 800, function(){

                        if ($thank.is(':visible')) {
                            $bgBlackThank.animate({bottom:'0'}, 200, function(){
                                    $bgBlackThank.animate({opacity: '.5'}, 600);
                                });

                            $('#thank div:first-child div').click(function(){
                                $thank.animate({bottom: '-100%', opacity: '0'}, 800, function(){
                                    $bgBlackThank.animate({opacity: '0'}, 800, function(){
                                        $bgBlackThank.animate({bottom: '-100%'}, 1000);
                                    });
                                });
                                location.reload(true);
                            });
                        }
                    });
                }
            });
        }
    }
});
//VALIDATE FORM END

    //COMBOS SELECT
    jQuery(function ($) {
    var input = {
        'data': [{
            'interesting': 'RESIDENTIAL',
                'types': [
                    '1 BEDROOM',
                    '2 BEDROOM ',
                    '3 BEDROOM',
                    '4 BEDROOM',
                    'N/A'
                ]
        }, {
            'interesting': 'OFFICE',
                'types': [
                    'PROFESSIONAL',
                    'MEDICAL',
                    'N/A'
                ]
        }]
    };

    $.each(input.data, function (index, d) {
        $interesting.append('<option value="' + d.interesting + '">' + d.interesting + '</option>');
    });

    $('select').selectric();

    $interesting.on('change', function () {

        var selectedInterest = $interesting.val();
        var t = $.map(input.data, function (obj) {

            if (obj.interesting === selectedInterest) {return obj;}

        });
        if(selectedInterest === 'OFFICE'){
            $('#types, #pricing').removeAttr('disabled');
            $('#types, #pricing').removeClass('opa50');
            $('#interesting-error').css('display', 'none');
        }else{

            $('#types').removeAttr('disabled');
            $('#types').removeClass('opa50');

            $('#pricing').attr('disabled', 'disabled');
            $('#pricing').addClass('opa50');

            $('#interesting-error').css('display', 'none');

        }
        if (t.length !== 0) {
            $('#types').empty();
            $.each(t[0].types, function (index, d) {
                $('#types').append('<option value="' + d + '">' + d + '</option>');
            });
            $('select').selectric('refresh');

        }

    });

    $('#country').change();

});

$('#how_hear').change(function(){
    if( $(this).val() === 'other'){
        $('#other').append('<label for="comment_other" class="label_other text-left large-12 medium-12 small-12 columns pL0">OTHER</label>');
        $('#other').append('<input id="comment_other" name="comment_other" class="other" type="text" placeholder="FILL HERE" />');
    }else{
        $('.other, .label_other').remove();
    }
});
//COMBOS SELECT END

});

// //FADE IMAGES

$('.imgFades').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true
});

// //FADE IMAGES END


//DISCLAMER MODAL
var $disclaimer = $('#disclaimer');
var $bgBlack = $('.bgBlack');


$('footer span:first-child').click(function(){

    $disclaimer.animate({left: '0', opacity: '1'}, 800, function(){

        if ($disclaimer.is(':visible')) {

            $bgBlack.animate({right: '0'}, 0, function(){

                    $bgBlack.animate({opacity: '.5'}, 600);

                });

            $disclaimer.children('.back').click(function(){

                $disclaimer.animate({left: '-100%', opacity: '0'}, 800);

                $bgBlack.animate({opacity: '0'}, 600, function(){

                    $bgBlack.animate({right: '-100%'}, 0);

                });

            });

        }
        else {

            // $('#disclaimer span').animate({right: '-100%', opacity: '.8'}, 600);

        }

    });
});
//DISCLAMER MODAL END
