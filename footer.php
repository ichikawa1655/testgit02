<footer id="FOOTER" class="footer">
    <div class="footer-main">
        <div class="footer-main-left">
            <div class="footer-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="矢野機材" class="footer-logo">
                <div class="access">
                    <h4 class="access-title">株式会社 矢野機材</h4>
                    <div class="access-container">
                        <div class="access-text-box">
                            <p class="access-text-top">本社</p>
                            <p class="access-text">
                                〒400-0826<br>
                                山梨県甲府市西高橋町21</p>
                            <a href="https://maps.app.goo.gl/qHSztZ2R6w1kYsN68" target="_blank" class="access-map">Google maps</a>
                        </div>
                        <div class="access-text-box">
                            <p class="access-text-top">中央店</p>
                            <p class="access-text">
                                〒400-0032<br>
                                山梨県甲府市中央3-9-6
                            </p>
                            <a href="https://maps.app.goo.gl/fgJdUQyu3ChCdUUk9" target="_blank" class="access-map">Google maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- スマホ -->
            <div class="middle-box sp">
                <p class="schedule-text">
                    営業時間 8:30～17:30(土曜日は12:00まで)<br>
                    定休日 第五土曜・日曜・祝日・<br>
                    GW休暇・夏期休暇・年末年始
                </p>
                <button class="view-more-btn fax-download-btn">
                    <p class="view-more-btn-text">faxでのお問い合わせ</p>
                    <i class="icon-arrow-b"></i>
                </button>
                <a href="tel:000-000-0000" class="view-more-btn">
                    <p class="view-more-btn-text">電話でのお問い合わせ</p>
                    <i class="icon-arrow-b"></i>
                </a>
            </div>
            <div class="entry-btn-back sp">
                <div class="entry-btn-back-filter">
                    <div class="entry-btn-top">
                        <h4 class="entry-title">
                            <span>2025年度</span><br>
                            採用エントリーはこちら
                        </h4>
                        <p class="entry-text">
                            現在2025年度の求人を開始しております。<br>
                            お気軽にご相談、お問い合わせください。
                        </p>
                    </div>
                    <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="view-more-btn-mini">
                        <i class="icon-arrow-b"></i>
                    </a>
                </div>
            </div>
            <div class="footer-sns-container-sp sp">
                <a class="img-box" href="矢野機材youtubeURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/YouTube.jpg" alt="YouTube">
                </a>
                <a class="img-box" href="矢野機材instagramURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.jpg" alt="Instagram">
                </a>
                <a class="img-box" href="矢野機材FaceBookURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.jpg" alt="FaceBook">
                </a>
                <a class="img-box" href="矢野機材XURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/x.jpg" alt="X">
                </a>
            </div>
            <!-- pc -->
            <div class="footer-navi pc">
                <div class="footer-navi-box">
                    <a href="<?php echo esc_url(home_url('/strengths/')); ?>" class="footer-navi-title">矢野機材の強み</a>
                    <ul class="footer-navi-text">
                        <!-- <li><a href="<?php echo esc_url(home_url('/strengths#local-support')); ?>">地域密着</a></li>
                        <li><a href="<?php echo esc_url(home_url('/strengths#inventory')); ?>">豊富な在庫</a></li>
                        <li><a href="<?php echo esc_url(home_url('/strengths#flexible-service')); ?>">柔軟な配送対応</a></li> -->
                    </ul>
                </div>
                <div class="footer-navi-box">
                    <a href="<?php echo esc_url(home_url('/company-info/')); ?>" class="footer-navi-title">会社情報</a>
                    <ul class="footer-navi-text">
                        <li><a href="<?php echo esc_url(home_url('/company-info#ABOUT-COMPANY')); ?>">概要</a></li>
                        <li><a href="<?php echo esc_url(home_url('/company-info#OUR-HISTORY')); ?>">沿革</a></li>
                    </ul>
                </div>
                <div class="footer-navi-box">
                    <a href="<?php echo esc_url(home_url('/items/')); ?>" class="footer-navi-title">取り扱い商品</a>
                    <ul class="footer-navi-text">
                        <li><a href="<?php echo esc_url(home_url('/items#PRODUCTS-LIST')); ?>">商材</a></li>
                        <li><a href="<?php echo esc_url(home_url('/items#MANUFACTURER')); ?>">メーカー</a></li>
                    </ul>
                </div>
                <div class="footer-navi-box">
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="footer-navi-title">会社概要</a>
                    <ul class="footer-navi-text">
                        <li><a href="<?php echo esc_url(home_url('/about-us#VISION')); ?>">企業理念</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about-us#TOP-MESSAGE')); ?>">代表挨拶</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about-us#SERVICE')); ?>">サービス</a></li>
                    </ul>
                </div>
                <div class="footer-navi-box">
                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="footer-navi-title">採用情報</a>
                    <!-- <ul class="footer-navi-text">
                        <li><a href="<?php echo esc_url(home_url('/recruit#')); ?>">????</a></li>
                    </ul> -->
                </div>
                <div class="footer-navi-box">
                    <p class="footer-navi-title">更新コンテンツ</p>
                    <ul class="footer-navi-text">
                        <li><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- pc -->
        <div class="footer-main-right pc">
            <div class="schedule">
                <p>
                営業時間 8:30～17:30(土曜日は12:00まで)<br>
                定休日 第五土曜・日曜・祝日・GW休暇・夏期休暇・年末年始
                </p>
            </div>
            <div class="footer-btn-container">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="view-more-btn">
                    <p class="view-more-btn-text">メールでお問い合わせ</p>
                    <i class="icon-arrow-b"></i>
                </a>
                <a href="tel:000-000-0000" class="view-more-btn">
                    <p class="view-more-btn-text">電話でお問い合わせ</p>
                    <i class="icon-arrow-b"></i>
                </a>
            </div>
            <div class="entry-btn-back">
                <div class="entry-btn-back-filter">
                    <div class="entry-btn-top">
                        <h4 class="entry-title">
                            <span>2025年度</span><br>
                            採用エントリーはこちら
                        </h4>
                        <p class="entry-text">
                            現在2025年度の求人を開始しております。<br>
                            お気軽にご相談、お問い合わせください。
                        </p>
                    </div>
                    <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="view-more-btn-mini">
                        <i class="icon-arrow-b"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <h4 class="copyright"><span>©</span>株式会社矢野機材 All Rights Reserved</h4>
        <div class="footer-bottom-btn-container">
            <a href="<?php echo esc_url(home_url('/sitemap/')); ?>" class="btn-text btn-text-left">サイトマップ</a>
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="btn-text">プライバシーポリシー</a>
        </div>
        <!-- pc -->
        <ul class="footer-bottom-sns-btn-container pc">
            <li>
                <a href="矢野機材youtubeURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/YouTube.jpg" alt="YouTube">
                </a>
            </li>
            <li>
                <a href="矢野機材instagramURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.jpg" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="矢野機材FaceBookURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.jpg" alt="FaceBook">
                </a>
            </li>
            <li>
                <a href="矢野機材XURL_______">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/x.jpg" alt="X">
                </a>
            </li>
        </ul>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>