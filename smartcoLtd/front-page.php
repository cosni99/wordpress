<?php get_header(); ?><!--header.php読み込み-->

<div class="video-wrap">
        <section class="bgvideo"><h2 class="fadeUp">情報を受信する力</h2>
        <h2 class="fadeUp delay-time02">&nbsp;情報をアイディアに変える力</h2>
        <h2 class="fadeUp delay-time04">&nbsp;&nbsp;情報を形に変える力を大切にしたい</h2>
        </section>
        <video class="fbgvsrc" src="<?php echo esc_url( get_theme_file_uri( 'Forest.mp4' ) ); ?>" autoplay loop muted>
        </video>
</div>
<div class="wp-block-spacer" style="height: 40px;" aria-hidden="true"> </div>


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
  
  if ( $the_query->have_posts() ) :?>
  <img src="<?php echo esc_url( get_theme_file_uri( 'ba_whats-new.jpg' ) ); ?>" alt="">
  <ul>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php echo get_the_date().' '; the_title(); ?></a></li>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </ul>
<?php endif; ?>
</div>

<div class="wp-block-spacer" style="height: 40px;" aria-hidden="true"> </div>

<!--最新記事END-->
<?php //get_sidebar(); ?><!--sidebar.php読み込み-->
<?php get_footer(); ?><!--footer.php読み込み-->