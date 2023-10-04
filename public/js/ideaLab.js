$(function () {
    setTimeout(function () {
        $('.start p').fadeIn(1600);
    }, 500); //0.5秒後にロゴをフェードイン!
    setTimeout(function () {
        $('.start').fadeOut(500);
    }, 2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});

$('.slider').slick({
    autoplay: true,//自動で動く
    infinite: true,//スライドをループさせる
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    centerMode: true,//要素を中央ぞろえにする
    variableWidth: true,//幅の違う画像の高さを揃えて表示
    dots: true,//下部ドットナビゲーションの表示
});