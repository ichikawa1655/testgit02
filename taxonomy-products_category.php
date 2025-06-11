<?php get_header(); ?><!-- header.php の読み込み -->
<?php
$cat = get_queried_object(); // 現在のカテゴリ情報を取得
$catname = $cat->name; // カテゴリ名を取得
?>
<section id="PRODUCTS-CATEGORY" class="products-category-page sec">
    <?php
    // カスタム関数でカテゴリ説明を取得
    $desc = get_current_category_description();

    if (!empty($desc)) {
        // 最初の「Pipes」と「パイプ」にだけクラスをつける
        $desc = preg_replace('/^Pipes/', '<span class="en-title en-font">Pipes</span>', $desc, 1);
        $desc = preg_replace('/^パイプ/m', '<span class="jp-title">パイプ</span>', $desc, 1);

        $desc = preg_replace('/^Valves/', '<span class="en-title en-font">Valves</span>', $desc, 1);
        $desc = preg_replace('/^バルブ類/m', '<span class="jp-title">バルブ類</span>', $desc, 1);

        $desc = preg_replace('/^Cream/', '<span class="en-title en-font">Cream</span>', $desc, 1);
        $desc = preg_replace('/^保湿剤/m', '<span class="jp-title">保湿剤</span>', $desc, 1);

        $desc = preg_replace('/^Tools/', '<span class="en-title en-font">Tools</span>', $desc, 1);
        $desc = preg_replace('/^工具類/m', '<span class="jp-title">工具類</span>', $desc, 1);

        $desc = preg_replace('/^Metal Fittings/', '<span class="en-title en-font">Metal Fittings</span>', $desc, 1);
        $desc = preg_replace('/^建築金物/m', '<span class="jp-title">建築金物</span>', $desc, 1);

        $desc = preg_replace('/^Support Fittings/', '<span class="en-title en-font">Support Fittings</span>', $desc, 1);
        $desc = preg_replace('/^支持金具類/m', '<span class="jp-title">支持金具類</span>', $desc, 1);

        $desc = preg_replace('/^HVAC Materials/', '<span class="en-title en-font">HVAC Materials</span>', $desc, 1);
        $desc = preg_replace('/^空調資材/m', '<span class="jp-title">空調資材</span>', $desc, 1);

        $desc = preg_replace('/^Water Supply and Sewer Materials/', '<span class="en-title en-font">Water Supply and Sewer Materials</span>', $desc, 1);
        $desc = preg_replace('/^給水装置・下水道用材料/m', '<span class="jp-title">給水装置・下水道用材料</span>', $desc, 1);

        $desc = preg_replace('/^Fittings/', '<span class="en-title en-font">Fittings</span>', $desc, 1);
        $desc = preg_replace('/^継手/m', '<span class="jp-title">継手</span>', $desc, 1);

        $desc = preg_replace('/^Sanitary Ceramics/', '<span class="en-title en-font">Sanitary Ceramics</span>', $desc, 1);
        $desc = preg_replace('/^衛生陶器/m', '<span class="jp-title">衛生陶器</span>', $desc, 1);

        $desc = preg_replace('/^Pipe Cleaner/', '<span class="en-title en-font">Pipe Cleaner</span>', $desc, 1);
        $desc = preg_replace('/^配管洗浄剤/m', '<span class="jp-title">配管洗浄剤</span>', $desc, 1);

        $desc = preg_replace('/^Others/', '<span class="en-title en-font">Others</span>', $desc, 1);
        $desc = preg_replace('/^その他/m', '<span class="jp-title">その他</span>', $desc, 1);

        // 出力（改行を <br> に変換）
        echo '<div class="category-description">' . nl2br($desc) . '</div>';
    }
    ?>

    <!-- 子カテゴリとその投稿を表示 -->
    <div class="products-category-child">
        <?php
        // 現在のカテゴリ情報を取得
        $current_category = get_queried_object();

        // 現在のカテゴリの子カテゴリを取得
        $child_categories = get_terms(array(
            'taxonomy'   => 'products_category', // カスタムタクソノミー名
            'parent'     => $current_category->term_id, // 現在のカテゴリID
            'hide_empty' => false, // 投稿がないカテゴリも取得
        ));

        if (!empty($child_categories)) :
            foreach ($child_categories as $child_category) : ?>
                <div class="child-category">
                    <!-- 子カテゴリ名を表示 -->
                    <h4 class="child-category-title"><?php echo esc_html($child_category->name); ?></h4>

                    <?php
                    // 子カテゴリに属する投稿を取得
                    $child_posts = new WP_Query(array(
                        'post_type'      => 'products', // カスタム投稿タイプ名
                        'posts_per_page' => -1, // 全ての投稿を取得
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'products_category',
                                'field'    => 'term_id',
                                'terms'    => $child_category->term_id,
                            ),
                        ),
                    ));

                    if ($child_posts->have_posts()) : ?>
                        <div class="child-category-posts-container">
                            <?php while ($child_posts->have_posts()) : $child_posts->the_post(); ?>
                                <div class="child-post">
                                    <p class="post-title"><?php the_title(); ?></p>
                                    <?php
                                    // Advanced Custom Fields の値を取得
                                    $size = get_field('size'); // ACF フィールド名が 'size' の場合
                                    $inventory_value = get_field('inventory-value'); // ACF フィールド名が 'inventory-value' の場合
                                    ?>
                                    <?php if ($size) : ?>
                                        <p class="post-size">（サイズ<?php echo esc_html($size); ?>）</p>
                                    <?php endif; ?>
                                    <?php
                                    $inventory_value = get_field('inventory-value'); // 返り値は 'in_stock' または 'out_of_stock' を想定
                                    ?>
                                    <p class="post-inventory">
                                        <span class="inventory-label in-stock <?php echo ($inventory_value === 'in_stock') ? 'active' : ''; ?>">在庫あり</span>
                                        <span class="inventory-label out-of-stock <?php echo ($inventory_value === 'out_of_stock') ? 'active' : ''; ?>">在庫なし</span>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else : ?>
                        <p class="no-products">商品がありません。</p>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); // クエリをリセット ?>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="no-category">「<?php echo $catname;?>」には商品がありません。</p>
        <?php endif; ?>
    </div>
