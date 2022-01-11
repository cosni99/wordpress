<?php get_header(); ?><!--header.php読み込み-->

  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

  <article <?php post_class( 'mycontainer' );?>>
    <div class="myposthead">
      <?php the_category(); ?><!--記事のカテゴリー-->

      <h1><?php the_title();?></h1><!--記事タイトル-->

      <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
        <?php echo esc_html( get_the_date() ); ?><!--投稿日時-->
      </time>
      </div>
      
      <?php the_content();?><!--記事本文-->

      <?php the_post_navigation(); ?><!--前後記事へのリンク-->
    
  </article>

  <?php } 
  }?><!--現在の投稿を繰り返すend-->

<?php //get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->