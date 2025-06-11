<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-contact-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">お問い合わせ完了</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・Contact</p>
            <h2>お問い合わせ完了</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">お問い合わせ完了</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="FORM" class="form sec">
    <h3 class="thanks-heading">
        送信完了しました<br>
        お問い合わせありがとうございます。<br>
        確認のため、自動返信メールをお送りいたします。<br>
        営業日1.2日以内で担当者よりご連絡いたしますので、<br>
        恐れ入りますがしばらくお待ちください。
    </h3>
    <div class="form-content form-content-thanks">
        <?php the_content(); ?>
    </div>
</section>
<?php get_template_part('inc/content','contact'); ?>
<?php get_footer(); ?><!-- footer.php の読み込み -->