<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-news-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">サイトマップ</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・Site Map</p>
            <h2>サイトマップ</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">サイトマップ</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="SITEMAP" class="sitemap sec">
    <div class="flex-box">
        <a href="<?php echo esc_url(home_url('//')); ?>" class="">
            -トップ
        </a>
        <a href="<?php echo esc_url(home_url('/strengths/')); ?>" class="">
            -矢野機材の強み
        </a>
        <a href="<?php echo esc_url(home_url('/company-info/')); ?>" class="">
            -会社情報
        </a>
        <a href="<?php echo esc_url(home_url('/items/')); ?>" class="">
            -取り扱い商品
        </a>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="">
            -会社概要
        </a>
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="">
            -採用情報
        </a>
        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="">
            -お知らせ
        </a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="">
            -ブログ
        </a>
    </div>
</section>
<?php get_footer(); ?><!-- footer.php の読み込み -->