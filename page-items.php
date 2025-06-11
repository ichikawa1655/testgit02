<?php get_header(); ?><!-- header.php の読み込み -->
<!-- -------- 子ページ トップ -------- -->
<section id="STRENGTHS-TOP" class="cp-fv fv-cp-products-img header-m">
    <div class="filter">
    <div class="cp-fv-bottom-navi sp">
        <div class="content">TOP</div>
        <div class="content">取扱一覧</div>
    </div>

        <div class="text-box">
            <p class="title-en en-font">・Products</p>
            <h2>取扱一覧</h2>
        </div>
    </div>
</section>
<div class="cp-fv-bottom-navi pc">
    <div class="content">TOP</div>
    <div class="content">取扱一覧</div>
</div>
<!-- -------- 子ページ トップ -------- -->
<!-- ----------- セクションタイトル ----------- -->
<div class="section-title-box fadeUpTrigger" id="PRODUCTS-LIST">
    <h3 class="section-title en-font ">Products</h3>
    <p class="section-mini-title">商材</p>
</div> 
<!-- ----------- セクションタイトル ----------- -->
<section id="" class="products-genre-list sec">
    <ul>
        <li class="fadeUpTrigger">
            <div class="products-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-1.jpg" alt="">
            </div>
            <p class="products-name">配管機材</p>
            <p class="products-sentence">
                パイプ、継手(塩ビ・鉄・SUS・銅)、樹脂管、バルブ、支持金具、排水部材 など
            </p>
        </li>
        <li class="fadeUpTrigger">
            <div class="products-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-2.jpg" alt="">
            </div>
            <p class="products-name">住宅設備機器</p>
            <p class="products-sentence">
                水栓キッチン、トイレ、浴室、洗面化粧台、給湯器、エコキュート、エアコン、ガスコンロ、IHコンロ、換気扇 など
            </p>
        </li>
        <li class="fadeUpTrigger">
            <div class="products-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-3.jpg" alt="">
            </div>
            <p class="products-name">土木資材</p>
            <p class="products-sentence">
                公共マス、メーター廻り・BOX、ボイド、コンクリート、砂、マンホール、テープ(粘着・防水・養生・ビニール)、シーリング剤、接着剤 など
            </p>
        </li>
        <li class="fadeUpTrigger">
            <div class="products-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-4.jpg" alt="">
            </div>
            <p class="products-name">建設資材</p>
            <p class="products-sentence">
                キッチンパネル、床材、建具、エクステリア(物置・カーポート) など
            </p>
        </li>
        <li class="fadeUpTrigger">
            <div class="products-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products-genre-5.jpg" alt="">
            </div>
            <p class="products-name">機械工具・その他</p>
            <p class="products-sentence">
                電気工具、作業工具、加圧ポンプ、グリーストラップ、消火栓、他
            </p>
        </li>
    </ul>
</section>
<!-- ----------- セクションタイトル ----------- -->
<div class="section-title-box">
    <h3 class="section-title en-font">Inventory List</h3>
    <p class="section-mini-title">在庫品一覧</p>
</div> 
<!-- ----------- セクションタイトル ----------- -->
<div class="inventory-flex sec">
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(11, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pipe.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">パイプ</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(20, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/valve.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">バルブ類</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(27, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fitting.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">継手</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(24, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hanger-brackets.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">支持金具類</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(22, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tools.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">工具類</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(28, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sanitary-ware.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">衛生陶器</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(23, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metal-fixtures.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">建築金物</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(25, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/air-conditioning.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div  class="view-more-btn no-hover">
                <p class="view-more-btn-text">空調資材</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(21, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cream.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">保湿剤</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(26, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/water-supply.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">給水装置・<br>下水道用材料</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(29, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pipe-cleaner.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">配管洗浄剤</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
    <a class="inventory-item" data-category="industry" href="<?php echo get_category_link(30, 'products_category'); ?>">
        <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/others-inventory-list.jpg" alt="">
        </div>
        <div class="right">
            <!-- ----------- もっと見る-ボタン ----------- -->
            <div class="view-more-btn no-hover">
                <p class="view-more-btn-text">その他</p>
                <i class="icon-arrow-b"></i>
            </div>
            <!-- ----------- もっと見る-ボタン ----------- -->
        </div>
    </a>
</div>
<!-- ----------- セクションタイトル ----------- -->
<div class="section-title-box" id="MANUFACTURER">
    <h3 class="section-title en-font Manufacturer-title">Manufacturer</h3>
    <p class="section-mini-title">取り扱いメーカー</p>
</div>
<!-- ----------- セクションタイトル ----------- -->
<section id="" class="manufacturer sec">
    <ul>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-akagi.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-aron.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-asahiyukizai.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-ben.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-benkan.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-corona.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-crinap.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-daikin.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-ebara.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-kakudai.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-kitz.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-lixil.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-maezawa.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-makita.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-mitsubishi-erectric.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-nippo-bubble.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-noritz.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-pridegestone.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-pro-style-tool.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-sanei.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-sansei.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-sekisui.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-tabuchi.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-takara-standard.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-tk.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-toto.png" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-yamamoto.jpg" alt="">
        </li>
        <li class="fadeUpTrigger_left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maker-yubiku.jpg" alt="">
        </li>
    </ul>
</section>




<?php get_template_part('inc/content','contact'); ?>
<?php get_footer(); ?><!-- footer.php の読み込み -->