<?php
define('FORCE_SSL_ADMIN', true);


if ( is_page_template( 'dtpage.php' ) ) {
 add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);    
}


/*--------------------------------------------------
サムネイルと投稿画像サイズ
-------------------------------------------------- */
/* サムネイル */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 72, 72 );

/* 中サイズ */
add_image_size( 'm-img', 200, 9999, false );

/* 大サイズ */
add_image_size( 'l-img', 420, 9999, false );

/*--------------------------------------------------
不要なp brタグを入れない
-------------------------------------------------- */
//remove_filter('the_content', 'wpautop');

/*--------------------------------------------------
記事を表示させる
-------------------------------------------------- */
function my_post_queries( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    // ホームとカテゴリーアーカイブで表示件数を３件に設定
 
    if ( is_home() ) {
        $query->set('posts_per_page', 3);
        return;
    }
 
    if ( is_category() ) {
        $query->set('posts_per_page', 5);
        return;
    }
}
add_action( 'pre_get_posts', 'my_post_queries' );



/*--------------------------------------------------
Short Code
[fbcu] [fbis] [fbko] [ame] [oto]
-------------------------------------------------- */

function link_fb_cu(){
    return '<a href="https://www.facebook.com/cutin1120/" target="_blank">Cut in NOGUCHI のFacebook</a>'; }
add_shortcode('fbcu','link_fb_cu');
function link_fb_is(){
    return '<a href="https://www.facebook.com/ishairworks" target="_blank">Is Hair Works のFacebook</a>'; }
add_shortcode('fbis','link_fb_is');
function link_fb_ko(){
    return '<a href="https://www.facebook.com/pages/%E3%83%93%E3%83%BC%E3%83%AF%E3%83%B3%E3%82%B7%E3%82%A7%E3%83%BC%E3%83%93%E3%83%B3%E3%82%B0%E5%B0%82%E9%96%80%E5%BA%97-%E3%81%93%E3%81%AF%E3%82%8B%E3%81%B3%E3%82%88%E3%82%8A/287564864702683/" target="_blank">こはるびより のFacebook</a>'; }
add_shortcode('fbko','link_fb_ko');
function link_ameblo(){
    return '<a href="https://www.facebook.com/cutin1120/" target="_blank">ブログはこちら</a>'; }
add_shortcode('ame','link_ameblo');
function link_contactus(){
    return '<a href="' . get_bloginfo('url') . '/contactus/">' . 'お問い合わせはこちらから</a>'; }
add_shortcode('oto','link_contactus');

/*--------------------------------------------------
STAFF　追加のカスタム投稿
-------------------------------------------------- */
add_action('init', 'register_post_type_and_taxonomy');

function register_post_type_and_taxonomy()
{
    register_post_type(
    'staff',
    array(
        'labels' => array(
            'name' => 'STAFF',
            'add_new_item' => 'STAFFを追加する',
            'edit_item' => 'STAFFの編集'
            ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'thumbnail',
            'page-attributes'
            ),
    )
    );
}

/*--------------------------------------------------
Footer　カスタムメニューPLUS
-------------------------------------------------- */
register_nav_menu('menuplus','フッター');

/*--------------------------------------------------
管理画面の変更
-------------------------------------------------- */
//管理バーの表示項目
function remove_admin_bar_menu( $wp_admin_bar ) {
    $wp_admin_bar->remove_menu('wp-logo'); // WordPressロゴ
//    $wp_admin_bar->remove_menu('my-sites'); // 参加サイト for マルチサイト
//    $wp_admin_bar->remove_menu('site-name'); // サイト名
    $wp_admin_bar->remove_menu('view-site'); // サイト名 -> サイトを表示
    $wp_admin_bar->remove_menu('updates'); // 更新
    $wp_admin_bar->remove_menu('comments'); // コメント
    //$wp_admin_bar->remove_menu('new-content'); // 新規
    //$wp_admin_bar->remove_menu('new-post'); // 新規 -> 投稿
    //$wp_admin_bar->remove_menu('new-media'); // 新規 -> メディア
    //$wp_admin_bar->remove_menu('new-link'); // 新規 -> リンク
    //$wp_admin_bar->remove_menu('new-page'); // 新規 -> 固定ページ
    //$wp_admin_bar->remove_menu('new-user'); // 新規 -> ユーザー
    //$wp_admin_bar->remove_menu('my-account'); // マイアカウント
    $wp_admin_bar->remove_menu('user-info'); // マイアカウント -> プロフィール
    $wp_admin_bar->remove_menu('edit-profile'); // マイアカウント -> プロフィール編集
    //$wp_admin_bar->remove_menu('logout'); // マイアカウント -> ログアウト
    //$wp_admin_bar->remove_menu('search'); // 検索
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 201 );

//メニューの非表示
function remove_menu() {
remove_menu_page('edit-comments.php'); // コメント
remove_submenu_page('options-general.php','options-discussion.php'); //ディスカッション
remove_submenu_page('options-general.php','options-permalink.php'); //パーマリンク
}
add_filter('admin_menu','remove_menu');

//表示の順番
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
    return array(
        'edit.php', // 投稿
        'edit.php?post_type=page', // 固定ページ
        'upload.php', // メディア
        'separator1', // 仕切り
        'admin.php?page=operation' , //オペ-レーション
        'themes.php', // 外観
        'edit.php?post_type=staff', // スタッフ
        'users.php', // ユーザー
        'separator2', // 仕切り
        'index.php', // ダッシュボード
        'link-manager.php', // リンク
        'edit-comments.php', // コメント
        'plugins.php', // プラグイン
        'tools.php', // ツール
        'options-general.php', // 設定
        'separator-last', // 仕切り
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

//Woedpressを表示しない
function custom_admin_footer(){
    echo 'お問い合わせ&nbsp;:&nbsp;<a href="mailto:shoheiworks@gmail.com">shoheiworks@gmail.com</a>';
}
add_filter('admin_footer_text' , 'custom_admin_footer');