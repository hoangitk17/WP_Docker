<?php


/**
 * Khai báo hằng số
 */
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL."/core");

/**
 * Nhúng file /core/init.php
 */

require_once(CORE."/init.php");

echo $content_width;

if(!isset($content_width)) {
  $content_width = 620;
}


/**
 * Khai báo những chức năng trong theme
 */

if(!function_exists('wplearn_theme_setup')) {
  function wplearn_theme_setup() {
    $language_folder = THEME_URL."/languages";
    load_theme_textdomain('wplearn', $language_folder);

    /**
     * Tự động thêm link RSS vào thẻ <head>
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Thêm post thumnail
     */

    add_theme_support('post-thumnail');

    /**
     * Post format
     */

    add_theme_support('post-format', array(
      'image',
      'video',
      'gallery',
      'quote',
      'link'
    ));

    add_theme_support('title-tag');
    $default_background = array(
      'default-color' => '#e8e8e8'
    );
    add_theme_support('custom-background', $default_background);

    register_nav_menu('primary', __('Primary Menu', 'wplearn'));
  }

  add_action('init', 'wplearn_theme_setup');
}

/**
 * Template function
 */

if(!function_exists('wplearn_header')) {
  function wplearn_header() {
    if (is_home()) {
      printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
          get_bloginfo('url'),
          get_bloginfo('description'),
          get_bloginfo('sitename')
      );
  }
  }
}

if(!function_exists('wplearn_pagination')) {
  function wplearn_pagination() {
    if($GLOBALS['wp_query']->max_num_pages < 2) {
      return '';
    } ?>
    <nav class="pagination" role="pagination">
      <?php if (get_next_posts_link()) : ?>
        <div class="prev"><?php next_posts_link(__('Older post', 'wplearn')) ?></div>
      <?php endif ?>
      <?php if (get_previous_posts_link()): ?>
        <div class="next"><?php previous_posts_link(__("Newest post", 'wplearn')) ?></div>
      <?php endif ?>
    </nav>
    <?php
  }
}