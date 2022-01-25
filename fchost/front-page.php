
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

        <section class="text-center p-4 pt-5 pb-5 mb-5">

            <div class="container mt-2">

                <h1 class="h2">SD Serviceでは、情報システムや情報サービスの請負開発を行っています。</h1>

                <p class="mt-3">皆様のシステム構築、プロダクト開発、研究開発をお手伝いさせて頂きます。</p>
    
                <div class="row row-hover-bg">
    
                    <div class="col border rounded p-4 d-flex justify-content-center align-items-center flex-column m-2 aos-init" data-aos="fade-down-right">
    
                        <div class="content-img content-img-icon"><img src="<?=$uri?>/assets/img/design/server-icon.png" draggable="false" width="100" height="100" alt="Shared Hosting"></div>
    
                        <span class="h5 mt-2 font-bold">情報を受信する力</span>
    
                        <p>お客様の声を最大限当社が受け取ります</p>
    
                        <a href="<?php echo home_url('/details/'); ?>" class="btn btn-outline-secondary">詳細</a>
    
                    </div>
    
                    <div class="col border rounded p-4 d-flex justify-content-center align-items-center flex-column m-2 aos-init" data-aos="fade-up">
    
                        <div class="content-img content-img-icon"><img src="<?=$uri?>/assets/img/design/server-14.png" draggable="false" width="100" height="100" alt="Control"></div>
    
                        <span class="h5 mt-2 font-bold">情報をアイディアにする力</span>
    
                        <p>いただいた要望以上に改善できるようにアイディアを提案させていただきます</p>
    
                        <a href="<?php echo home_url('/details/'); ?>" class="btn btn-outline-secondary">詳細</a>
    
                    </div>
    
                    <div class="col border rounded p-4 d-flex justify-content-center align-items-center flex-column m-2 aos-init" data-aos="fade-down-left">
    
                        <div class="content-img content-img-icon"><img src="<?=$uri?>/assets/img/design/server-icon.png" draggable="false" width="100" height="100" alt="Server"></div>
    
                        <span class="h5 mt-2 font-bold">情報を形にする力</span>
    
                        <p>総合して使いやすいシステムを制作してまいります。</p>
    
                        <a href="<?php echo home_url('/details/'); ?>" class="btn btn-outline-secondary">詳細</a>
    
                    </div>
                    
                </div>

            </div>     

        </section>

        <section class="thumb-grey text-center p-4 pt-5 pb-5 mb-5">

            <div class="container">

                <h2 class="h2">おもな開発実績</h2>

                <p class="mt-3">他にも数々の実績がございます。ご参考までに一部を掲載させていだだきます。</p>

                <div class="row features">

                    <div class="col-sm border rounded p-3 m-2 hvr-bounce-to-bottom aos-init" data-aos="flip-up">

                        <i class="cci-control-01"></i>

                        <span class="h5">Web系</span>

                        <p class="mt-1">CMS向け分散画像ファイリングシステム<br>EC受注管理システム</p>

                    </div>

                    <div class="col-sm border rounded p-3 m-2 hvr-bounce-to-bottom aos-init" data-aos="flip-down">

                        <i class="cci-ssl-02"></i>

                        <span class="h5">自治体系</span>

                        <p class="mt-1">福祉，医療関連システム<br>GIS災害情報管理システム<br>健康管理システム</p>

                    </div>

                    <div class="col-sm border rounded p-3 m-2 hvr-bounce-to-bottom aos-init" data-aos="flip-up">

                        <i class="cci-layer-01"></i>

                        <span class="h5">業務系</span>

                        <p class="mt-1">生産管理・物流管理・販売管理システム<br>製造業向け作業分析システム</p>

                    </div>

                    <div class="col-sm border rounded p-3 m-2 hvr-bounce-to-bottom aos-init" data-aos="flip-down">

                        <i class="cci-support-03"></i>

                        <span class="h5">医療系</span>

                        <p class="mt-1">読影支援システム<br>栄養管理システム</p>

                    </div>

                </div>

            </div>

        </section>


        <section class="text-center p-4 pt-5 pb-5 mb-5">

            <div class="container">

                <h4 class="h2">開発スキル</h4>

                <div class="row mt-5">

                    <div class="col-sm hvr-underline-from-center aos-init" data-aos="fade-right" data-aos-duration="700">

                        <span class="h5 font-bold">分析，企画，設計</span>

                        <p class="mt-1">UML，マインドマップ</p>

                    </div>

                    <div class="col-sm hvr-underline-from-center aos-init" data-aos="zoom-in" data-aos-duration="700">

                        <span class="h5 font-bold">アプリケーション開発</span>

                        <p class="mt-1">VB.Net，Java，JavaFX,EmbededC++</p>

                    </div>

                    <div class="col-sm hvr-underline-from-center aos-init" data-aos="zoom-in" data-aos-duration="700">

                        <span class="h5 font-bold">DB構築</span>

                        <p class="mt-1">Oracle，SQLServer，MySQL</p>

                    </div>

                    <div class="col-sm hvr-underline-from-center aos-init" data-aos="fade-left" data-aos-duration="700">

                        <span class="h5 font-bold">Webサイト構築，Webサービス</span>

                        <p class="mt-1">PHP，ASP.NET，Ajax</p>

                    </div>

                </div>

            </div>
            
        </section>



        <section aria-label="Contact Us" class="thumb-grey text-start p-4 pt-5 pb-5">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 text-left d-flex align-items-center aos-init" data-aos="fade-right">

                        <span class="h2">情報システムのコンサルティングおよびシステム開発に関するご相談は</span>

                    </div>

                    <div class="col-sm d-flex align-items-center aos-init" data-aos="fade-left">

                        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-lg btn-primary hvr-bounce-in animate__bounceIn aos-init" data-aos="flip-left" data-aos-duration="900">こちら</a>

                    </div>

                </div>

            </div>

        </section>

        <section aria-label="About FCHOST" class="text-center p-4 pt-5 pb-5">

            <div class="container">

                <div class="row">

                    <div class="col d-flex align-items-center mt-3 mb-3 aos-init" data-aos="fade-right">

                        <div class="content-img content-feature"><img class="img-thumbnail" src="<?=$uri?>/assets/img/design/company.jpg" alt="Foto da empresa"></div>

                    </div>

                    <div class="col text-start d-flex flex-column align-items-start align-self-start mt-3 mb-3 aos-init" data-aos="fade-left">

                        <span class="h4 font-bold">Information</span>
                        
                        <p class="mt-2">スマートデザインは、技術力を生かした受託開発と企画・提案力を活かしたオリジナルソフトウェア開発を事業の2本柱に位置付けております。この2つの事業がシナジー効果を生み出すことにより、単なるモノづくりだけでなく、問題解決能力と柔軟な発想を皆様に提供してまいります。お困りの際は、是非、弊社にご相談ください。</p>

                        <p>情報システムのコンサルティング<br>情報システムの受託開発・保守<br>情報システムの企画・製作・販売</p>

                        <div class="btn-groups">
                            <a class="btn btn-secondary mt-1" href="<?php echo home_url('/contact/'); ?>">Contact us</a>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section aria-label="Common questions" class="accordion-bottom bg-grey text-start p-4 pt-5 pb-5">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-sm text-left mt-3 mb-3">
    
                        <span class="h1">私たちスマートデザインが大切にしている３つの力です。</span>
    
                        <p class="mt-4">現代社会は街中、職場、家庭など我々が暮らす全ての環境において急激に情報化が進み、今や１秒たりとも情報と接しない時間・場所はないと言えます。形式的には、ユビキタス社会がまさに実現しようとしています。</p>
    
                        <p>それでは、様々な情報をどのように生活に取り入れたら、日常を豊かにしていけるのでしょうか？

