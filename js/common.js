// WINDOW LOAD
$(window).bind('load', function() {
    "use strict";
    // ANCHOR LINK
    function anchorLink(el) {
        var p = $(el).offset();
        var offset_PC = 78;
        var offset_SP = 64;
        if ($(window).width() > 750) {
            $('html,body').animate({ scrollTop: p.top - offset_PC }, 400);
        } else {
            $('html,body').animate({ scrollTop: p.top - offset_SP }, 400);
        }
    }

    // ANCHOR FROM OTHER PAGE
    var hash = location.hash;
    if (hash && $(hash).length > 0) {
        anchorLink(hash);
    }

    // ANCHOR IN PAGE
    $('a[href^="#"]').click(function() {
        var get_ID = $(this).attr('href');
        if ($(get_ID).length) {
            anchorLink(get_ID);
            // CLOSE SP NAV
            if ($('body').hasClass('open-nav')) {
                $('.header .button').trigger('click');
            }
            return false;
        }
    });
    // =========== END - ANCHOR LINK ============


    // SCROLL TO MAIL FORM
    if ($('#fmail-section').length) {
        var params = location.search;
        if (params.search('mode') >= 0) {
            var form_position = $('#fmail-section').offset().top;
            form_position = parseInt(form_position);
            if ($(window).width() > 750) {
                $('html,body').animate({ scrollTop: form_position - 0 }, 400);
            } else {
                $('html,body').animate({ scrollTop: form_position - 0 }, 400);
            }
        }
    }
    // =========== END - SCROLL TO MAIL FORM ============


    // LAZY LOAD RESOURCE
    $('[data-href]').each(function() {
        var _this = $(this);
        var href = $(this).data('href');
        setTimeout(function() {
            _this.attr('href', href);
        }, 3000);
    });
    $('[data-src]').each(function() {
        var _this = $(this);
        var src = $(this).data('src');
        setTimeout(function() {
            _this.attr('src', src);
        }, 3000);
    });
    // =========== END - LAZY LOAD RESOURCE ============
});



// WINDOW LOAD/SCROLL
$(window).bind('load scroll', function() {
    // TO-TOP
    if ($(this).scrollTop() >= 500) {
        $('.to-top').addClass('show');
    } else {
        $('.to-top').removeClass('show');
    }

    let heightHeader = $('.header').outerHeight(true);

    if ($(this).scrollTop() >= heightHeader || $(this).scrollTop() >= heightHeader) {
        $('.header').addClass('active');
    } else {
        $('.header').removeClass('active');
    }
    
    if ($(this).scrollTop() >= (heightHeader + 50) || $(this).scrollTop() >= (heightHeader + 50)) {
        $('.btn__fixed').addClass('show');
    } else {
        $('.btn__fixed').removeClass('show');
    }
    // =========== END - TO-TOP ============
});



// DOCUMENT READY
$(document).ready(function() {
    "use strict";
    
    // MENU TOGGLE SP
    $('.header .button').click(function() {
        $(this).toggleClass('-menu-open');
        $('body').toggleClass('open-nav');
    });
    $(document).on('mousedown touchstart', function(e) {
        if ($(e.target).closest("#gnavi, #menu-toggle").length === 0) {
            if ($('body').hasClass('open-nav')) {
                $('#menu-toggle').trigger('click');
            }
        }
    });
    // =========== END - MENU TOGGLE SP ============

    // SUB NAV SP SLIDE TOGGLE
    $('.nav .nav__item.has-sub>span').click(function() {
        var screenWidth = $(window).width();
        if (screenWidth <= 750) {
            $(this).toggleClass('open');
            $(this).next().stop().slideToggle(200);
        }
    });
    // =========== END - SUB NAV SP SLIDE TOGGLE ============



    // CHANGE TAB
    $('[data-tab]').click(function() {
        var group = $(this).data('tab-group');
        var index = $(this).data('tab');
        $('[data-tab][data-tab-group="' + group + '"].active').removeClass('active');
        $(this).addClass('active');

        $('[data-tab-content][data-tab-group="' + group + '"].active').removeClass('active');
        $('[data-tab-content="' + index + '"][data-tab-group="' + group + '"]').addClass('active');
    });
    // =========== END - CHANGE TAB ============



    // ACCORDION
    $(".accordion-button").click(function(e) {
        e.preventDefault();
        $(this).toggleClass("open");
        var accordion_ID = $(this).attr('id');
        var accordion_content = $('[data-accordion-for="' + accordion_ID + '"]');
        accordion_content.stop().slideToggle(200);
    });
    // =========== END - ACCORDION ============

    //Fixed Contact Button
    let heightFixed = $('.btn__fixed');
    let wrapper = $('#wrapper');
    let toTop = $('.to-top');

    function setHeight() {
        wrapper.css(
            'margin-bottom', heightFixed.outerHeight(true) + 'px'
        );
        toTop.css(
            'bottom', 'calc(' + heightFixed.outerHeight(true) + 'px + 10px)'
        );
    }

    function removeHeight() {
        wrapper.css(
            'margin-bottom', '0'
        );
        toTop.css(
            'bottom', '20px'
        );
    }

    if ($(window).width() < 751) {
        setHeight();
    }else {
        removeHeight()
    }

    $(window).resize(function(){
        if($(window).width() < 751) {  
            setHeight();
        }else {
            removeHeight();
        }
    });
    
    $(".udr-box-qa .udr-qa li .ttl").click(function() {
        $(this).next().slideToggle();
        $(this).parent().toggleClass("open");
    });
});