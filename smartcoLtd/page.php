<?php get_header(); ?><!--header.php読み込み-->

  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

  <article <?php post_class( 'mycontainer' );?>>
    <div class="myposthead">

      <h1><?php the_title();?></h1><!--記事タイトル-->

    </div>

      <?php the_content();?><!--記事本文-->
    
  </article>

  <?php } 
  }?><!--現在の投稿を繰り返すend-->

<?php //get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->