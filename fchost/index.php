
<?php 

global $uri ;
global $dir ; 

  get_header();?>
    <main>

        <div id="carousel-main" class="carousel slide carousel-blue" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-main" data-bs-slide-to="0" class=""></li>
                <li data-bs-target="#carousel-main" data-bs-slide-to="1" class="active" aria-current="true"></li>
                <li data-bs-target="#carousel-main" data-bs-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
            
                    <div class="animate-bubble">
                        <div class="bubble a-one"></div>
                        <div class="bubble a-three"></div>
                        <div class="bubble a-four"></div>
                        <div class="bubble a-six"></div>
                        <div class="bubble a-eight">
                            <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                        </div>
                        <div class="bubble a-nine">
                            <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                        </div>
                        <div class="bubble a-ten">
                            <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                        </div>
                    </div>

                    <div class="container d-flex align-items-center justify-content-center">
    
                        <div class="row">
    
                            <div class="col-sm slider-info d-flex align-items-center flex-column justify-content-center text-start">
    
                                <span class="h2 align-self-start">分析・企画・設計からお手伝い</span>
    
                                <p class="mt-2">分析業務では、マインドマップやUMLを用い、しっかりと顧客要求や業務フローの「見える化」を行います。また、Matlab/Simulinkなどを使ったモデルベース・デザイン開発手法を取り入れ、効率の良い設計開発を行います。</p>
    
                                <div class="btn-groups align-self-start">

                                    <a class="btn btn btn-primary align-self-start animate__bounceIn animate__infinite p-2" href="<?php echo home_url('/details/'); ?>">詳細</a>

                                    <a class="btn btn btn-secondary align-self-start p-2" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>

                                </div>
    
                            </div>
    
                            <div class="col-sm-7 d-flex align-items-center flex-column justify-content-center text-end">
    
                                <div class="content-img"><img src="<?=$uri?>/assets/img/design/banner-3.gif" width="550" height="480" alt="Hosting Banner"></div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
                <div class="carousel-item active">

                <div class="container d-flex align-items-center justify-content-center">

                    <div class="row">

                        <div class="col-sm slider-info d-flex align-items-center flex-column justify-content-center text-left">

                            <span class="h2 animate__headShake text-left align-self-start">内側から、外側から、ソフトウェアをデザイン</span>

                            <p class="mt-2">ソフトウェアの構造（内側）は、徹底したオブジェクト指向によって、ロジックの資産化、コア技術のエンジン化、マルチプラットフォームへの展開を容易にします。ソフトウェアのインタフェース（外側）は、情報に適したインタフェース、心地良い、迷わないインタフェースを意識し、シンプルで美しいデザインとなるよう心がけています。</p>

                            <div class="btn-groups align-self-start">

                                <a class="btn btn btn-primary align-self-start animate__bounceIn animate__infinite p-2" href="<?php echo home_url('/details/'); ?>">詳細</a>

                                <a class="btn btn btn-secondary align-self-start p-2" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>

                            </div>

                        </div>

                        <div class="col-sm d-flex align-items-center flex-column justify-content-center text-end">

                            <div class="content-img"><img src="<?=$uri?>/assets/img/design/server-09.svg" width="550" height="480" alt="Server Banner"></div>

                        </div>

                    </div>

                </div>

                </div>
                <div class="carousel-item">

                    <div class="container d-flex align-items-center justify-content-center">

                        <div class="animate-bubble">
                            <div class="bubble a-one"></div>
                            <div class="bubble a-three"></div>
                            <div class="bubble a-four"></div>
                            <div class="bubble a-six"></div>
                            <div class="bubble a-eight">
                                <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                            </div>
                            <div class="bubble a-nine">
                                <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                            </div>
                            <div class="bubble a-ten">
                                <img src="<?=$uri?>/assets/img/design/a3.png" width="30" height="25" alt="Halci">
                            </div>
                        </div>
    
                        <div class="row">
    
                            <div class="col-sm slider-info d-flex align-items-center flex-column justify-content-center text-start">
    
                                <span class="h2 animate__headShake align-self-start">最新テクノロジーの調査・研究</span>
    
                                <p class="mt-2">Webサービス、オープンソース技術など、常に情報をキャッチし、新しい情報の流れ、技術動向、コミュニケーション手法について分析し応用方法を研究しています。また、研究機関や他のITベンチャー企業との連携を行い、ニューラルネットワークを応用した画像解析技術やパターン解析技術など、アカデミックなテクノロジーの実用化を行っています。</p>
    
                                <div class="btn-groups align-self-start">

                                    <a class="btn btn btn-primary align-self-start animate__bounceIn animate__infinite p-2" href="<?php echo home_url('/details/'); ?>">詳細</a>

                                    <a class="btn btn btn-secondary align-self-start p-2" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>

                                </div>
    
                            </div>
    
                            <div class="col-sm d-flex align-items-center flex-column justify-content-center text-end">
    
                                <div class="content-img"><img src="<?=$uri?>/assets/img/design/server-08.svg" width="100" height="100" alt="TeamSpeak 3 White"></div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>


</div>

<div class="m-4">
<div class="container">
        <div class="row">
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
  </div>
</div>
</div>
    </main>
    
    <?php
  get_footer();
  