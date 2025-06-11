<?php get_header(); ?><!-- header.php の読み込み -->
<section id="FV" class="fv sec-pc">
    <div class="fv-movie-box">
        <video class="fv-movie" autoplay loop muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/fv-movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="fv-movie-filter">
            <div class="fv-text-container">
                <h2 class="en-font">
                    Safe and <br class="sp">secure<br class="pc">society <br class="sp">that is rich <br class="pc">in <br class="sp">body and soul
                </h2>
                <div class="fv-sentence-box">
                    <div class="fv-square"></div>
                    <h3 class="fv-text">
                    身も心も<br>
                    豊かな住み良い<br>
                    安心安全な社会をつくる。
                    </h3>
                </div>
            </div>
            <div class="scroll-box pc">
                <i class="icon-arrow-a"></i>
                <p class="scroll-text">Scroll</p>
            </div>
        </div>
        <div class="fv-news-container">
            <div class="fv-news-text-box">
                <span class="en-font">News</span>
                <h3 class="fv-news-top">お知らせ</h3>
            </div>
            <div class="fv-news-table">
            <!-- ---------- wp ------------- -->
            <?php
            $categories = array('for_products', 'company'); 
            $has_any_post = false; // 投稿が1件でもあれば true にする

            foreach ($categories as $category_slug) {
                $category = get_category_by_slug($category_slug);
                if ($category) {
                    $category_id = $category->term_id;
                    $args = array(
                        'category__in'   => array($category_id),
                        'posts_per_page' => 1,
                        'orderby'        => 'date',
                        'order'          => 'DESC'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        $has_any_post = true; // 投稿があった場合
                        while ($query->have_posts()) {
                            $query->the_post();
                            echo '<a class="fv-news-list" href="' . get_permalink() . '">';
                            echo '<div class="fv-news-list-category">' . esc_html($category->name) . '</div>';
                            ?>
                                <div class="fv-news-list-content-box">
                                    <div class="fv-news-list-content-time">
                                        <?php echo get_the_date('Y.m.d'); ?>
                                    </div>
                                    <p class="fv-news-list-content-title">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                            <?php
                            echo '</a>';
                        }
                    }
                    wp_reset_postdata();
                }
            }

            // 両方のカテゴリに投稿がなかった場合
            if (!$has_any_post) {
                echo '<p class="fv-news-no-post">最新のおしらせはありません。</p>';
            }
            ?>
            <!-- ---------- wp ------------- -->
            </div>
        </div>
    </div>
</section>
<section id="ABOUT-US" class="about-us sec">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us.jpg" class="about-us-img fadeUpTrigger pc">
    <div class="about-us-right-box">
        <p class="section-mini-title fadeUpTrigger en-font">About US</p>
        <h3 class="catch-copy fadeUpTrigger">
            身も心も豊かな<br>
            住み良い安全な<br>
            社会をつくる
        </h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us.jpg" class="about-us-img fadeUpTrigger sp">
        <p class="about-us-sentence fadeUpTrigger">
            この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。読み手にストレスを与えない構成を意識しており、様々なデザインに適応可能です。この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。読み手にストレスを与えない構成を意識しており、様々なデザインに適応可能です。
        </p>
        <!-- pc -->
        <!-- ----------- もっと見る-ボタン ----------- -->
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="view-more-btn fadeUpTrigger pc">
            <p class="view-more-btn-text">詳しく見る</p>
            <i class="icon-arrow-b"></i>
        </a>
        <!-- ----------- もっと見る-ボタン ----------- -->
        <!-- スマホ -->
        <!-- ----------- もっと見る-ボタン ----------- -->
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="view-more-btn sp">
            <p class="view-more-btn-text">詳しく見る</p>
            <i class="icon-arrow-b"></i>
        </a>
        <!-- ----------- もっと見る-ボタン ----------- -->
    </div>