価値観が多様化した現代においては、答えは無数に存在し、新たな発想で取り組む必要があるのではないでしょうか？</p>
<p>スマートデザインは、上記課題に対して、最初に掲げた３つの力を駆使して情報の「流れ」と「使い方」をデザインすることを最大の武器として取り組んでいます。そして、アウトプットとして「ソフトウェア」を生み出しています。作り手と受け手の対話がしっかりと構築された上に、使う人への配慮やセンスやアイディアが沢山込められている・・・<br>

そのようなソフトウェアプロダクトの提案を通じて、社会に貢献していきたいと考えています。</p>
    
    
                    </div>
    
                    <div class="col-sm text-left mt-3 mb-3">
    
                        <span class="h2">お知らせ</span>
    
                        
                        <div class="accordion accordion-flush" id="accordionQuestion">
                          <div class="accordion-item border mt-1 mb-1">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
2011/12/26　年末年始休業日のお知らせ</button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionQuestion">
                              <div class="accordion-body">12月29日から新年1月5日は年末年始休業日とさせて頂きます。
休業日期間中にいただいたお問い合わせにつきましては、1月6日より順次ご対応させて頂きます。</div>
                            </div>
                          </div>
                          <div class="accordion-item border mt-1 mb-1">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">2011/07/31『チャレンジオフィス』を卒業します</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionQuestion">
                              <div class="accordion-body">8月1日（月）より下記事務所での業務を開始します。

