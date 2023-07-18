<?php

/*
 * Plugin Name:       Wordpress2023 - Ecommerce
 * Plugin URI:        #
 * Description:       Plugin phục vụ học tập
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nguyễn Văn Hoàng
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023-ecommerce
 * Domain Path:       /languages
 */

//  Định nghĩa các hằng số của plugin
define('WP2023_PATH', plugin_dir_path(__FILE__));
define('WP2023_URI', plugin_dir_url(__FILE__));

// Định nghĩa hàm khi kích hoạt plugin

register_activation_hook(
    __FILE__,
    'wp2023_ecommerce_activation'
);
function wp2023_ecommerce_activation()
{
    echo "hi";
    // Tạo CSDL

    // Tạo dữ liệu mẫu
}

register_deactivation_hook(
    __FILE__,
    'wp2023_ecommerce_deactivation'
);
function wp2023_ecommerce_deactivation()
{
    echo "hi";
    // Xóa CSDL
}