</section>






<!-- ---------------- フッター対応fixedボタン ---------------------- -->
<!-- ---------------- フッター対応fixedボタン ---------------------- -->
<div id="products_category-btn-bg" class="products_category-btn-bg">
    <div class="products_category-btn-container">
        <!-- カテゴリーIDを入力する必要がある箇所 -->
        <a class="products-category" data-category="common_pipe" href="<?php echo get_category_link(11, 'products_category'); ?>">
            パイプ
        </a>
        <a class="products-category" data-category="valve" href="<?php echo get_category_link(20, 'products_category'); ?>">
            バルブ類
        </a>
        <a class="products-category" data-category="fitting" href="<?php echo get_category_link(27, 'products_category'); ?>">
            継手
        </a>
        <a class="products-category" data-category="hanger_brackets" href="<?php echo get_category_link(24, 'products_category'); ?>">
            支持金具類
        </a>
        <a class="products-category" data-category="tools" href="<?php echo get_category_link(22, 'products_category'); ?>">
            工具類
        </a>
        <a class="products-category" data-category="sanitary_ware" href="<?php echo get_category_link(28, 'products_category'); ?>">
            衛生陶器
        </a>
        <a class="products-category" data-category="metal_fixtures" href="<?php echo get_category_link(23, 'products_category'); ?>">
            建築金物
        </a>
        <a class="products-category" data-category="air_conditioning" href="<?php echo get_category_link(25, 'products_category'); ?>">
            空調資材
        </a>
        <a class="products-category" data-category="heat_retention" href="<?php echo get_category_link(21, 'products_category'); ?>">
            保湿剤
        </a>
        <a class="products-category" data-category="water_supply" href="<?php echo get_category_link(26, 'products_category'); ?>">
            給水装置・下水道用材料
        </a>
        <a class="products-category" data-category="pipe_cleaner" href="<?php echo get_category_link(29, 'products_category'); ?>">
            配管洗浄剤
        </a>
        <a class="products-category" data-category="others" href="<?php echo get_category_link(30, 'products_category'); ?>">
            その他
        </a>
    </div>
</div>
<!-- -------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------- -->

<?php get_footer(); ?><!-- footer.php の読み込み -->