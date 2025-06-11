<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-strengths-img header-m">
    <div class="filter">
        <div class="text-box">
            <p class="title-en en-font">・Title</p>
            <h2>ページタイトル</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">ページの名前</div>
</section>
<!-- -------- 子ページ トップ -------- -->
<!-- ----------- セクションタイトル ----------- -->
<div class="section-title-box">
    <h3 class="section-title en-font">Title</h3>
    <p class="section-mini-title">セクションのタイトル</p>
</div> 
<!-- ----------- セクションタイトル ----------- -->
 <!-- -------- 子ページ heading -------- -->
<section class="page-top-heading bg-img-vision sec">
    <div class="filter">
        <p class="text-left">
        このページで伝えたいこと<br>
        見出しとなる文章がここには<br>
        入ります
        </p>
    </div>
</section>
<!-- -------- 子ページ heading -------- -->
<!-- ----------- もっと見る-ボタン ----------- -->
<a href="<?php echo esc_url(home_url('/strengths/')); ?>" class="view-more-btn">
    <p class="view-more-btn-text">詳しく見る</p>
    <i class="icon-arrow-b"></i>
</a>
<!-- ----------- もっと見る-ボタン ----------- -->





<?php get_template_part('inc/content','contact'); ?>
<?php get_footer(); ?><!-- footer.php の読み込み -->