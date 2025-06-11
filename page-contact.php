<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-contact-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">お問い合わせ</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・Contact</p>
            <h2>お問い合わせ</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">お問い合わせ</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="FORM" class="form sec">
    <h3>
        お気軽にお問い合わせください。
    </h3>
    <div class="form-content">
        <?php the_content(); ?>
    </div>
</section>
<?php get_template_part('inc/content','contact'); ?>
<?php get_footer(); ?><!-- footer.php の読み込み -->