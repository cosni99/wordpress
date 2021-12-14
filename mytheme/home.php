<?php get_header(); ?><!--header.php読み込み-->
<main class="mycontainer">
<div class="alignwide">

  <div class="myposthead">
    <h1>最新情報</h1>
    <p>RECENT</p>
  </div>

  <div class="mypostlist">
  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

      <article <?php post_class();?>>
        <a href="<?php the_permalink(); ?>"><!--記事ページのリンク-->

          <?php if( has_post_thumbnail() ){ ?><!--アイキャッチ画像設定されているか判断-->
          <figure>
            <?php the_post_thumbnail(); ?><!--アイキャッチ画像表示-->
          </figure>
          <?php } ?>

          <h2><?php the_title();?></h2><!--記事タイトル-->
        </a>
      </article>

  <?php } 
  }?><!--現在の投稿を繰り返すend-->
  </div>

  <?php the_posts_pagination( array(
	'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
	'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-arrow-right-alt2"></span>'
  ) ); ?><!--ページネーション-->

</div><!--alignwideEND-->
</main>
<?php get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->