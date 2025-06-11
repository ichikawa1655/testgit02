<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-news-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">ブログ</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・Blog</p>
            <h2>ブログ</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">ブログ</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="ARCHIVE-PAGE" class="archive-page-blog sec">
    <div class="blog-page-main-box">
        <?php
        // カスタム投稿タイプ「blog」を取得（1ページあたり6件）
        $blog_query = get_paginated_custom_posts('blog', 6);

        if ($blog_query->have_posts()) : ?>
        
        <div class="news-list-blog">
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="news-item-blog">
                    <div class="blog-list-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-1.jpg" alt="No Image">
                        <?php endif; ?>
                    </div>
                    <p class="news-category no-hover">
                        <?php
                        // 投稿のカテゴリ名を取得
                        $categories = wp_get_post_terms(get_the_ID(), 'blog_category');
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name); // 最初のカテゴリ名を表示
                        } else {
                            echo 'ALL'; // カテゴリがない場合のデフォルト表示
                        }
                        ?>
                    </p>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                    <?php
                    $content = get_the_content();
                    $content_text = wp_strip_all_tags($content);
                    if (!empty($content_text)) :
                    ?>
                        <div class="blog-sentence"><?php echo esc_html($content_text); ?></div>
                    <?php endif; ?>
                    <!-- ----------- もっと見る-ボタン ----------- -->
                    <a href="<?php the_permalink(); ?>" class="view-more-btn">
                        <p class="view-more-btn-text">詳しく見る</p>
                        <i class="icon-arrow-b"></i>
                    </a>
                    <!-- ----------- もっと見る-ボタン ----------- -->
                </div>
            <?php endwhile; ?>
        </div> <!-- /.news-list-blog -->
        
        <div class="blog-category-box pc">
            <p class="title">ブログカテゴリ</p>
            <!-- カテゴリーIDを入力する必要がある箇所 -->
            <div class="category-container">
                <a class="news-category" data-category="all" href="<?php echo esc_url(home_url('/blog/')); ?>">ALL</a>
                <a class="news-category" data-category="industry" href="<?php echo get_term_link(10, 'blog_category'); ?>">会社・業界</a>
                <a class="news-category" data-category="support" href="<?php echo get_term_link(9, 'blog_category'); ?>">サポート</a>
                <a class="news-category" data-category="service" href="<?php echo get_term_link(8, 'blog_category'); ?>">サービス</a>
            </div>
        </div>
    </div> <!-- /.blog-page-main-box -->
    <div class="pagination">
        <?php
        // ページネーションを表示
        $big = 999999999; // ページネーション用のユニークな数値
        $pagination_links = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $blog_query->max_num_pages,
            'type'      => 'array', // 配列形式でリンクを取得
            'prev_text' => '', // 矢印を非表示
            'next_text' => '', // 矢印を非表示
        ));

        if (!empty($pagination_links)) {
            // 空のリンクを除外して、aタグにクラス追加してまとめて出力
            echo implode('', array_map(function($link) {
                return strpos($link, '<a') !== false
                    ? str_replace('<a', '<a class="pagination-item"', $link)
                    : $link; // <span class="current"> などはそのまま
            }, array_filter($pagination_links, function($link) {
                return trim(strip_tags($link)) !== ''; // 空でないものだけ通す
            })));
        }
        ?>
    </div>
    <?php
    wp_reset_postdata();
    else : ?>
        <p>現在、該当するブログ投稿はありません。</p>
    <?php endif; ?>
    <div class="blog-category-box sp">
        <p class="title">ブログカテゴリ</p>
        <!-- カテゴリーIDを入力する必要がある箇所 -->
        <div class="category-container">
            <a class="news-category" data-category="all" href="<?php echo esc_url(home_url('/blog/')); ?>">ALL</a>
            <a class="news-category" data-category="industry" href="<?php echo get_term_link(10, 'blog_category'); ?>">会社・業界</a>
            <a class="news-category" data-category="support" href="<?php echo get_term_link(9, 'blog_category'); ?>">サポート</a>
            <a class="news-category" data-category="service" href="<?php echo get_term_link(8, 'blog_category'); ?>">サービス</a>
        </div>
    </div>
</section>

<?php get_footer(); ?><!-- footer.php の読み込み -->