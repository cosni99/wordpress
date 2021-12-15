<?php get_header(); ?><!--header.php読み込み-->

  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->

  <main <?php post_class( 'mycontainer' );?>>

      <?php the_content();?><!--記事本文-->
    
  </main>

  <?php } 
  }?><!--現在の投稿を繰り返すend-->

<!--最新記事のタイトルを何件か表示する-->
<div class="mycontainer new">
<?php
  $args = array(
    'post_type' => 'post', // 投稿タイプ
    'posts_per_page' => 3, // 1ページに表示する件数
    'no_found_rows' => true,  //ページャーを使う時はfalseに。
    );
  $the_query = new WP_Query($args);
  //$get_num = $the_query->post_count;//取得した数
  
  echo "<h4>what's new</h4>";
  if ( $the_query->have_posts() ) :?>

  <ul>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php echo get_the_date().' '; the_title(); ?></a></li>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </ul>
<?php endif; ?>
</div>
<!--最新記事END-->
<?php get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->