<?php get_header(); ?><!--header.php読み込み-->

  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

  <article <?php post_class( 'mycontainer' );?>>
    <div class="myposthead">
      

      <h1><?php the_title();?></h1><!--記事タイトル-->

      <?php if(has_tag()==true) { ?><!--タグ有無確認-->
        <span class="dashicons dashicons-tag"></span>
        <?php the_tags(); ?>
      <?php } ?>

      <?php $picurl = get_field('pic') ?><!--配列にurlなどの情報代入-->

      <p><img src="<?= $picurl['sizes']["medium_large"]?>" alt=""></p>

      <table class="kasutamu">

      <tr><th>コース名</th><td><?php echo get_field('cosu') ?></td></tr>
      <tr><th>概要</th><td><?php echo get_field('gaiyo') ?></td></tr>
      <tr><th>開始日</th><td><?php echo get_field('jikan') ?></td></tr>
      <tr><th>料金</th><td><?php echo get_field('ryouri') ?></td></tr>
      <tr><th>シェフ</th><td><?php echo get_field('syef') ?></td></tr>

      </table>
 
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