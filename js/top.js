// DOCUMENT READY
$(document).ready(function() {
    "use strict";

    Splitting();
    let txt = $(".visual__title-main .word .char");
    let txtSub = $(".visual__title-sub .word .char");
    let tl = gsap.timeline();

    gsap.set(txt, {opacity:1, translateY:0});

    tl.from(txt, {
        opacity: 0,
        translateY: "1em",
        duration: 1,
        stagger: 0.1,
        delay: 0.5,
    })
    .from(txtSub, {
        opacity: 0,
        translateY: "1em",
        duration: 0.5,
        stagger: 0.05,
    }, "-=1.25");
    
});


// WINDOW LOAD
$(window).bind('load', function() {
    "use strict";
    $.ajax({
        url: "info/_custom/?limit=2&cat=1",
        dataType: "jsonp",
        success: function(json) {
            $.each(json.data, function(i, val) {
                var date = val.date.split("/");
                var items =
                    '<li class="news__list-item">' +
                    '<a href="info/' + val.url + '">' +
                    '<span class="date">' + date[0] + '.' + date[1] + '.' + date[2] + '</span>' +
                    '<span class="title">' + val.title + '</span></a></li>';
                $(".news__list").append(items);
            });
        },
    });
    $.ajax({
        url: 'info/_custom/?limit=6&cat=2',
        dataType: 'jsonp',
        success: function(json) {
            $.each(json.data, function(i, val) {
                // get IMG
                var arrImg = ["img01", "img02", "img03", "img04", "img05", "img06", "img07", "img08", "img09", "img010"];
                var loading = "";
                for (let i = 0; i < arrImg.length; i++) {
                    var getImg = val[arrImg[i]];
                    if (getImg) {
                        loading = $(getImg).attr("src");
                        break;
                    }
                }
                if (loading == "") {
                    loading = "./images/udr-dummy.jpg";
                }
                var checkbox = val.checkbox;
                if (checkbox != "") {
                    var items =
                        '<div class="event__list-item">' +
                        '<p class="item__status">' + val.checkbox + '</p>' +
                        '<p class="item__img">' +
                        '<img src="' + loading + '" alt="' + val.title + '" width="386" height="240" loading="lazy">' +
                        '</p>' +
                        '<p class="item__title">' + val.title + '</p>' +
                        '<p class="item__detail date">' +
                        '<span class="item__detail-main">開催日</span>' +
                        '<span class="item__detail-desc">' + val.tbl01 + '</span>' +
                        '</p>' +
                        '<p class="item__detail time">' +
                        '<span class="item__detail-main">時間</span>' +
                        '<span class="item__detail-desc">' + val.tbl02 + '</span>' +
                        '</p>' +
                        '<p class="item__detail place">' +
                        '<span class="item__detail-main">場所</span>' +
                        '<span class="item__detail-desc">' + val.tbl03 + '</span>' +
                        '</p>' +
                        '<a href="./info/' + val.url + '" class="item__link"></a>' +
                        '</div>'
                    $('.event__list').append(items);
                }
            });
            if ($('.event__list').length > 0) {
                $('.event__list').slick({
                    dots: false,
                    infinite: true,
                    speed: 600,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 4000,
                    arrows: true,
                    centerMode: false,
                    centerPadding: 0,
                    pauseOnHover: false,
                    fade: false,
                    variableWidth: false,
                    prevArrow: $('.event__navi-item.prev'),
                    nextArrow: $('.event__navi-item.next'),
                    responsive: [{
                            breakpoint: 751,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 525,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            }
        }
    });
    $.ajax({
        url: 'case/_custom/?limit=6',
        dataType: 'jsonp',
        success: function(json) {
            $.each(json.data, function(i, val) {
                // get IMG
                var arrImg = ["img01", "img02", "img03", "img04", "img05", "img06", "img07", "img08", "img09", "img010", "img011", "img012", "img013", "img014", "img015", "img016", "img017", "img018", "img019", "img020", "img021"];
                var loading = "";
                for (let i = 0; i < arrImg.length; i++) {
                    var getImg = val[arrImg[i]];
                    if (getImg) {
                        loading = $(getImg).attr("src");
                        break;
                    }   
                }
                if (loading == "") {
                    loading = "./images/udr-dummy.jpg";
                }

                var items =
                    '<li class="work__list-item">' +
                    '<a href="./case/' + val.url + '">' +
                    '<div class="item__thumb">' +
                    '<span class="item__thumb-cat">' + val.category_name + '</span>' +
                    '<img src="' + loading + '" alt="' + val.title + '" width="386" height="240" loading="lazy">' +
                    '</div>';
                if (!!val.txt_address) {
                    items +=
                        '<p class="item__address">' + val.txt_address + '</p>' +
                        '<p class="item__customer">' + val.txt_name + '</p>';
                }
                items +=
                    '<p class="item__title">' + val.title + '</p>' +
                    '</a>' +
                    '</li>';
                $('.work__list').append(items);
            });
        }
    });
    $.ajax({
        url: 'land/_custom/?limit=6',
        dataType: 'jsonp',
        success: function(json) {
            $.each(json.data, function(i, val) {
                // get IMG
                var arrImg = ["img01", "img02", "img03", "img04", "img05", "img06", "img07", "img08", "img09", "img010"];
                var loading = "";
                for (let i = 0; i < arrImg.length; i++) {
                    var getImg = val[arrImg[i]];
                    if (getImg) {
                        loading = $(getImg).attr("src");
                        break;
                    }
                }
                if (loading == "") {
                    loading = "./images/udr-dummy.jpg";
                }
                var stt = i + 1;
                if (stt < 10) {
                    i = '0' + stt
                }
                var items =
                    '<li class="land__list-item">' +
                    '<a href="./land/' + val.url + '">' +
                    '<div class="item__title">' +
                    '<p class="item__title-num mb0">' + i + '</p>' +
                    '<p class="item__title-name">' + val.category_name + '</p>' +
                    '</div>' +
                    '<div class="item__img">' +
                    '<img src="' + loading + '" alt="' + val.category_name + '" width="386" height="240" loading="lazy">' +
                    '</div>' +
                    '<div class="item__content">' +
                    '<p class="item__content-address"><span>住所</span>' + val.tbl01 + '</p>' +
                    '<p class="item__content-price"><span>価格</span>' + val.tbl02 + '</p>' +
                    '<p class="item__content-area"><span>面積</span>' + val.tbl03 + '</p>' +
                    '</div>' +
                    '</a>' +
                    '</li>';
                $('.land__list').append(items);
            });
            if ($('.land__list').length > 0) {
                $('.land__list').slick({
                    dots: false,
                    infinite: false,
                    speed: 600,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 4000,
                    arrows: true,
                    centerMode: false,
                    centerPadding: 0,
                    pauseOnHover: false,
                    fade: false,
                    variableWidth: true,
                    prevArrow: $('.land__navi-item.prev'),
                    nextArrow: $('.land__navi-item.next'),
                    responsive: [{
                            breakpoint: 751,
                            settings: {
                                slidesToShow: 2,
                                variableWidth: false,
                            }
                        },
                        {
                            breakpoint: 525,
                            settings: {
                                slidesToShow: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
            }
        }
    });
    // SLIDER
    if ($('.visual__slider').length > 0) {
        $('.visual__slider').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            centerMode: false,
            centerPadding: 0,
            pauseOnHover: false,
            fade: true,
            variableWidth: false,
        });
    }
    /*============== END - SLIDER ================*/

    // CONTENT LOAD ANIMATION
    AOS.init({
        offset: 200,
        duration: 1100,
        disable: 'mobile',
        once: true
    });
    /*============== END - CONTENT LOAD ANIMATION ================*/
});