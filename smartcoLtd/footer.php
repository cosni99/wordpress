<!--追加したコードサイトtopにもどるやつ-->
<div id="page_top"><a href="#"></a></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(function() {
    var pagetop = $('#page_top'); 
    pagetop.hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) {  //70pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500); //0.5秒かけてトップへ移動
        return false;
    });

    //ハンバーガー
    $(".openbtn1").click(function () {//ボタンがクリックされたら
        $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
        $(".mynav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    });

    $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
        $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
        $(".mynav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
    });
});
</script>

<footer class="myfoot">
    
    <p>Copyright(C) 2006-2022 <?php bloginfo( 'name' ); ?> All Rights Reserve.</p>
</footer>
<?php wp_footer();?>

</body>
</html>