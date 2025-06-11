<?php

/* ---------------------------- 投稿情報を取得 ------------------------------- */
/* ---------------------------- 投稿情報を取得 ------------------------------- */
function setup() {
	//投稿内の画像をすべて取得
	function post_images() {
		global $post, $posts;
		ob_start();
		ob_end_clean();
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		return $matches[1];
	}
	//アイキャッチ画像を取得
	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];
		if(empty($first_img)){
			// 記事内で画像がなかったときのためのデフォルト画像を指定
			$first_img = "https://dream24fuk.com/img/default_img.jpg";
		}
		return $first_img;
	}
	add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
	function twpp_change_excerpt_more( $more ) {
  		return '...';
	}
	add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
}
add_action( 'after_setup_theme', 'setup' ); //after_setup_themeアクションフック※に登録します。
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */


function enqueue_fax_download_script() {
  wp_enqueue_script(
    'fax-download',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    null,
    true
  );

  // JSにPDFのURLを渡す
  wp_localize_script('fax-download', 'faxDownload', array(
    'pdfUrl' => get_template_directory_uri() . '/assets/img/fax-yanokizai.pdf'
  ));
}
add_action('wp_enqueue_scripts', 'enqueue_fax_download_script');



/* ----------------------- デフォルトのアーカイブ準備 --------------------------- */
/* ----------------------- デフォルトのアーカイブ準備 --------------------------- */
function post_has_archive($args, $post_type){ //パーマリンクの更新必要
    if('post' == $post_type){
      $args['rewrite'] = true;
      $args['has_archive'] = 'news';//デフォルトもアーカイブを作れるようにする
      $args['label'] = 'ニュース';  //管理画面の名前変更
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */




/* ---------------------------- カスタム投稿の追加 ------------------------------- */
/* ---------------------------- カスタム投稿の追加 ------------------------------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {

  register_post_type(
    'blog', //カスタム投稿タイプ名
    array( 
      'label' => 'ブログ', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 4, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( 
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );
  register_post_type(
    'products', //カスタム投稿タイプ名
    array( 
      'label' => '取り扱い商品',// 管理画面上の表示（日本語でもOK）
      'public' => true,// 管理画面に表示するかどうかの指定
      'has_archive' => true,// 投稿した記事の一覧ページを作成する
      'menu_position' => 5,// 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true,// Gutenbergの有効化
      'supports' => array(
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions', // リビジョンの保存

      ),
    )
  );
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */



/* -------------------------- カスタム投稿カテゴリの追加 ------------------------------- */
/* -------------------------- カスタム投稿カテゴリの追加 ------------------------------- */
function create_news_taxonomy() {

  register_taxonomy(
      'blog_category', // タクソノミーのスラッグ
      'blog', // 紐づけるカスタム投稿タイプ
      array(
          'label' => 'ブログカテゴリ',
          'hierarchical' => true, // true でカテゴリー形式、false でタグ形式
          'show_ui' => true,
          'rewrite' => array('slug' => 'blog_category'),
          'show_admin_column' => true,
      )
  );
  register_taxonomy(
      'products_category', // タクソノミーのスラッグ
      'products', // 紐づけるカスタム投稿タイプ
      array(
          'label' => '商品カテゴリ',
          'hierarchical' => true, // true でカテゴリー形式、false でタグ形式
          'show_ui' => true,
          'rewrite' => array('slug' => 'products_category'),
          'show_admin_column' => true,
      )
  );
}
add_action('init', 'create_news_taxonomy');
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */




/* ---------------------------- ページネーション変数追加 ------------------------------- */
/* ---------------------------- ページネーション変数追加 ------------------------------- */
function custom_query_vars($vars) {
  $vars[] = 'paged'; // ページネーション用の変数を追加
  return $vars;
}
add_filter('query_vars', 'custom_query_vars');
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */





/* ------------------------- 特定のカテゴリの投稿情報を取得 ------------------------------- */
/* ------------------------- 特定のカテゴリの投稿情報を取得 ------------------------------- */
//  * @param string $category_slug カテゴリのスラッグ
//  * @param int $posts_per_page 表示する投稿数
//  * @return WP_Query
function get_posts_by_category($category_slug, $posts_per_page = 3) {
  $category = get_category_by_slug($category_slug);
  if (!$category) {
      return null; // カテゴリが存在しない場合は null を返す
  }
  $args = array(
      'category__in'   => array($category->term_id), // カテゴリIDを指定
      'posts_per_page' => $posts_per_page,          // 表示する投稿数
      'orderby'        => 'date',                  // 並び順
      'order'          => 'DESC',                  // 降順
  );
  return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */



/* ------------------ 特定の親カテゴリの子カテゴリに属する投稿を取得 -------------------------- */
/* ------------------ 特定の親カテゴリの子カテゴリに属する投稿を取得 -------------------------- */

//  * @param string $parent_category_slug 親カテゴリのスラッグ
//  * @param int $posts_per_page 表示する投稿数
//  * @return WP_Query
function get_posts_by_parent_category($parent_category_slug, $posts_per_page = 3) {
  $parent_category = get_category_by_slug($parent_category_slug);
  if (!$parent_category) {
      return null; // 親カテゴリが存在しない場合は null を返す
  }
  // 親カテゴリの子カテゴリIDを取得
  $child_categories = get_categories(array(
      'child_of' => $parent_category->term_id,
      'hide_empty' => true,
  ));
  if (empty($child_categories)) {
      return null; // 子カテゴリが存在しない場合は null を返す
  }
  // 子カテゴリのIDを配列に変換
  $child_category_ids = wp_list_pluck($child_categories, 'term_id');
  $args = array(
      'category__in'   => $child_category_ids, // 子カテゴリIDを指定
      'posts_per_page' => $posts_per_page,    // 表示する投稿数
      'orderby'        => 'date',            // 並び順
      'order'          => 'DESC',            // 降順
  );
  return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */



/* --------------- 特定の投稿タイプの投稿を取得（ページネーション対応） ----------------------- */
/* --------------- 特定の投稿タイプの投稿を取得（ページネーション対応） ----------------------- */

//  * @param string $post_type 投稿タイプ（デフォルトは 'post'）
//  * @param int $posts_per_page 1ページあたりの投稿数
//  * @return WP_Query
function get_paginated_posts($post_type = 'post', $posts_per_page = 6) {
  $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号を取得
  $args = array(
      'post_type'      => $post_type,
      'posts_per_page' => $posts_per_page,
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC',
  );
  return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */



/* ---------------------------- アーカイブページ設定 -------------------------------- */
/* ---------------------------- アーカイブページ設定 -------------------------------- */
//各アーカイブページで何件表示させるか？
function column_posts($query){
	if(is_admin() ||!$query->is_main_query()){
	  return;
	}
  
  //デフォルト投稿ページの表示件数
	  if($query->is_archive()){
		$query->set('posts_per_page','4');
		return;
	  }
  }
  add_action('pre_get_posts', 'column_posts');

function get_primary_category_name() {
$categories = get_the_category();
return !empty($categories) ? esc_html($categories[0]->name) : '未分類';
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */



/* ---------------------------- カテゴリのスラッグを取得 -------------------------------- */
/* ---------------------------- カテゴリのスラッグを取得 -------------------------------- */
}
// カテゴリのスラッグを取得する関数
function get_primary_category_slug() {
    $categories = get_the_category();
    return !empty($categories) ? esc_html($categories[0]->slug) : 'default'; // カテゴリのスラッグを取得
}
// 投稿のカテゴリIDを取得する関数
function get_primary_category_id() {
    $categories = get_the_category(); // 投稿に関連付けられたカテゴリを取得
    return !empty($categories) ? $categories[0]->term_id : null; // 最初のカテゴリのIDを返す
}
/**
 * 特定のカテゴリの投稿を取得する関数（ページネーション対応）
 *
 * @param string $category_slug カテゴリのスラッグ
 * @param int $posts_per_page 1ページあたりの投稿数
 * @return WP_Query
 */
function get_posts_by_category_slug($category_slug, $posts_per_page = 5) {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号を取得

    $category = get_category_by_slug($category_slug);
    if (!$category) {
        return null; // カテゴリが存在しない場合は null を返す
    }
    $args = array(
        'post_type'      => 'post', // 通常の投稿タイプ
        'posts_per_page' => $posts_per_page, // 1ページあたりの投稿数
        'paged'          => $paged, // ページネーション対応
        'orderby'        => 'date', // 日付順
        'order'          => 'DESC', // 降順
        'cat'            => $category->term_id, // カテゴリIDを指定
    );
    return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */




/* ------------------------- 特定のカテゴリの投稿情報を取得 -------------------------------- */
/* ------------------------- 特定のカテゴリの投稿情報を取得 -------------------------------- */

//  * @param string $category_slug カテゴリのスラッグ
//  * @param int $posts_per_page 表示する投稿数
//  * @return WP_Query
 function get_latest_posts_by_category($category_slug, $posts_per_page = 1) {
  $category = get_category_by_slug($category_slug);

  if (!$category) {
      return null; // カテゴリが存在しない場合は null を返す
  }
  $args = array(
      'category__in'   => array($category->term_id), // カテゴリIDを指定
      'posts_per_page' => $posts_per_page,          // 表示する投稿数
      'orderby'        => 'date',                  // 日付順
      'order'          => 'DESC',                  // 降順
  );

  return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */





/* --------------- カスタム投稿の投稿情報を取得(ページネーションなし,一部だけ表示) -------------------------------- */
/* --------------- カスタム投稿の投稿情報を取得(ページネーションなし,一部だけ表示) -------------------------------- */

// * @param string $post_type カスタム投稿タイプのスラッグ
// * @param int $posts_per_page 表示する投稿数
// * @return WP_Query
function get_custom_posts($post_type, $posts_per_page = 2) {
  $args = array(
      'post_type'      => $post_type,
      'posts_per_page' => $posts_per_page,
      'orderby'        => 'date',
      'order'          => 'DESC',
  );
  return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */




/* ------------------- カスタム投稿タイプの投稿を取得（ページネーション対応） -------------------------------- */
/* ------------------- カスタム投稿タイプの投稿を取得（ページネーション対応） -------------------------------- */

//  * @param string $post_type カスタム投稿タイプのスラッグ
//  * @param int $posts_per_page 1ページあたりの投稿数
//  * @return WP_Query
function get_paginated_custom_posts($post_type = 'post', $posts_per_page = 6) {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号を取得
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    return new WP_Query($args);
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */





/* ------------------------- 現在表示しているカテゴリの説明文を取得 -------------------------------- */
/* ------------------------- 現在表示しているカテゴリの説明文を取得 -------------------------------- */
/**
 * 現在表示しているカテゴリの説明文を取得する関数
 *
 * @return string カテゴリの説明文
 */
function get_current_category_description() {
    $current_category = get_queried_object(); // 現在のカテゴリ情報を取得
    if ($current_category && !empty($current_category->description)) {
        return $current_category->description; // カテゴリの説明文を返す
    }
    return ''; // 説明文がない場合は空文字を返す
}
/* ---------------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------- */







?>