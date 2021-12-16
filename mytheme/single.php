<?php get_header(); ?><!--header.php読み込み-->

  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

  <article <?php post_class( 'mycontainer' );?>>
    <div class="myposthead">
      <?php the_category(); ?><!--記事のカテゴリー-->

      <h1><?php the_title();?></h1><!--記事タイトル-->
      <span class="dashicons dashicons-clock"></span>
      <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
        <?php echo esc_html( get_the_date() ); ?><!--投稿日時-->
      </time>
      </div>
      
      <?php the_content();?><!--記事本文-->

      <aside class="myshare"><!--シェアボタン-->
        <h2><span class="dashicons dashicons-share"></span> SHARE</h2>
        <div class="mypostlist">
          <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" class="mytwitter"
          onclick="window.open(this.href, 'new', 'width=500,height=400'); return false;">
	          <span class="dashicons dashicons-twitter"></span>
	          <span class="screen-reader-text">Twitter</span>
          </a>

          <a href="https://www.facebook.com/share.php?u=<?php echo    urlencode( get_permalink() ); ?>" class="myfacebook"
          onclick="window.open(this.href, 'new', 'width=500,height=400'); return false;">
	          <span class="dashicons dashicons-facebook-alt"></span>
	          <span class="screen-reader-text">Facebook</span>
          </a>
        </div>
      </aside>

      <?php the_post_navigation(); ?><!--前後記事へのリンク-->

    <aside class="myrelated">
    <h2>RELATED</h2>
    <div class="mypostlist">
    <?php
    //同じカテゴリーの関連記事タイトルと画像をランダムで表示
    $myposts = get_posts( array(
      'posts_per_page' => '4',
      'post__not_in' => array( get_the_ID() ),
      'category__in' => wp_get_post_categories( get_the_ID() ),
      'orderby' => 'rand'
    ) );

    if($myposts){
      foreach($myposts as $post){
          setup_postdata($post);?>
          <article>
          <a href="<?php the_permalink()?>">

          <?php if(has_post_thumbnail()){ ?>
          <figure>
            <?php the_post_thumbnail();?>
          </figure>
          <?php } ?>

          <h3><?php the_title();?></h3>

          </a>
          </article>
     <?php }
        wp_reset_postdata();
    }?>
    </div>
    </aside>

  </article>

  <?php } 
  }?><!--現在の投稿を繰り返すend-->

<?php get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->