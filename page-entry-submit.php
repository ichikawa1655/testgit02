<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-entry-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">エントリー内容確認</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・Entry</p>
            <h2>エントリー<br class="sp">内容確認</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">エントリー内容確認</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="FORM" class="form sec">
    <h3 class="submit-heading">
        下記の内容でお送りしてよろしいでしょうか？
    </h3>
    <div class="form-content form-content-submit">
        <?php the_content(); ?>
    </div>
</section>
<?php get_template_part('inc/content','contact'); ?>
<?php get_footer(); ?><!-- footer.php の読み込み -->