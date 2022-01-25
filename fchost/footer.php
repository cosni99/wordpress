<?php
global $uri ;
global $dir ; 
?>
<footer>

<div class="container-01">

    <div class="container">

        <span class="h3 aos-init" data-aos="zoom-in" data-aos-duration="900">ぜひ一度ご相談ください</span>

        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-lg btn-primary animate__bounceIn aos-init" data-aos="flip-left" data-aos-duration="900">お問い合わせ</a>

    </div>

</div>

<div class="container-02">

    <div class="container">

        <div class="row">

            <div class="col-sm-4 aos-init" data-aos="fade-right" data-aos-duration="900">

                <a href="index.html" aria-label="Company Logo" class="logo"><img src="<?=$uri?>/assets/img/logos/SDlogoW.png" width="100" height="100" alt="FCHOST LOGO"></a>

                <p class="mt-4">SD Serviceでは、情報システムや情報サービスの請負開発を行っています。
皆様のシステム構築、プロダクト開発、研究開発をお手伝いさせて頂きます。</p>

                <span class="d-flex align-items-center"><i class="cci-phone-call-01 mr-2"></i>018-893-6475</span>

                <ul class="list-in-line social-network mt-3">
                    <li class="follow-us">Follow us:</li>
                        <li><a aria-label="Facebook Page" href="#"><i aria-hidden="true" class="cci-facebook-fill-02"></i></a></li>
                        <li><a aria-label="Youtube Chanel" href="#"><i aria-hidden="true" class="cci-youtube-fill-02"></i></a></li>
                        <li><a aria-label="Twitter Page" href="#"><i aria-hidden="true" class="cci-twitter-fill-02"></i></a></li>
                        <li><a aria-label="Discord Chat" href="#"><i aria-hidden="true" class="cci-discord-fill-02"></i></a></li>
                </ul>

            </div>

            <div class="col-sm aos-init" data-aos="fade-up" data-aos-duration="900">

                <span class="h5 font-bold">DB構築</span>

                <nav>
                    <ul class="list-in-column">
                        <li><a href="#"><i class="cci-share-03"></i>Oracle</a></li>
                        <li><a href="#"><i class="cci-user-04"></i>SQLServer</a></li>
                        <li><a href="#"><i class="cci-globe-01"></i>MySQL</a></li>
                    </ul>
                </nav>

            </div>

            <div class="col-sm aos-init" data-aos="fade-up" data-aos-duration="900">

                <span class="h5 font-bold">アプリケーション開発</span>

                <nav>
                    <ul class="list-in-column">
                        <li><a href="#"><i class="cci-server-01"></i>VB.Net</a></li>
                        <li><a href="#"><i class="cci-server-07"></i>Java</a></li>
                        <li><a href="#"><i class="cci-server-05"></i>JavaFX</a></li>
                    </ul>
                </nav>

            </div>

            <div class="col-sm aos-init" data-aos="fade-left" data-aos-duration="900">

                <span class="h5 font-bold">Webサイト構築</span>

                <nav>
                    <ul class="list-in-column">
                        <li><a href="#"><i class="cci-museum-02"></i>PHP</a></li>
                        <li><a href="#"><i class="cci-support-03"></i>ASP.NET</a></li>
                        <li><a href="#"><i class="cci-contract-01"></i>Ajax</a></li>
                    </ul>
                </nav>

            </div>

        </div>

    </div>
    
</div>


<div class="container-04">

    <div class="container">

        <div class="row">

            <div class="col-sm">

                <p>Copyright <?php echo date_i18n('Y'); ?> © <?php bloginfo( 'name' ); ?> All rights reserved.</p>

            </div>

            <div class="col-sm">

                <nav>
                    <ul class="list-in-line justify-content-end">
                        <li><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a></li>
                    </ul>
                </nav>

            </div>

        </div>

    </div>

</div>

</footer>


<script src="<?=$uri?>/assets/js/aos.js"></script>
<script src="<?=$uri?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body></html>