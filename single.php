<?php get_header(); ?><!-- header.php の読み込み -->
<div class="header-h-m"></div>
<!-- -------- 子ページ トップ -------- -->
<div class="cp-fv-bottom-navi single-page">
    <div class="content">TOP</div>
    <div class="content"><?php the_title(); ?></div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="SINGLE-NEWS" class="single-news sec">
    <div class="news-heading">
        <div class="top">
            <p class="date"><?php the_time('Y.m.d'); ?></p>
            <p class="category <?php echo get_primary_category_slug(); ?>">
                <?php echo get_primary_category_name(); ?>
            </p>
        </div>
        <p class="bottom"><?php the_title(); ?></p>
    </div>
    <div class="single-news-content-box"><?php echo the_content(); ?></div>
    <!-- ----------- もっと見る-ボタン ----------- -->
    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="view-more-btn">
        <p class="view-more-btn-text">記事一覧に戻る</p>
        <i class="icon-arrow-b"></i>
    </a>
    <!-- ----------- もっと見る-ボタン ----------- -->
</section>
<?php get_footer(); ?><!-- footer.php の読み込み -->