</section>
<!-- <section id="SERVICE" class="service sec">
    <h3 class="section-title en-font">Service</h3>
    <p class="section-mini-title">事前案内</p>
    <div class="service-back service-back-img-1">
        <div class="service-back-img-filer">
            <p class="service-number en-font">01</p>
            <p class="service-mini-title">Plumbing equipment sales</p>
            <p class="service-title">管工機材卸</p>
            <p class="service-sentence">
                この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。読み手にストレスを与えない構成を意識しており、様々なデザインに適応可能です。
            </p>
            <a href="<?php echo esc_url(home_url('/strengths/')); ?>" class="view-more-btn">
                <p class="view-more-btn-text">詳しく見る</p>
                <i class="icon-arrow-b"></i>
            </a>
        </div>  
    </div>
    <div class="service-back service-back-img-2">
        <div class="service-back-img-filer">
            <p class="service-number en-font">02</p>
            <p class="service-mini-title">Home appliance sales</p>
            <p class="service-title">住宅設備機器卸</p>
            <p class="service-sentence">
                この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。読み手にストレスを与えない構成を意識しており、様々なデザインに適応可能です。
            </p>
            <a href="<?php echo esc_url(home_url('/strengths/')); ?>" class="view-more-btn">
                <p class="view-more-btn-text">詳しく見る</p>
                <i class="icon-arrow-b"></i>
            </a>
        </div>  
    </div>
</section> -->
<section id="PRODUCTS-FRONT" class="products-front sec">
    <h3 class="section-title en-font">Products</h3>
    <p class="section-mini-title">取り扱い商品</p>
    <p class="section-sentence">
        この文章はサンプルとしてご利用いただけます。<br>
        適切な長さとフォーマットを保ちながら、
    </p>
    <!-- ---------------------------------- pc ---------------------------------- -->
    <!-- ---------------------------------- pc ---------------------------------- -->
    <div class="products-front-area pc">
        <a class="view-more-btn-mini scroll-btn prev">
            <i class="icon-arrow-b"></i>
        </a>
        <div class="products-scroll-table">
            <div class="products-front-container">
                <div class="products-front-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-1.jpg">
                    <div class="products-front-box-filter"></div>
                    <div class="products-text-content">
                        <p class="products-title">
                            配管機材
                        </p>
                        <p class="products-sentence">
                            この文章はサンプルとしてご利用いただけます。この文章はサンプルとしてご利用いただけます。この文章はサンプルとしてご利用いただけます。この文章はサンプルとしてご利用いただけます。この文章はサンプルとしてご利用いただけます。
                        </p>
                    </div>
                </div>
                <div class="products-front-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-2.jpg">
                    <div class="products-front-box-filter"></div>
                    <div class="products-text-content">
                        <p class="products-title">
                            住宅設備機材
                        </p>
                        <p class="products-sentence">
                            この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。
                        </p>
                    </div>
                </div>
                <div class="products-front-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-3.jpg">
                    <div class="products-front-box-filter"></div>
                    <div class="products-text-content">
                        <p class="products-title">
                            配管機材
                        </p>
                        <p class="products-sentence">
                            この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。
                        </p>
                    </div>
                </div>
                <div class="products-front-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-4.jpg">
                    <div class="products-front-box-filter"></div>
                    <div class="products-text-content">
                        <p class="products-title">
                            配管機材
                        </p>
                        <p class="products-sentence">
                            この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。
                        </p>
                    </div>
                </div>
                <div class="products-front-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-5.jpg">
                    <div class="products-front-box-filter"></div>
                    <div class="products-text-content">
                        <p class="products-title">
                            配管機材
                        </p>
                        <p class="products-sentence">
                            この文章はサンプルとしてご利用いただけます。適切な長さとフォーマットを保ちながら、視認性を重視して作成されています。
                        </p>
                    </div>
                </div>
                <!-- ---------- バグ対応用の透明の箱(dummy) -------- -->
                <div class="products-front-box dummy">
                    <div class="products-text-content">
                        <p class="products-title">
                        </p>
                        <p class="products-sentence">
                        </p>
                    </div>
                </div>
                <!-- ---------- バグ対応用の透明の箱(dummy) -------- -->
            </div>
        </div>
        <a class="view-more-btn-mini scroll-btn next">
            <i class="icon-arrow-b"></i>
        </a>
    </div>
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <div class="front-products-sp sp">
        <div class="products-sp-box fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-1.jpg">
            <div class="products-sp-box-filter">
                <p class="text">配管資材</p>
            </div>
        </div>
        <div class="products-sp-box fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-2.jpg">
            <div class="products-sp-box-filter">
                <p class="text">住宅設備機材</p>
            </div>
        </div>
        <div class="products-sp-box fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-3.jpg">
            <div class="products-sp-box-filter">
                <p class="text">配管資材</p>
            </div>
        </div>
    </div>
    <!-- pc -->
    <a href="<?php echo esc_url(home_url('/items/')); ?>" class="view-more-btn pc">
        <p class="view-more-btn-text">一覧を見る</p>
        <i class="icon-arrow-b"></i>
    </a>
    <!-- スマホ -->
    <a href="<?php echo esc_url(home_url('/items/')); ?>" class="view-more-btn fadeUpTrigger_left sp">
        <p class="view-more-btn-text">一覧を見る</p>
        <i class="icon-arrow-b"></i>
    </a>
