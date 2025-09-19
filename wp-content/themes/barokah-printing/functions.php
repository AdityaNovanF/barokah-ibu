<?php
/**
 * Functions and definitions for Barokah Printing Theme
 */

// Enqueue minimal scripts - Tailwind loaded in header
function barokah_printing_scripts() {
    // Theme style (hanya untuk WordPress requirements)
    wp_enqueue_style('barokah-printing-style', get_stylesheet_uri(), array(), '1.0');
    
    // Custom JavaScript
    wp_enqueue_script('barokah-printing-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    
    // Localize script for AJAX
    wp_localize_script('barokah-printing-main', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('barokah_printing_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'barokah_printing_scripts');

// Theme setup
function barokah_printing_setup() {
    // Add theme support for menus
    add_theme_support('menus');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'barokah_printing_setup');

// Custom post type untuk portfolio percetakan
function create_printing_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => 'Portfolio',
                'singular_name' => 'Portfolio Item',
                'add_new' => 'Add New Portfolio',
                'add_new_item' => 'Add New Portfolio Item',
                'edit_item' => 'Edit Portfolio Item',
                'new_item' => 'New Portfolio Item',
                'view_item' => 'View Portfolio Item',
                'search_items' => 'Search Portfolio',
                'not_found' => 'No portfolio items found',
                'not_found_in_trash' => 'No portfolio items found in Trash'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'portfolio'),
        )
    );
}
add_action('init', 'create_printing_portfolio_post_type');

// Custom post type untuk layanan percetakan
function create_printing_services_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new' => 'Add New Service',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service',
                'new_item' => 'New Service',
                'view_item' => 'View Service',
                'search_items' => 'Search Services',
                'not_found' => 'No services found',
                'not_found_in_trash' => 'No services found in Trash'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-admin-tools',
            'rewrite' => array('slug' => 'services'),
        )
    );
}
add_action('init', 'create_printing_services_post_type');

// Tambahkan custom fields untuk pricing
function add_service_price_meta_box() {
    add_meta_box(
        'service_price',
        'Service Price',
        'service_price_callback',
        'services',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_service_price_meta_box');

function service_price_callback($post) {
    wp_nonce_field('save_service_price', 'service_price_nonce');
    $price = get_post_meta($post->ID, '_service_price', true);
    echo '<input type="text" name="service_price" value="' . esc_attr($price) . '" placeholder="Rp 50.000" style="width: 100%;" />';
}

function save_service_price($post_id) {
    if (!isset($_POST['service_price_nonce']) || !wp_verify_nonce($_POST['service_price_nonce'], 'save_service_price')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, '_service_price', sanitize_text_field($_POST['service_price']));
    }
}
add_action('save_post', 'save_service_price');

// Handle contact form submission
function handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $full_name = sanitize_text_field($_POST['full_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = 'Pesan Baru dari Website - ' . get_bloginfo('name');
    $body = "Pesan baru dari website:\n\n";
    $body .= "Nama: $full_name\n";
    $body .= "Telepon: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Layanan: $service\n";
    $body .= "Pesan: $message\n\n";
    $body .= "Dikirim dari: " . home_url();
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $full_name . ' <' . $email . '>'
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    // Redirect back with success message
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_handle_contact_form', 'handle_contact_form');
add_action('admin_post_nopriv_handle_contact_form', 'handle_contact_form');

// Display contact form messages
function display_contact_message() {
    if (isset($_GET['contact'])) {
        if ($_GET['contact'] == 'success') {
            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.</div>';
        } elseif ($_GET['contact'] == 'error') {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.</div>';
        }
    }
}

// Remove the head scripts function since we load Tailwind directly in header
// add_action('wp_head', 'barokah_printing_head_scripts', 1);
?>