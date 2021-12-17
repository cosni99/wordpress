<?php

function mytheme_setup(){
  //(C)のcssを有効化
  add_theme_support('wp-block-styles');
  // 縦横比を維持したレスポンシブを有効化
  add_theme_support( 'responsive-embeds' );
  	// （Ｅ）のCSSを有効化＆エディタに読み込み
	add_theme_support( 'editor-styles' );
  add_editor_style( 'editor-style.css' );
  	// ページのタイトルを有効化
  add_theme_support( 'title-tag' );
  // link、style、scriptのHTML5対応を有効化
	add_theme_support( 'html5', array( 
		'style', 
		'script' 
  ) );
  // アイキャッチ画像を有効化
  add_theme_support( 'post-thumbnails' );
  // 全幅・幅広を有効化
  add_theme_support( 'align-wide' );
  // メニューのロケーションを登録
	register_nav_menus( array(
		'primary' => 'ナビゲーション'
  ) );
  // ２段組みを有効化
	add_theme_support( 'mycols' );

   // ブロックベースのウィジェットを無効化
  remove_theme_support( 'widgets-block-editor' );
}
add_action('after_setup_theme','mytheme_setup');

//オリジナルテーマのcssを読み込む関数
function mytheme_enqueue(){
  // Google Fontsを読み込み
	wp_enqueue_style( 
		'myfonts', 
		'https://fonts.googleapis.com/css?family=Josefin+Sans:300,700&display=swap', 
		array(), 
		null 
	);

  // Dashiconsを読み込み
	wp_enqueue_style( 
		'dashicons' 
	);
  //(D)テーマのcssを読み込み
  wp_enqueue_style(
    'mytheme_style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
};
add_action('wp_enqueue_scripts','mytheme_enqueue');

function mytheme_widgets() {

	// ウィジェットエリアを登録
	register_sidebar( array(
		'id' => 'sidebar-1',
    'name' => 'フッターメニュー',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>'
	) );

}
add_action( 'widgets_init', 'mytheme_widgets' );


// アクションフックを無名関数で書いた場合
add_action( 'widgets_init', function(){
	// ウィジェットエリアを登録
	register_sidebar( array(
		'id' => 'sidebar-2',
    'name' => '動画背景フッター',
    'before_widget' => '<section id="%1$s" class="bgvideo widget %2$s">',
		'after_widget'  => '</section>'
	) );
});

// ブロックスタイル
register_block_style(
	'core/image',
	array(
		'name' => 'mycard',
		'label' => 'カード型',
		'inline_style' => 
			'.is-style-mycard {
				padding: 10px;
				border: solid 1px gray;
				box-shadow: 5px 5px 5px gray;
			}'
	)
);

register_block_style(
	'core/heading',
	array(
		'name' => 'mybar',
		'label' => '基本色のバー',
		'inline_style' => 
			'.is-style-mybar {
				border-left: solid 14px var(--basecolor);
				padding-left: 14px;
			}'
	)
);