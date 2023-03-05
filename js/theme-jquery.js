/**
 * @author uiocean
 * @version 1.0
 *
 */
(function($) {
    "use strict";
    var CRI = {};
    $.fn.exists = function() {
        return this.length > 0;
    };

    /* ---------------------------------------------- /*
     * lightbox gallery
    /* ---------------------------------------------- */
    CRI.Gallery = function() {
        var GalleryPopup = $('.lightbox-gallery');
        if (GalleryPopup.length > 0) {
            $('.lightbox-gallery').magnificPopup({
                delegate: '.gallery-link',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-fade',
                fixedContentPos: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after CRE current image
                }
            });
        }
        var VideoPopup = $('.video-btn');
        if (VideoPopup.length > 0) {
            $('.video-btn').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
    }

    /*--------------------
    * Masonry
    ----------------------*/
    CRI.masonry = function() {
        var portfolioWork = $('.portfolio-content');
        if (portfolioWork.length > 0) {
            $(portfolioWork).isotope({
                resizable: false,
                itemSelector: '.grid-item',
                layoutMode: 'masonry',
                filter: '*'
            });
            //Filtering items on portfolio.html
            var portfolioFilter = $('.filter li');
            // filter items on button click
            $(portfolioFilter).on('click', function() {
                var filterValue = $(this).attr('data-filter');
                portfolioWork.isotope({
                    filter: filterValue
                });
            });
            //Add/remove class on filter list
            $(portfolioFilter).on('click', function() {
                $(this).addClass('active').siblings().removeClass('active');
            });
        }
    }

    /*--------------------
        * Cart Qty
    ----------------------*/
    CRI.CartQty = function() {
        $(".qty_btn").on("click", function() {
            var $button = $(this);
            var oldQty = $button.parent().find(".cart-qty-input").val();
            if ($button.text() === "+") {
                var newQty = parseFloat(oldQty) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldQty > 0) {
                    var newQty = parseFloat(oldQty) - 1;
                } else {
                    newQty = 1;
                }
            }
            $button.parent().find(".cart-qty-input").val(newQty);
        });
    }

    /*--------------------
        * Countdown
    ----------------------*/
    CRI.CountTimer = function() {
        var $count_timer = $('.count-down');
        var regionalVar = { days: 'Days', day: 'Day', years: 'Years', year: 'Year', hours: 'Hours', hour: 'Hour', minutes: 'Minutes', minute: 'Minute', seconds: 'Seconds', second: 'Second' };
        if ($count_timer.length > 0) {
            $('.count-down').countdown({ regional: regionalVar });
        }
    }
    /*--------------------
        * Countdown
    ----------------------*/
    CRI.CountTimerSM = function() {
        var $count_timer = $('.count-down-sm');
        var regionalVar = { days: 'D', day: 'D', years: 'Y', year: 'Y', hours: 'H', hour: 'H', minutes: 'M', minute: 'M', seconds: 'S', second: 'S' };
        if ($count_timer.length > 0) {
            $('.count-down-sm').countdown({ regional: regionalVar });
        }
    }

    /*--------------------
        * Uploaded Preview
    ----------------------*/
    CRI.px_avatar_Upload = function() {
        var $pximageUpload = $('.px-avatar-upload');
        if ($pximageUpload.length > 0) {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#px_image_Preview').css('background-image', 'url('+e.target.result +')');
                        $('#px_image_Preview').hide();
                        $('#px_image_Preview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#px_image_Upload").change(function() {
                readURL(this);
            });
        }
    }


    /* ---------------------------------------------- /*
     * Header height
    /* ---------------------------------------------- */
    CRI.HeaderHeight = function() {
        var HHeight = $('.header-height').outerHeight()
        var HHeightTop = $('.header-top').outerHeight()
        $('.header-height-bar').css("min-height", HHeight);
    }


    // Window on Load
    $(window).on("load", function() {
        CRI.masonry();
    });
    // Document on Ready
    $(document).ready(function() {
        CRI.Gallery(),
        CRI.masonry();
        CRI.CartQty(),
        CRI.CountTimerSM(),
        CRI.CountTimer(),
        CRI.px_avatar_Upload(),
        CRI.HeaderHeight();
    });

    // Document on Scrool
    $(window).scroll(function() {
    });

    // Window on Resize
    $(window).resize(function() {
        CRI.HeaderHeight();
    });

})(jQuery);