<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if( is_single() ){ ?><!--OGPシングルページなら-->
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="<?php echo esc_attr( wp_strip_all_tags( get_the_excerpt() ) ); ?>">

      <?php if( has_post_thumbnail() ){ ?><!--アイキャッチ画像あれば-->
      <?php $myimg = get_post_thumbnail_id(); ?>
      <meta property="og:image" content="<?php echo esc_url( wp_get_attachment_url( $myimg ) ); ?>">
      <meta property="og:image:width" content="<?php echo esc_attr( wp_get_attachment_metadata( $myimg )['width'] ); ?>">
      <meta property="og:image:height" content="<?php echo esc_attr( wp_get_attachment_metadata( $myimg )['height'] ); ?>">
      <?php } ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta property="fb:app_id" content="XXXXXXXXXXXXXX">
    <?php } ?><!--OGP_END-->

  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>

  <header class="myhead mycontainer">
    <div class="alignwide">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <figure>
      <img src="<?php echo esc_url( get_theme_file_uri( 'logo.jpg' ) ); ?>" alt="" style="width:100px">
      </figure>
      <?php bloginfo( 'name' ); ?><!--サイト名表示-->
    </a>

    <p><?php bloginfo( 'description' ); ?></p><!--サイト説明-->

    </div>
  </header>

<?php if( has_nav_menu( 'primary' ) ){ ?><!--ナビ-->
  <nav class="mynav">
    <div class="mycontainer">
    <div class="alignwide">
    <?php wp_nav_menu( array(
	      'theme_location' => 'primary',
      ) ); ?>
    </div>
    </div>
  </nav>
<?php } ?>



<!--フロントページ以外にクラスmycols--><div 
<?php if( current_theme_supports( 'mycols' ) && !is_front_page() ){ ?>
class="mycols"
<?php } ?>>

<div class="mycontent">

<!--フロントページ以外にぱんくずリスト--><?php if(!is_front_page()){
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
} ?>
