<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- metaタグ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/icon/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/front.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/child.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.css">
    <!-- font -->
    <link rel="stylesheet" href="https://use.typekit.net/eei5ykj.css">
    <link rel="stylesheet" href="https://use.typekit.net/tsk1ddd.css">
    <!-- jQuery 本体 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery プラグイン -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <!-- 自作のjsなど -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header id="HEADER" class="header">
        <a href="<?php echo esc_url(home_url('')); ?>">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="矢野機材"></h1>
        </a>
        <div class="header-navi-box">
            <ul class="header-navi">
                <li><a href="<?php echo esc_url(home_url('/strengths/')); ?>"><i class="icon-circle-2"></i>矢野機材の強み</a></li>
                <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><i class="icon-circle-2"></i>会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/items/')); ?>"><i class="icon-circle-2"></i>取り扱い一覧</a></li>
                <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>"><i class="icon-circle-2"></i>採用情報</a></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-btn">お問い合わせ</a>
        </div>
    </header>
    <header class="header-sp">
        <div class="navtext-container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="矢野機材">
            </a>
        </div>
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="navicon"></span>
        </label>
        <div class="menu">
            <div class="menu-top-box">
                <div class="menu-btn-container">
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/strengths/')); ?>">
                            <i class="icon-circle-2"></i>矢野機材の強み
                        </a>
                    </div>
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/about-us/')); ?>">
                            <i class="icon-circle-2"></i>会社情報
                        </a>
                        <a class="sub-btn sub-btn-top" href="<?php echo esc_url(home_url('/about-us#VISION')); ?>">
                            企業理念
                        </a>
                        <a class="sub-btn" href="<?php echo esc_url(home_url('/about-us#SERVICE')); ?>">
                            サービス
                        </a>
                    </div>
                    <div class="btn-box">
                        <div class="btn">
                            <i class="icon-circle-2"></i>更新コンテンツ
                        </div>
                        <a class="sub-btn sub-btn-top" href="<?php echo esc_url(home_url('/news')); ?>">
                            お知らせ
                        </a>
                        <a class="sub-btn" href="<?php echo esc_url(home_url('/blog')); ?>">
                            ブログ
                        </a>
                    </div>
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                            <i class="icon-circle-2"></i>お問い合わせ
                        </a>
                    </div>
                </div>
                <div class="menu-btn-container">
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/items/')); ?>">
                            <i class="icon-circle-2"></i>取り扱い商品
                        </a>
                        <a class="sub-btn sub-btn-top" href="<?php echo esc_url(home_url('/items#PRODUCTS-LIST')); ?>">
                            商材
                        </a>
                        <a class="sub-btn" href="<?php echo esc_url(home_url('/items#MANUFACTURER')); ?>">
                            メーカー
                        </a>
                    </div>
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/recruit/')); ?>">
                            <i class="icon-circle-2"></i>採用情報
                        </a>
                    </div>
                    <div class="btn-box">
                        <a class="btn" href="<?php echo esc_url(home_url('/company-info/')); ?>">
                            <i class="icon-circle-2"></i>会社概要
                        </a>
                        <a class="sub-btn sub-btn-top" href="<?php echo esc_url(home_url('/company-info#ABOUT-COMPANY')); ?>">
                            概要
                        </a>
                        <a class="sub-btn" href="<?php echo esc_url(home_url('/company-info#OUR-HISTORY')); ?>">
                            沿革
                        </a>
                    </div>
                </div>
            </div>
            <div class="middle-box">
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
    </header>


