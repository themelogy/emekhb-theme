/*
    Main Jquery File
*/

(function($) {
    "use strict";


    $(document).ready(function(){

        /*----------------------------------------------------*/
        /*  Slider Preloader
        /*----------------------------------------------------*/
        $(".preloader").delay(700).fadeOut();

        /*----------------------------------------------------*/
        /*  Lazy Load
        /*----------------------------------------------------*/
        $('.lazy').Lazy();

        /*----------------------------------------------------*/
        /*  Go Top
        /*----------------------------------------------------*/
        $('a[href="#appointment"]').click(function () {
            $('html, body').animate({ scrollTop: 350 }, 800);
            return false
        });

        /*----------------------------------------------------*/
        /*  Appointment Date
        /*----------------------------------------------------*/
        $('.appointment_home_form input').blur(function () {
            if ($(this).val()) {
                $(this).addClass('notEmpty')
            }
            else{
                $(this).removeClass('notEmpty')
            }
        });

        /*----------------------------------------------------*/
        /*  Time Table Filter
        /*----------------------------------------------------*/
        var tableCell = $('.cell');
        $('.timeTableFilters li').on('click', function () {
            $('.active').removeClass('active');
            $(this).addClass('active');

            var filter_val = $(this).attr('data-filter');

            tableCell.addClass('bgf');
            if(filter_val == 'all'){
                tableCell.removeClass('bgf')
            }
            else{
                tableCell.addClass('bgf');
                $('.timeTable td.'+ filter_val).removeClass('bgf')
            }
        });


        /*----------------------------------------------------*/
        /*  Count Up
        /*----------------------------------------------------*/


        /*----------------------------------------------------*/
        /*  Owl Carousels
        /*----------------------------------------------------*/

    });



    /*----------------------------------------------------*/
    /*  Testimonial Slider flexslider
    /*----------------------------------------------------*/


    /*----------------------------------------------------*/
    /*  Aflix
    /*----------------------------------------------------*/
    $(".top_bar").affix({
        offset: {
            top: $('.navbar2,.navbar3').height()
        }
    });
    $(".navbar2,.navbar3").affix({
        offset: {
            top: $('.top_bar').height()
        }
    });


    /*----------------------------------------------------*/
    /*  Background Slider flexslider
    /*----------------------------------------------------*/


})(jQuery);