SmartDesignの立ち上げ当初から秋田県・秋田市のインキュベーション施設に入居し業務を
推進して参りましたが、このたび卒業の日を迎えることとなりました。
これまでお世話になった方々にお礼を申しあげると共に、
今後も変わらぬご支援、お引き立てのほどよろしくお願い申し上げます。

また、小さなオフィスですが、お近くへお越しの際はぜひお立ち寄りください。
今後とも宜しくお願いいたします。<br>

　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　SmartDesign株式会社　一同<br>

【新住所】<br>
〒010-0911　秋田市保戸野すわ町１４－７<br>
ベストランドビル201号<br>
TEL&FAX　018-893-6475</div>
                            </div>
                          </div>
                          <div class="accordion-item border mt-1 mb-1">
                            <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">2010/5/1
事務所の移転に伴い、部屋番号が変わりました。</button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionQuestion">
                              <div class="accordion-body">旧「303号室」→新「304号室」となります。
今後とも宜しくお願い致します。</div>
                            </div>
                          </div>
                          <div class="accordion-item border mt-1 mb-1">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">2010/4/1
ホームページをリニューアルしました。</button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionQuestion">
                              <div class="accordion-body"></div>
                            </div>
                          </div>
                          
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </section>

        <div class="container-01">

<div class="container">

    <h2 class="text-center">製品情報</h2>


</div>

</div>

<div class="mb-3">
        <div class="container">
        <div class="row justify-content-around">
  <?php if(have_posts()){ 
    while(have_posts()){ 
      the_post(); ?><!--記事があれば現在の投稿を繰り返す-->
      <div class="col-4 mb-3 aos-init" data-aos="fade-up">
<div class="card m-3 h-100">
  <div class="card-body">    
        <a class="text-decoration-none" href="<?php the_permalink(); ?>"><!--記事ページのリンク-->
            <h2 class="text-center"><?php the_title();?></h2><!--記事タイトル-->
          <?php if( has_post_thumbnail() ){ ?><!--アイキャッチ画像設定されているか判断-->
          <figure class="overflow-hidden">
            <?php the_post_thumbnail(); ?><!--アイキャッチ画像表示-->
          </figure>
          <?php } ?>
          
        </a>
    </div>
</div>
</div>
  <?php } 
  }?><!--現在の投稿を繰り返すend-->
  </div>


  <?php the_posts_pagination( array(
	'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
	'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-arrow-right-alt2"></span>'
  ) ); ?><!--ページネーション-->
</div>
</div>
    </main>
    
    <?php
  get_footer();