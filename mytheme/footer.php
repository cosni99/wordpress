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
});
</script>
<!--ここまで追加したコード-->
<footer class="myfoot">
  <?php bloginfo( 'name' ); ?>
  </footer>

<?php wp_footer();?>

</body>
</html>