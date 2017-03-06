$(function() {
    var $header = $('#top-head');
    // Nav Toggle Button
    $('#nav-toggle').click(function() {
        $header.toggleClass('open');
        $('.header-navi-shadow').toggleClass('black-shadow');
    });
});

//スムーススクロール
$(function() {
    $('.to-top a').click(function() {
        //異動先コンテンツの位置を取得
        var target = $($(this).attr('href')).offset().top;
        if ($(window).width() >= 960) {
            target -= 70;
        } else {
            target -= 55;
        };
        //コンテンツへスクロール
        $('html, body').animate({ scrollTop: target }, 500);
        return false;
    });
});

$(function() {
    $('#eye-catch a').click(function() {
        //異動先コンテンツの位置を取得
        var target = $($(this).attr('href')).offset().top;
        if ($(window).width() >= 960) {
            target -= 70;
        } else {
            target -= 55;
        };
        //コンテンツへスクロール
        $('html, body').animate({ scrollTop: target }, 500);
        return false;
    });
});
//スムーススクロール終わり

//会社概要タブ切り替え
$(function() {
    $(".tab-button a").click(function() {
        var tab = $(this).attr('href');
        $('.tab-panel').css('display', 'none');
        $('.tab-button a').removeClass('current');

        $(tab).css('display', 'block');
        $(this).addClass('current');
        return false;
    });
});
//会社概要タブ切り替え終わり

//事業内容タブ切り替え
$(function() {
    $(".service-tab-button a").click(function() {
        var service_tab = $(this).attr('href');
        $('.service-tab-panel').css('display', 'none');
        $('.service-tab-button a').removeClass('service-current');

        $(service_tab).css('display', 'block');
        $(this).addClass('service-current');
        return false;
    });
});
//事業内容タブ切り替え終わり