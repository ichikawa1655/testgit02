<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-news-img header-m">
    <div class="filter">
        <div class="cp-fv-bottom-navi sp">
            <div class="content">TOP</div>
            <div class="content">お知らせ</div>
            <div class="content">ALL</div>
        </div>
        <div class="text-box">
            <p class="title-en en-font">・News</p>
            <h2>お知らせ</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">お知らせ</div>
    <div class="content">ALL</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<section id="ARCHIVE-PAGE" class="archive-page sec">
    <div class="archive-page-top-box">
        <p class="title pc">カテゴリ</p>
        <!-- カテゴリーIDを入力する必要がある箇所 -->
        <div class="category-container pc">
            <a class="news-category" data-category="all" href="<?php echo esc_url(home_url('/news/')); ?>">ALL</a>
            <a class="news-category" data-category="product" href="<?php echo get_category_link(3); ?>">商品情報</a>
            <a class="news-category" data-category="company" href="<?php echo get_category_link(4); ?>">社内ニュース</a>
        </div>
    </div>
    <div class="news-list">
    <?php
    // 投稿タイプ「news」を取得（1ページあたり5件）
    $news_query = get_paginated_posts('post', 5);

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news-item">
                    <div class="new-top">
                        <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="news-category">
                            <?php
                            // 投稿のカテゴリ名を取得
                            $categories = wp_get_post_terms(get_the_ID(), 'category');
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name); // 最初のカテゴリ名を表示
                            } else {
                                echo 'ALL'; // カテゴリがない場合のデフォルト表示
                            }
                            ?>
                        </p>
                    </div>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                </a>
        <?php endwhile;
        

        // ページネーションを表示
        $big = 999999999; // ページネーション用のユニークな数値
        $pagination_links = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $news_query->max_num_pages,
            'type'      => 'array', // 配列形式でリンクを取得
            'prev_text' => '', // 矢印を非表示
            'next_text' => '', // 矢印を非表示
        ));
        

        if (!empty($pagination_links)) : ?>
        </div>
            <div class="pagination">
                <?php
                // 空のリンクを除外して、aタグにクラス追加してまとめて出力
                echo implode('', array_map(function($link) {
                    return strpos($link, '<a') !== false
                        ? str_replace('<a', '<a class="pagination-item"', $link)
                        : $link; // <span class="current"> などはそのまま
                }, array_filter($pagination_links, function($link) {
                    return trim(strip_tags($link)) !== ''; // 空でないものだけ通す
                })));
                ?>
            </div>
        <?php endif;
        
        wp_reset_postdata();
    else : ?>
        <p>現在、該当するニュースはありません。</p>
    <?php endif; ?>
    <!-- カテゴリーIDを入力する必要がある箇所 -->
    <div class="category-container sp">
        <a class="news-category" data-category="all" href="<?php echo esc_url(home_url('/news/')); ?>">ALL</a>
        <a class="news-category" data-category="for_products" href="<?php echo get_category_link(3); ?>">商品情報</a>
        <a class="news-category" data-category="company" href="<?php echo get_category_link(4); ?>">社内ニュース</a>
    </div>
</section>
<?php get_footer(); ?><!-- footer.php の読み込み -->