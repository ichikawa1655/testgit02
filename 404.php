<?php get_header(); ?><!-- header.php の読み込み -->
<?php get_template_part('inc/content','side_bar'); ?> <!-- side_bar.php の読み込み -->
<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>"><span itemprop="name">HOME</span></a>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">404</span>
        <meta itemprop="position" content="2" />
    </li>
</ul>
<section id="NOTFOUND" class="notfound">
    <h2 class="content-title-left">
        404 NOT FOUND
        <span>お探しのページはございませんでした</span>
    </h2>
    <p>サイトマップからお探しのページを見つけられない場合、お気軽にお問い合わせくださいませ。</p>
</section>
<?php get_template_part('inc/content','sitemap'); ?><!-- sitemap.php の読み込み -->
<?php get_template_part('inc/content','information'); ?> <!-- information.php の読み込み -->
<?php get_footer(); ?><!-- footer.php の読み込み -->