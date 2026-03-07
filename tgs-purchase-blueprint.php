<?php
/**
 * Plugin Name:       TGS Purchase Blueprint
 * Plugin URI:        https://thegioisua.vn
 * Description:       Blueprint trực quan — Luồng Mua Bán Hàng Thế Giới Sữa (650 cửa hàng). 18 bảng (v9c). Dùng thuyết trình & onboard team. Cập nhật 07/03/2026.
 * Version:           2.2.0
 * Author:            TGS Dev Team
 * Text Domain:       tgs-purchase-blueprint
 * Requires Plugins:  tgs_shop_management
 */

if (!defined('ABSPATH')) {
    exit;
}

/* ── Hằng số ── */
define('TGS_BP_PATH', plugin_dir_path(__FILE__));
define('TGS_BP_URL',  plugin_dir_url(__FILE__));
define('TGS_BP_VER',  '2.2.0');

/**
 * Danh sách 7 trang blueprint.
 * Slug => [Tiêu đề tab, đường dẫn file view]
 */
function tgs_bp_pages()
{
    return [
        'bp-tong-quan'      => ['Blueprint — Tổng Quan',         TGS_BP_PATH . 'views/dashboard.php'],
        'bp-luong-mua-hang' => ['Blueprint — Luồng 12 Bước',     TGS_BP_PATH . 'views/luong-mua-hang.php'],
        'bp-lo-mua-ncc'     => ['Blueprint — Lô Mua NCC',        TGS_BP_PATH . 'views/lo-mua-ncc.php'],
        'bp-batch'          => ['Blueprint — Batch & Sub-batch',  TGS_BP_PATH . 'views/batch-phan-cap.php'],
        'bp-chinh-sach-mua' => ['Blueprint — Chính Sách Mua',    TGS_BP_PATH . 'views/chinh-sach-mua.php'],
        'bp-cong-no'        => ['Blueprint — Công Nợ & FIFO',    TGS_BP_PATH . 'views/cong-no-fifo.php'],
        'bp-chinh-sach-ban' => ['Blueprint — Chính Sách Bán',    TGS_BP_PATH . 'views/chinh-sach-ban.php'],
        'bp-bang-du-lieu'   => ['Blueprint — Từ Điển Dữ Liệu',  TGS_BP_PATH . 'views/bang-du-lieu.php'],
    ];
}

/* ────────────────────────────────────────────────────────────────────────── */
/*  1. Đăng ký routes vào dashboard tgs_shop_management                     */
/* ────────────────────────────────────────────────────────────────────────── */
add_filter('tgs_shop_dashboard_routes', function ($routes) {
    return array_merge($routes, tgs_bp_pages());
});

/* ────────────────────────────────────────────────────────────────────────── */
/*  2. Sidebar menu — nhóm collapsible "Blueprint Mua Bán"                  */
/* ────────────────────────────────────────────────────────────────────────── */
add_action('tgs_shop_sidebar_menu', function ($current_view) {

    $menu = [
        'bp-tong-quan'      => ['bx-home-circle',   'Tổng Quan'],
        'bp-luong-mua-hang' => ['bx-git-merge',     'Luồng 12 Bước'],
        'bp-lo-mua-ncc'     => ['bx-package',       'Lô Mua NCC'],
        'bp-batch'          => ['bx-layer',          'Batch & Sub-batch'],
        'bp-chinh-sach-mua' => ['bx-book-content',  'Chính Sách Mua'],
        'bp-cong-no'        => ['bx-calculator',    'Công Nợ & FIFO'],
        'bp-chinh-sach-ban' => ['bx-purchase-tag',  'Chính Sách Bán'],
        'bp-bang-du-lieu'   => ['bx-data',           'Từ Điển Dữ Liệu'],
    ];

    $is_bp = strpos((string) $current_view, 'bp-') === 0;
    $open  = $is_bp ? ' open' : '';

    echo '<li class="menu-item' . $open . '">';
    echo   '<a href="javascript:void(0)" class="menu-link menu-toggle">';
    echo     '<i class="menu-icon tf-icons bx bx-book-open"></i>';
    echo     '<div>Blueprint Mua Bán</div>';
    echo   '</a>';
    echo   '<ul class="menu-sub">';

    foreach ($menu as $slug => [$icon, $label]) {
        $active = ($current_view === $slug) ? ' active' : '';
        $href   = function_exists('tgs_url') ? tgs_url($slug) : '#';
        echo '<li class="menu-item' . $active . '">';
        echo   '<a href="' . esc_url($href) . '" class="menu-link">';
        echo     '<i class="bx ' . esc_attr($icon) . ' me-1"></i>';
        echo     '<div>' . esc_html($label) . '</div>';
        echo   '</a>';
        echo '</li>';
    }

    echo   '</ul>';
    echo '</li>';
});

/* ────────────────────────────────────────────────────────────────────────── */
/*  3. Enqueue CSS + JS (chỉ khi đang ở trang blueprint)                   */
/* ────────────────────────────────────────────────────────────────────────── */
add_action('admin_enqueue_scripts', function () {
    // Luôn enqueue — CSS/JS nhẹ, layout chỉ render khi đúng view
    wp_enqueue_style('tgs-bp',  TGS_BP_URL . 'assets/css/blueprint.css', [], TGS_BP_VER);
    wp_enqueue_script('tgs-bp', TGS_BP_URL . 'assets/js/blueprint.js', ['jquery'], TGS_BP_VER, true);
});

/* ────────────────────────────────────────────────────────────────────────── */
/*  4. Helper: lấy URL trang blueprint                                       */
/* ────────────────────────────────────────────────────────────────────────── */
function tgs_bp_url($slug)
{
    return function_exists('tgs_url') ? tgs_url($slug) : '#';
}
