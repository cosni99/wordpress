<?php
global $uri ;
global $dir ; 
?>
<html lang="ja"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="デモ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=$uri?>/assets/css/hover-min.css">
    <link rel="stylesheet" href="<?=$uri?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?=$uri?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=$uri?>/assets/css/style-responsive.css">
    <?php wp_head(); ?>
</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="padding-top: 80px;">
   
    <header>

        <div class="container-01">

            <div class="container">
        
                <div class="row m-0">
        
                    <div class="col d-flex justify-content-start content-left">
        
                        <ul class="list-in-line">
                            <li class="phone-number"><i class="cci-phone-call-01"></i>018-893-6475</li>
                            <li><i class="cci-envelope-01"></i>info@smartdesign.com</li>
                        </ul>
        
                        <button aria-label="Open menu mobile" id="open-menu-mobile-01" class="menu-mobile-button"><i class="cci-menu-fill-01"></i></button>
                        
                    </div>
                    
                    <div class="col d-flex justify-content-end content-right menu-mobile-01">
        
                        <div class="menu-mobile-header">
        
                            <div class="content-left">
        
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Company Logo" class="logo"><img src="<?=$uri?>/assets/img/logos/SDlogo.png" width="100" height="100" alt="Company Logo"></a>
        
                            </div>
        
                            <div class="content-right"><button aria-label="Close menu mobile"><i class="cci-arrow-left-02"></i></button></div>
        
                        </div>
        
                        <nav>
        
                            <ul class="list-in-line social-network">
                                <li><a aria-label="Facebook Page" href="#"><i aria-hidden="true" class="cci-facebook-fill-02"></i></a></li>
                                <li><a aria-label="Youtube Page" href="#"><i aria-hidden="true" class="cci-youtube-fill-02"></i></a></li>
                                <li><a aria-label="Twitter Page" href="#"><i aria-hidden="true" class="cci-twitter-fill-02"></i></a></li>
                                <li><a aria-label="Discord Page" href="#"><i aria-hidden="true" class="cci-discord-fill-02"></i></a></li>
                            </ul>
        
                        </nav>
        
                    </div>
        
                </div>
        
            </div>
        
        </div>

        <div class="container-02 fixed-top">

            <div class="container">

                <div class="row">

                    <div class="col d-flex justify-content-start content-left">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Company Logo" class="logo"><img src="<?=$uri?>/assets/img/logos/SDlogo.png" width="100" height="100" alt="Company Logo"></a>
                        
                        <button aria-label="Open menu mobile" id="open-menu-mobile-02" class="menu-mobile-button"><i class="cci-menu-01"></i></button>

                    </div>
                    
                    <div class="col-10 d-flex justify-content-end content-right menu-mobile-02">
                        
                        <div class="menu-mobile-header">

                            <div class="content-left">

                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Company Logo" class="logo"><img src="<?=$uri?>/assets/img/logos/SDlogo.png" width="100" height="100" alt="Company Logo"></a>

                            </div>

                            <div class="content-right"><button aria-label="Close menu mobile"><i class="cci-arrow-left-02"></i></button></div>

                        </div>

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav">

                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
                                </li>                       
<!---->
<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</a>
  
                                    <div class="dropdown-menu dropdown-menu-end animate slideIn">
  
                                      <div class="menu-side-by-side menu-with-info">
  
                                          <div class="content-left">
  
                                              <div class="content-01">
  
                                                  <nav>
                                                  <?php if( has_nav_menu( 'primary' ) ){ ?><!--ナビ-->
                                <?php wp_nav_menu( array(
                                    'container'       => 'ul',
                                    'theme_location' => 'primary',
                                ) ); ?>
                                <?php } ?>
                                                  </nav>
  
                                              </div>
  
                                              
  
                                          </div>
  
                                          <div class="content-right bg-globe">

                                            <span>お困りごとはありませんか?</span>

                                            <p>弊社にはたくさんの専門家が在籍しており、どんな質問でもお問い合わせください。</p>

                                            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-success">Contact Us</a>

                                            <div class="content-img"><img src="<?=$uri?>/assets/img/design/globe-02.jpg" alt=""></div>

                                          </div>
  
                                      </div>
  
                                    </div>
  
                                </li>
<!---->

                              </ul>
                            </div>
                        </nav>

                        <ul class="list-in-line list-btn d-none">
                            <li class="mr-2"><a href="#" class="btn btn-primary "><i class="cci-support-04"></i>Helpdesk</a></li>
                            <li class="mr-2"><a href="#" class="btn btn-secondary"><i class="cci-cart-01"></i>Cart</a></li>
                        </ul>
    
                    </div>
                    
                </div>

            </div>

        </div>

    </header>