</section>
<section id="NEWS-FRONT" class="news-front sec">
    <h3 class="section-title en-font">News</h3>
    <p class="section-mini-title">お知らせ</p>
    <div class="news-headline-box">
        <p class="news-headline">仕入先・商品情報関連</p>
        <a href="<?php echo esc_url(home_url('/category/for_products/')); ?>" class="view-more-btn pc">
            <p class="view-more-btn-text">詳しく見る</p>
            <i class="icon-arrow-b"></i>
        </a>
    </div>
    <!-- ---------------------------------- pc ---------------------------------- -->
    <!-- ---------------------------------- pc ---------------------------------- -->
    <div class="news-products-front-container pc">
<!-- ---------- wp ------------- -->
    <?php
    // カテゴリ「for-products」の投稿を取得
    $news_query = get_posts_by_category('for_products', 3);

    if ($news_query && $news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <a class="news-products-front-box" href="<?php the_permalink(); ?>">
                <div class="news-products-img-box">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="news-products-img">
                    <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-1.jpg" alt="No image" class="news-products-img">
                    <?php endif; ?>
                </div>
                <p class="news-products-time"><?php echo get_the_date('Y.m.d'); ?></p>
                <h3 class="news-products-title"><?php the_title(); ?></h3>
            </a>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>現在、該当するニュースはありません。</p>
    <?php endif; ?>
<!-- ---------- wp ------------- -->
    </div>
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <div class="news-products-front-container sp">
<!-- ---------- wp ------------- -->
    <?php
    // カテゴリ「for-products」の投稿を取得
    $news_query = get_posts_by_category('for_products', 1);

    if ($news_query && $news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <a class="news-products-front-box" href="<?php the_permalink(); ?>">
                <div class="news-products-img-box">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="news-products-img">
                    <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-1.jpg" alt="No image" class="news-products-img">
                    <?php endif; ?>
                </div>
                <p class="news-products-time"><?php echo get_the_date('Y.m.d'); ?></p>
                <h3 class="news-products-title"><?php the_title(); ?></h3>
            </a>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>現在、該当するニュースはありません。</p>
    <?php endif; ?>
<!-- ---------- wp ------------- -->
    </div>
    <a href="<?php echo esc_url(home_url('/category/for_products/')); ?>" class="view-more-btn sp">
        <p class="view-more-btn-text">詳しく見る</p>
        <i class="icon-arrow-b"></i>
    </a>
    <div class="company-news-flex">
        <div class="title-btn">
            <p class="title">社内ニュース</p>
            <a href="<?php echo esc_url(home_url('/category/company/')); ?>" class="view-more-btn pc">
                <p class="view-more-btn-text">一覧を見る</p>
                <i class="icon-arrow-b"></i>
            </a>
        </div>
        <div class="news-list">
            <?php
            // 親カテゴリ「company」の子カテゴリに属する投稿を取得
            $news_query = get_posts_by_parent_category('company', 3);

            if ($news_query && $news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <a class="news-item" href="<?php the_permalink(); ?>">
                        <div class="new-top">
                            <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
                            <p class="news-category">
                                <?php
                                // 投稿のカテゴリ名を取得
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name); // 最初のカテゴリ名を表示
                                }
                                ?>
                            </p>
                        </div>
                        <h3 class="news-title"><?php the_title(); ?></h3>
                    </a>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>現在、該当するニュースはありません。</p>
            <?php endif; ?>
        </div>
    </div>
    <a href="<?php echo esc_url(home_url('/category/company/')); ?>" class="view-more-btn sp">
        <p class="view-more-btn-text">一覧を見る</p>
        <i class="icon-arrow-b"></i>
    </a>
</section>
<section id="BLOG-FRONT" class="blog-front sec">
    <h3 class="section-title en-font">Blog</h3>
    <p class="section-mini-title">ブログ</p>
    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="view-more-btn pc">
        <p class="view-more-btn-text">詳しく見る</p>
        <i class="icon-arrow-b"></i>
    </a>
    <!-- ---------------------------------- pc ---------------------------------- -->
    <!-- ---------------------------------- pc ---------------------------------- -->
    <div class="blog-front-container pc">
        <?php
        $blog_query = get_custom_posts('blog', 2);
        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="blog-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-1.jpg" alt="No image" class="news-products-img">
                    <?php endif; ?>
                    <div class="content-table">
                        <div class="blog-item-text-box">
                            <h3 class="blog-title"><?php the_title(); ?></h3>
                            <div class="blog-content"><?php the_content(); ?></div>
                        </div>
                        <a class="view-more-btn-mini" href="<?php the_permalink(); ?>">
                            <i class="icon-arrow-b"></i>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>現在、該当するブログ投稿はありません。</p>
        <?php endif; ?>
    </div>
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <!-- ---------------------------------- スマホ ---------------------------------- -->
    <div class="blog-front-container sp">
        <?php
        $blog_query = get_custom_posts('blog', 1);
        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="blog-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-1.jpg" alt="No image" class="news-products-img">
                    <?php endif; ?>
                    <div class="content-table">
                        <div class="blog-item-text-box">
                            <h3 class="blog-title"><?php the_title(); ?></h3>
                            <div class="blog-content"><?php the_content(); ?></div>
                        </div>
                        <a class="view-more-btn-mini" href="<?php the_permalink(); ?>">
                            <i class="icon-arrow-b"></i>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>現在、該当するブログ投稿はありません。</p>
        <?php endif; ?>
    </div>
    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="view-more-btn sp">
        <p class="view-more-btn-text">詳しく見る</p>
        <i class="icon-arrow-b"></i>
    </a>
</section>
<section id="RECRUIT-FRONT" class="recruit-front sec">
    <!-- pc -->
    <div class="recruit-front-table pc">
        <h3 class="section-title en-font">Recruit</h3>
        <p class="section-mini-title">採用情報</p>
        <p class="recruit-front-sentence">
        各個人のやる気、能力を正当に評価し応えます。業界や商品などの専門知識は、入社してから徐々に習得ができるので心配要りません！ベテランスタッフがサポートします。失敗と成功を沢山して、商品知識や社内外の信頼を得た人財を育成したいと思っております。
        </p>
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="view-more-btn">
            <p class="view-more-btn-text">詳しく見る</p>
            <i class="icon-arrow-b"></i>
        </a>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit-in.jpg" class="recruit-in-img">
    </div>
    <!-- スマホ -->
    <div class="recruit-front-table fadeUpTrigger_left sp">
        <h3 class="section-title en-font">Recruit</h3>
        <p class="section-mini-title">採用情報</p>
        <p class="recruit-front-sentence">
        各個人のやる気、能力を正当に評価し応えます。業界や商品などの専門知識は、入社してから徐々に習得ができるので心配要りません！ベテランスタッフがサポートします。失敗と成功を沢山して、商品知識や社内外の信頼を得た人財を育成したいと思っております。
        </p>
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="view-more-btn">
            <p class="view-more-btn-text">詳しく見る</p>
            <i class="icon-arrow-b"></i>
        </a>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit-in.jpg" class="recruit-in-img">
    </div>
</section>
<div class="sec">
    <h3 class="section-title en-font">Contact</h3>
    <p class="section-mini-title">お問い合わせ</p>
</div>
<?php get_template_part('inc/content','contact'); ?>

<?php get_footer(); ?><!-- footer.php の読み込み -->