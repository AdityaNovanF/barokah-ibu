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
    
    // Portfolio filter script
    wp_enqueue_script('barokah-printing-portfolio', get_template_directory_uri() . '/assets/js/portfolio.js', array(), '1.0', true);
    
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
    
    // Add theme support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');
    add_image_size('portfolio-thumbnail', 800, 600, true); // Ukuran khusus untuk thumbnail portfolio
    
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

// Fix image upload issues
function fix_image_upload_issues() {
    // Allow all common image formats
    add_filter('upload_mimes', function($mimes) {
        // Standard formats
        $mimes['jpg'] = 'image/jpeg';
        $mimes['jpeg'] = 'image/jpeg';
        $mimes['png'] = 'image/png';
        $mimes['gif'] = 'image/gif';
        
        // Modern formats
        $mimes['webp'] = 'image/webp';
        $mimes['avif'] = 'image/avif';
        $mimes['heic'] = 'image/heic';
        $mimes['heif'] = 'image/heif';
        
        // Vector formats
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        
        // Raw/Professional formats
        $mimes['bmp'] = 'image/bmp';
        $mimes['tiff'] = 'image/tiff';
        $mimes['tif'] = 'image/tiff';
        $mimes['ico'] = 'image/x-icon';
        
        // Adobe formats
        $mimes['psd'] = 'image/vnd.adobe.photoshop';
        $mimes['ai'] = 'application/postscript';
        
        // Other formats
        $mimes['jfif'] = 'image/jpeg';
        $mimes['pjpeg'] = 'image/pjpeg';
        $mimes['pjp'] = 'image/jpeg';
        $mimes['jxr'] = 'image/vnd.ms-photo';
        $mimes['wdp'] = 'image/vnd.ms-photo';
        
        return $mimes;
    });
    
    // Disable responsive image generation if it causes issues
    add_filter('wp_image_editor_class', function($editors) {
        return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
    });
    
    // Increase memory limit for image processing
    ini_set('memory_limit', '512M');
    
    // Fix responsive image sizes generation
    add_filter('wp_generate_attachment_metadata', function($metadata, $attachment_id) {
        if (!$metadata) {
            return $metadata;
        }
        
        // Skip responsive images for formats that might cause issues
        $file_type = get_post_mime_type($attachment_id);
        $skip_formats = array(
            'image/webp', 
            'image/svg+xml', 
            'image/bmp', 
            'image/tiff',
            'image/avif',
            'image/heic',
            'image/heif',
            'image/vnd.adobe.photoshop',
            'application/postscript',
            'image/x-icon'
        );
        
        if (in_array($file_type, $skip_formats)) {
            // Return basic metadata without responsive sizes
            return $metadata;
        }
        
        return $metadata;
    }, 10, 2);
    
    // Add custom image sizes for portfolio
    add_image_size('portfolio-large', 1200, 800, true);
    add_image_size('portfolio-medium', 800, 600, true);
    add_image_size('portfolio-small', 400, 300, true);
}
add_action('init', 'fix_image_upload_issues');

// Enhanced file upload handling
function enhanced_file_upload_handling() {
    // Disable big image threshold completely
    add_filter('big_image_size_threshold', '__return_false');
    
    // Force disable responsive image generation 
    add_filter('wp_image_resize_identical_dimensions', '__return_true');
    add_filter('wp_image_file_matches_image_meta', '__return_true');
    
    // Completely disable intermediate image sizes to prevent errors
    add_filter('intermediate_image_sizes_advanced', '__return_empty_array');
    add_filter('intermediate_image_sizes', '__return_empty_array');
    
    // Skip image processing that causes errors
    add_filter('wp_image_maybe_exif_rotate', '__return_false');
    add_filter('image_resize_dimensions', function($payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop) {
        return array(0, 0, 0, 0, $orig_w, $orig_h, $orig_w, $orig_h);
    }, 10, 6);
    
    // Force bypass all image processing
    add_filter('wp_generate_attachment_metadata', function($metadata, $attachment_id) {
        if (isset($metadata['file'])) {
            // Return minimal metadata to avoid processing
            return array(
                'file' => $metadata['file'],
                'width' => isset($metadata['width']) ? $metadata['width'] : 0,
                'height' => isset($metadata['height']) ? $metadata['height'] : 0,
                'sizes' => array() // Empty sizes to skip processing
            );
        }
        return $metadata;
    }, 10, 2);
}
add_action('init', 'enhanced_file_upload_handling');

// Enhanced upload handling and sanitization
function enhanced_upload_prefilter($file) {
    // Sanitize SVG uploads
    if ($file['type'] === 'image/svg+xml') {
        $file_content = file_get_contents($file['tmp_name']);
        // Basic SVG sanitization - remove potentially dangerous elements
        $file_content = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $file_content);
        $file_content = preg_replace('/<object\b[^<]*(?:(?!<\/object>)<[^<]*)*<\/object>/mi', '', $file_content);
        $file_content = preg_replace('/<embed\b[^<]*(?:(?!<\/embed>)<[^<]*)*<\/embed>/mi', '', $file_content);
        $file_content = preg_replace('/on\w+="[^"]*"/mi', '', $file_content);
        file_put_contents($file['tmp_name'], $file_content);
    }
    
    // Handle file size issues
    if ($file['size'] > 50 * 1024 * 1024) { // 50MB
        $file['error'] = 'File terlalu besar. Maksimal 50MB.';
        return $file;
    }
    
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'enhanced_upload_prefilter');

// Smart image editor selection
function smart_image_editor_selection($editors) {
    // Try different editors based on server capabilities
    $available_editors = array();
    
    // Check if Imagick is available and working
    if (extension_loaded('imagick') && class_exists('Imagick')) {
        $available_editors[] = 'WP_Image_Editor_Imagick';
    }
    
    // Always include GD as fallback
    if (extension_loaded('gd')) {
        $available_editors[] = 'WP_Image_Editor_GD';
    }
    
    return !empty($available_editors) ? $available_editors : array('WP_Image_Editor_GD');
}
add_filter('wp_image_editors', 'smart_image_editor_selection');

// Bypass responsive image generation errors
function bypass_responsive_image_errors($image, $attachment_id, $size) {
    // If there's an error generating responsive images, return the original
    if (is_wp_error($image)) {
        $original_url = wp_get_attachment_url($attachment_id);
        if ($original_url) {
            return $original_url;
        }
    }
    return $image;
}
add_filter('wp_get_attachment_image_src', 'bypass_responsive_image_errors', 10, 3);

// Handle upload errors gracefully
function handle_upload_errors($file) {
    // Check if the file upload failed
    if (isset($file['error']) && $file['error'] !== UPLOAD_ERR_OK) {
        switch ($file['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $file['error'] = 'File terlalu besar. Coba compress gambar atau gunakan External Image URL.';
                break;
            case UPLOAD_ERR_PARTIAL:
                $file['error'] = 'Upload tidak lengkap. Coba lagi atau gunakan External Image URL.';
                break;
            case UPLOAD_ERR_NO_FILE:
                $file['error'] = 'Tidak ada file yang dipilih.';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
            case UPLOAD_ERR_CANT_WRITE:
                $file['error'] = 'Server error. Gunakan External Image URL sebagai alternatif.';
                break;
        }
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'handle_upload_errors', 5);

// Increase upload limits
function increase_upload_limits() {
    @ini_set('upload_max_filesize', '64M');
    @ini_set('post_max_size', '64M');
    @ini_set('max_execution_time', 300);
    @ini_set('max_input_vars', 1000);
}
add_action('init', 'increase_upload_limits');

// Custom error messages for image uploads
function custom_upload_error_messages($errors) {
    $errors['image_resize_error'] = __('Terjadi masalah saat memproses gambar. Coba gunakan format JPEG atau PNG, atau gunakan External Image URL sebagai alternatif.');
    $errors['image_editor_error'] = __('Server tidak dapat memproses gambar ini. Silakan gunakan External Image URL di meta box Portfolio Images.');
    return $errors;
}
add_filter('upload_error_messages', 'custom_upload_error_messages');

// Add admin notice for image upload issues
function portfolio_upload_admin_notice() {
    global $pagenow, $post_type;
    
    if ($pagenow == 'post-new.php' && $post_type == 'portfolio') {
        echo '<div class="notice notice-info is-dismissible">
            <p><strong>Tips Upload Gambar Portfolio:</strong></p>
            <ul style="margin-left: 20px;">
                <li>Gunakan format JPEG (.jpg) atau PNG (.png)</li>
                <li>Ukuran file maksimal 5MB</li>
                <li>Jika mengalami masalah, gunakan "External Image URL" di bagian Portfolio Images</li>
            </ul>
        </div>';
    }
}
add_action('admin_notices', 'portfolio_upload_admin_notice');

// Custom post type untuk portfolio percetakan
function create_printing_portfolio_post_type() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Portfolio',
        'add_new'           => 'Tambah Portfolio',
        'add_new_item'      => 'Tambah Portfolio Baru',
        'edit_item'         => 'Edit Portfolio',
        'new_item'          => 'Portfolio Baru',
        'view_item'         => 'Lihat Portfolio',
        'search_items'      => 'Cari Portfolio',
        'not_found'         => 'Tidak ada portfolio ditemukan',
        'not_found_in_trash'=> 'Tidak ada portfolio di tong sampah',
        'menu_name'         => 'Portfolio'
    );

    $args = array(
        'labels'              => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true
    );
    
    register_post_type('portfolio', $args);

    // Register Portfolio Categories Taxonomy
    $tax_labels = array(
        'name'              => 'Kategori Portfolio',
        'singular_name'     => 'Kategori Portfolio',
        'search_items'      => 'Cari Kategori',
        'all_items'         => 'Semua Kategori',
        'parent_item'       => 'Kategori Induk',
        'parent_item_colon' => 'Kategori Induk:',
        'edit_item'         => 'Edit Kategori',
        'update_item'       => 'Update Kategori',
        'add_new_item'      => 'Tambah Kategori Baru',
        'new_item_name'     => 'Nama Kategori Baru',
        'menu_name'         => 'Kategori'
    );

    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'kategori-portfolio'),
        'show_in_rest'      => true
    );

    register_taxonomy('portfolio_category', array('portfolio'), $tax_args);
}
add_action('init', 'create_printing_portfolio_post_type');

// Create default portfolio categories
function create_default_portfolio_categories() {
    // Only create if no categories exist
    $existing_terms = get_terms(array(
        'taxonomy' => 'portfolio_category',
        'hide_empty' => false,
        'count' => true
    ));
    
    if (empty($existing_terms)) {
        $default_categories = array(
            array(
                'name' => 'Banner',
                'slug' => 'banner',
                'description' => 'Banner dan spanduk percetakan'
            ),
            array(
                'name' => 'Brosur',
                'slug' => 'brosur', 
                'description' => 'Brosur dan flyer'
            ),
            array(
                'name' => 'Packaging',
                'slug' => 'packaging',
                'description' => 'Kemasan dan packaging'
            ),
            array(
                'name' => 'Kartu Nama',
                'slug' => 'kartu-nama',
                'description' => 'Kartu nama dan kartu bisnis'
            ),
            array(
                'name' => 'Stiker',
                'slug' => 'stiker',
                'description' => 'Stiker dan label'
            )
        );
        
        foreach ($default_categories as $category) {
            if (!term_exists($category['slug'], 'portfolio_category')) {
                wp_insert_term(
                    $category['name'],
                    'portfolio_category',
                    array(
                        'slug' => $category['slug'],
                        'description' => $category['description']
                    )
                );
            }
        }
    }
}
add_action('init', 'create_default_portfolio_categories', 20);

// Flush rewrite rules on theme activation
function barokah_printing_flush_rewrite_rules() {
    create_printing_portfolio_post_type();
    create_default_portfolio_categories();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'barokah_printing_flush_rewrite_rules');

// Add meta box for portfolio images
function add_portfolio_meta_boxes() {
    add_meta_box(
        'portfolio_images',
        'Portfolio Images & Info',
        'portfolio_images_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_portfolio_meta_boxes');

// Portfolio meta box callback
function portfolio_images_callback($post) {
    wp_nonce_field('portfolio_meta_box', 'portfolio_meta_box_nonce');
    
    $external_image = get_post_meta($post->ID, 'external_image_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="external_image_url">External Image URL</label>
            </th>
            <td>
                <input type="url" 
                       id="external_image_url" 
                       name="external_image_url" 
                       value="<?php echo esc_attr($external_image); ?>" 
                       class="regular-text" 
                       placeholder="https://example.com/image.jpg" />
                <p class="description">
                    Gunakan URL gambar eksternal jika mengalami masalah upload. 
                    Pastikan URL gambar dapat diakses publik.
                </p>
            </td>
        </tr>
        <tr>
            <th scope="row">Featured Image Tips</th>
            <td>
                <p><strong>Jika mengalami masalah upload gambar:</strong></p>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>Gunakan format JPEG atau PNG</li>
                    <li>Ukuran file maksimal 5MB</li>
                    <li>Resolusi yang disarankan: 1200x800 pixels</li>
                    <li>Alternatif: Gunakan External Image URL di atas</li>
                </ul>
            </td>
        </tr>
    </table>
    <?php
}

// Save portfolio meta
function save_portfolio_meta($post_id) {
    if (!isset($_POST['portfolio_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['portfolio_meta_box_nonce'], 'portfolio_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'portfolio' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    if (isset($_POST['external_image_url'])) {
        $external_image = sanitize_url($_POST['external_image_url']);
        update_post_meta($post_id, 'external_image_url', $external_image);
    }
}
add_action('save_post', 'save_portfolio_meta');

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
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        exit;
    }
    
    // Sanitize form data
    $full_name = sanitize_text_field($_POST['full_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Handle file upload
    $uploaded_file = '';
    $upload_error = '';
    
    if (isset($_FILES['design_file']) && $_FILES['design_file']['error'] !== UPLOAD_ERR_NO_FILE) {
        if ($_FILES['design_file']['error'] === UPLOAD_ERR_OK) {
            $allowed_types = array('jpg', 'jpeg', 'png', 'pdf', 'ai', 'psd', 'eps', 'svg');
            $file_info = pathinfo($_FILES['design_file']['name']);
            $file_extension = strtolower($file_info['extension']);
            
            // Validate file type
            if (in_array($file_extension, $allowed_types)) {
                // Validate file size (10MB = 10485760 bytes)
                if ($_FILES['design_file']['size'] <= 10485760) {
                    $upload_dir = wp_upload_dir();
                    $filename = sanitize_file_name($file_info['filename']) . '_' . time() . '.' . $file_extension;
                    $upload_path = $upload_dir['path'] . '/' . $filename;
                    
                    if (move_uploaded_file($_FILES['design_file']['tmp_name'], $upload_path)) {
                        $uploaded_file = $upload_dir['url'] . '/' . $filename;
                    } else {
                        $upload_error = 'Gagal mengupload file.';
                    }
                } else {
                    $upload_error = 'File terlalu besar. Maksimal 10MB.';
                }
            } else {
                $upload_error = 'Format file tidak didukung.';
            }
        } else {
            $upload_error = 'Error saat mengupload file.';
        }
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = 'Pesan Baru dari Website - ' . get_bloginfo('name');
    $body = "Pesan baru dari website:\n\n";
    $body .= "Nama: $full_name\n";
    $body .= "Telepon: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Layanan: $service\n";
    $body .= "Pesan: $message\n\n";
    
    if ($uploaded_file) {
        $body .= "File Desain: $uploaded_file\n\n";
    } elseif ($upload_error) {
        $body .= "Error Upload File: $upload_error\n\n";
    }
    
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

// Force regenerate image sizes when theme is activated
function barokah_printing_regenerate_thumbnails() {
    // Trigger thumbnail regeneration for existing images
    if (function_exists('wp_update_attachment_metadata')) {
        $images = get_posts(array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'numberposts' => -1,
        ));
        
        foreach ($images as $image) {
            $metadata = wp_generate_attachment_metadata($image->ID, get_attached_file($image->ID));
            wp_update_attachment_metadata($image->ID, $metadata);
        }
    }
}

// Enhanced featured image support
function barokah_printing_enhanced_image_support() {
    // Ensure post thumbnails are supported
    if (!current_theme_supports('post-thumbnails')) {
        add_theme_support('post-thumbnails');
    }
    
    // Add additional image sizes if not already added
    if (!has_image_size('portfolio-thumbnail')) {
        add_image_size('portfolio-thumbnail', 800, 600, true);
    }
    
    // Add larger portfolio image size
    add_image_size('portfolio-large', 1200, 800, true);
    
    // Add square thumbnail for grid
    add_image_size('portfolio-square', 600, 600, true);
}
add_action('init', 'barokah_printing_enhanced_image_support');

// Fix for featured image not showing in admin
function barokah_printing_add_featured_image_support() {
    add_post_type_support('portfolio', 'thumbnail');
    add_post_type_support('post', 'thumbnail');
}
add_action('init', 'barokah_printing_add_featured_image_support');

// COMPLETE PORTFOLIO AND UPLOAD SYSTEM FIX

// Register Portfolio Post Type dengan proper setup
function register_complete_portfolio_system() {
    // Portfolio Post Type
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'add_new' => 'Tambah Portfolio',
            'add_new_item' => 'Tambah Portfolio Baru',
            'edit_item' => 'Edit Portfolio',
            'new_item' => 'Portfolio Baru',
            'view_item' => 'Lihat Portfolio',
            'search_items' => 'Cari Portfolio',
            'not_found' => 'Portfolio tidak ditemukan',
            'not_found_in_trash' => 'Portfolio tidak ditemukan di trash'
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-portfolio'
    ));

    // Portfolio Category Taxonomy
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name' => 'Kategori Portfolio',
            'singular_name' => 'Kategori Portfolio',
            'search_items' => 'Cari Kategori',
            'all_items' => 'Semua Kategori',
            'parent_item' => 'Parent Kategori',
            'parent_item_colon' => 'Parent Kategori:',
            'edit_item' => 'Edit Kategori',
            'update_item' => 'Update Kategori',
            'add_new_item' => 'Tambah Kategori Baru',
            'new_item_name' => 'Nama Kategori Baru',
            'menu_name' => 'Kategori Portfolio'
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'portfolio-category')
    ));
    
    // Create default categories
    $default_categories = array(
        'Banner' => 'Banner dan spanduk percetakan',
        'Brosur' => 'Brosur dan flyer',
        'Packaging' => 'Kemasan dan packaging',
        'Kartu Nama' => 'Kartu nama dan kartu bisnis',
        'Stiker' => 'Stiker dan label'
    );
    
    foreach ($default_categories as $cat_name => $cat_desc) {
        if (!term_exists($cat_name, 'portfolio_category')) {
            wp_insert_term($cat_name, 'portfolio_category', array(
                'description' => $cat_desc,
                'slug' => sanitize_title($cat_name)
            ));
        }
    }
}
add_action('init', 'register_complete_portfolio_system');

// Enhanced meta box for portfolio
function enhanced_portfolio_meta_boxes() {
    add_meta_box(
        'portfolio_enhanced_images',
        'Portfolio Images & External URL',
        'enhanced_portfolio_images_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'enhanced_portfolio_meta_boxes');

function enhanced_portfolio_images_callback($post) {
    wp_nonce_field('portfolio_enhanced_meta', 'portfolio_enhanced_nonce');
    $external_url = get_post_meta($post->ID, 'external_image_url', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="external_image_url">🔗 External Image URL:</label></th>';
    echo '<td>';
    echo '<input type="url" id="external_image_url" name="external_image_url" value="' . esc_attr($external_url) . '" style="width: 100%;" placeholder="https://example.com/image.jpg" />';
    echo '<p class="description"><strong>� SOLUSI UPLOAD ERROR:</strong><br>';
    echo '<span style="color: red;">Jika Featured Image tidak bisa diupload (error responsive image)</span><br>';
    echo '<strong>➡️ Gunakan External Image URL ini sebagai alternatif</strong><br>';
    echo '📋 Copy URL gambar dari Google Images, Unsplash, atau hosting lain<br>';
    echo '🖼️ Contoh: https://via.placeholder.com/1200x800 atau https://picsum.photos/1200/800</p>';
    echo '<div style="background: #e7f3ff; padding: 10px; margin: 10px 0; border-left: 4px solid #0073aa;">';
    echo '<strong>🚀 Quick Images:</strong><br>';
    echo '<button type="button" onclick="document.getElementById(\'external_image_url\').value=\'https://via.placeholder.com/1200x800/3B82F6/FFFFFF?text=Portfolio+Image\'" style="margin: 2px; padding: 5px 10px;">Placeholder Blue</button>';
    echo '<button type="button" onclick="document.getElementById(\'external_image_url\').value=\'https://picsum.photos/1200/800\'" style="margin: 2px; padding: 5px 10px;">Random Image</button>';
    echo '<button type="button" onclick="document.getElementById(\'external_image_url\').value=\'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=1200&h=800&fit=crop\'" style="margin: 2px; padding: 5px 10px;">Design Sample</button>';
    echo '</div>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
}

function save_enhanced_portfolio_meta($post_id) {
    if (!isset($_POST['portfolio_enhanced_nonce']) || !wp_verify_nonce($_POST['portfolio_enhanced_nonce'], 'portfolio_enhanced_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    
    if (isset($_POST['external_image_url'])) {
        update_post_meta($post_id, 'external_image_url', esc_url_raw($_POST['external_image_url']));
    }
}
add_action('save_post', 'save_enhanced_portfolio_meta');

// Force thumbnail support
add_post_type_support('portfolio', 'thumbnail');

// ========================================
// CONTACT FORM SYSTEM
// ========================================

// Debug helper function
function barokah_debug($message) {
    // Write to WordPress debug.log if available
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('BAROKAH DEBUG: ' . $message);
    }
    
    // Also store in WordPress option for easy checking
    $debug_logs = get_option('barokah_debug_logs', array());
    $debug_logs[] = array(
        'time' => current_time('mysql'),
        'message' => $message
    );
    
    // Keep only last 10 entries
    $debug_logs = array_slice($debug_logs, -10);
    update_option('barokah_debug_logs', $debug_logs);
}

// Create Contact Messages Table
function create_contact_messages_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'contact_messages';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) NOT NULL,
        service varchar(100) DEFAULT '',
        message text NOT NULL,
        status varchar(20) DEFAULT 'unread',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
    // Add version option
    add_option('contact_messages_db_version', '1.0');
}

// Create table on theme activation
add_action('after_switch_theme', 'create_contact_messages_table');

// Force create table function (can be called manually)
add_action('wp_ajax_create_contact_table', 'create_contact_messages_table');
add_action('wp_ajax_nopriv_create_contact_table', 'create_contact_messages_table');

// Add admin menu for contact messages
function add_contact_messages_admin_menu() {
    add_menu_page(
        'Pesan Kontak',
        'Pesan Kontak',
        'manage_options',
        'contact-messages',
        'display_contact_messages_page',
        'dashicons-email-alt',
        25
    );
}
add_action('admin_menu', 'add_contact_messages_admin_menu');

// AJAX Handler for Contact Form
function handle_contact_form_ajax() {
    // Debug logging - force create debug log
    $debug_msg = 'BAROKAH DEBUG: AJAX handler called at ' . date('Y-m-d H:i:s') . ' with data: ' . print_r($_POST, true);
    error_log($debug_msg);
    file_put_contents(WP_CONTENT_DIR . '/debug.log', '[' . date('d-M-Y H:i:s') . ' UTC] ' . $debug_msg . "\n", FILE_APPEND);
    
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
        error_log('BAROKAH DEBUG: Nonce verification failed');
        wp_die(json_encode(array(
            'success' => false,
            'message' => 'Security check failed!'
        )));
    }
    
    error_log('BAROKAH DEBUG: Nonce verification passed');
    
    // Sanitize input data
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    error_log('BAROKAH DEBUG: Sanitized data - Name: ' . $name . ', Phone: ' . $phone . ', Email: ' . $email);
    
    // Validate required fields
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        error_log('BAROKAH DEBUG: Validation failed - empty fields');
        wp_die(json_encode(array(
            'success' => false,
            'message' => 'Mohon lengkapi semua field yang wajib diisi!'
        )));
    }
    
    // Validate email
    if (!is_email($email)) {
        error_log('BAROKAH DEBUG: Invalid email format');
        wp_die(json_encode(array(
            'success' => false,
            'message' => 'Format email tidak valid!'
        )));
    }
    
    error_log('BAROKAH DEBUG: All validation passed');
    
    // Insert into database
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    // Check if table exists, create if not
    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        error_log('BAROKAH DEBUG: Creating contact messages table');
        create_contact_messages_table();
    }
    
    error_log('BAROKAH DEBUG: Inserting into database table: ' . $table_name);
    
    $result = $wpdb->insert(
        $table_name,
        array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'message' => $message,
            'status' => 'unread',
            'created_at' => current_time('mysql')
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result !== false) {
        $contact_id = $wpdb->insert_id;
        error_log('BAROKAH DEBUG: Database insert successful. Contact ID: ' . $contact_id);
        
        // Send email notification
        send_contact_email_notification($name, $phone, $email, $service, $message);
        
        // Send WhatsApp notification
        send_whatsapp_notification($name, $phone, $email, $service, $message);
        
        error_log('BAROKAH DEBUG: Notifications sent, returning success response');
        
        wp_die(json_encode(array(
            'success' => true,
            'message' => '✅ Pesan berhasil dikirim! Kami akan segera menghubungi Anda.',
            'contact_id' => $contact_id
        )));
    } else {
        error_log('BAROKAH DEBUG: Database insert failed. Error: ' . $wpdb->last_error);
        wp_die(json_encode(array(
            'success' => false,
            'message' => '❌ Terjadi kesalahan saat menyimpan pesan. Silakan coba lagi.'
        )));
    }
}

// Register AJAX handlers
add_action('wp_ajax_submit_contact_form', 'handle_contact_form_ajax');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_ajax');

// Add simple test AJAX handler
function test_ajax_handler() {
    file_put_contents(WP_CONTENT_DIR . '/debug.log', '[' . date('d-M-Y H:i:s') . ' UTC] TEST AJAX: Handler called successfully!' . "\n", FILE_APPEND);
    wp_die(json_encode(array('success' => true, 'message' => 'Test AJAX works!')));
}
add_action('wp_ajax_test_ajax', 'test_ajax_handler');
add_action('wp_ajax_nopriv_test_ajax', 'test_ajax_handler');

// Send Email Notification
function send_contact_email_notification($name, $phone, $email, $service, $message) {
    $to = 'aditcarlytos61199@gmail.com';
    $subject = '[BAROKAH IBU] Pesan Baru dari Website - ' . $name;
    
    $email_message = "
    <html>
    <head>
        <title>Pesan Baru dari Website Barokah Ibu</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: linear-gradient(135deg, #2563eb, #7c3aed); color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f8f9fa; }
            .info-box { background: white; border-left: 4px solid #2563eb; padding: 15px; margin: 10px 0; }
            .message-box { background: white; border: 1px solid #dee2e6; padding: 15px; border-radius: 5px; margin: 15px 0; }
            .footer { background: #6c757d; color: white; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h1>🎯 Pesan Baru dari Website!</h1>
            <p>Ada customer yang mengirim pesan melalui website Barokah Ibu</p>
        </div>
        
        <div class='content'>
            <div class='info-box'>
                <h3>📋 Detail Customer:</h3>
                <p><strong>Nama:</strong> {$name}</p>
                <p><strong>Telepon:</strong> <a href='tel:{$phone}'>{$phone}</a></p>
                <p><strong>Email:</strong> <a href='mailto:{$email}'>{$email}</a></p>
                <p><strong>Layanan:</strong> " . (!empty($service) ? $service : 'Tidak dipilih') . "</p>
            </div>
            
            <div class='message-box'>
                <h3>💬 Pesan Customer:</h3>
                <p>{$message}</p>
            </div>
            
            <div style='text-align: center; margin: 20px 0;'>
                <a href='https://wa.me/{$phone}' style='background: #25D366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;'>
                    💬 Balas via WhatsApp
                </a>
                <a href='mailto:{$email}' style='background: #0066cc; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-left: 10px;'>
                    📧 Balas via Email
                </a>
            </div>
        </div>
        
        <div class='footer'>
            <p>Dikirim pada: " . date('d F Y, H:i:s') . " WIB | Website: barokahibu.com</p>
        </div>
    </body>
    </html>
    ";
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Website Barokah Ibu <noreply@barokahibu.com>',
        'Reply-To: ' . $email
    );
    
    wp_mail($to, $subject, $email_message, $headers);
}

// Send WhatsApp Notification (using WhatsApp API or webhook)
function send_whatsapp_notification($name, $phone, $email, $service, $message) {
    $whatsapp_number = '6285215269015';
    
    $wa_message = "🎯 *PESAN BARU WEBSITE BAROKAH IBU*\n\n";
    $wa_message .= "📋 *Detail Customer:*\n";
    $wa_message .= "👤 Nama: {$name}\n";
    $wa_message .= "📞 Telepon: {$phone}\n";
    $wa_message .= "📧 Email: {$email}\n";
    $wa_message .= "🛍️ Layanan: " . (!empty($service) ? $service : 'Tidak dipilih') . "\n\n";
    $wa_message .= "💬 *Pesan:*\n{$message}\n\n";
    $wa_message .= "⏰ Waktu: " . date('d F Y, H:i:s') . " WIB\n\n";
    $wa_message .= "Segera hubungi customer ya! 👍";
    
    // Method 1: Direct WhatsApp Web Link (Simple approach)
    // This will open WhatsApp web with pre-filled message
    $wa_link = "https://wa.me/{$whatsapp_number}?text=" . urlencode($wa_message);
    
    // Optional: Use cURL to send to WhatsApp API service (if you have one)
    // You can integrate with services like:
    // - WhatsApp Business API
    // - Twilio WhatsApp API  
    // - Fonnte, Wablas, or similar services
    
    // For now, we'll store the notification in WordPress option for manual checking
    $notifications = get_option('pending_whatsapp_notifications', array());
    $notifications[] = array(
        'message' => $wa_message,
        'link' => $wa_link,
        'timestamp' => current_time('mysql'),
        'customer' => $name
    );
    update_option('pending_whatsapp_notifications', $notifications);
    
    // Optional: Auto-redirect admin to WhatsApp (uncomment if needed)
    // if (current_user_can('manage_options')) {
    //     add_action('wp_footer', function() use ($wa_link) {
    //         echo "<script>setTimeout(() => window.open('{$wa_link}', '_blank'), 2000);</script>";
    //     });
    // }
}

// Add admin notice for WhatsApp notifications
function show_whatsapp_notifications_admin_notice() {
    if (!current_user_can('manage_options')) return;
    
    $notifications = get_option('pending_whatsapp_notifications', array());
    if (!empty($notifications)) {
        $count = count($notifications);
        echo "<div class='notice notice-info is-dismissible'>";
        echo "<p><strong>📱 WhatsApp Notifications ({$count}):</strong> ";
        echo "<a href='#' onclick='showWANotifications()' class='button'>Lihat Pesan</a> ";
        echo "<a href='#' onclick='clearWANotifications()' class='button'>Hapus Semua</a></p>";
        echo "</div>";
        
        echo "<script>
        function showWANotifications() {
            let notifications = " . json_encode($notifications) . ";
            let html = '<div style=\"max-height: 400px; overflow-y: auto;\">';
            notifications.forEach((notif, index) => {
                html += '<div style=\"border: 1px solid #ddd; margin: 10px 0; padding: 10px;\">';
                html += '<p><strong>Customer: ' + notif.customer + '</strong></p>';
                html += '<p style=\"font-size: 12px; color: #666;\">' + notif.timestamp + '</p>';
                html += '<textarea readonly style=\"width: 100%; height: 100px;\">' + notif.message + '</textarea>';
                html += '<p><a href=\"' + notif.link + '\" target=\"_blank\" class=\"button button-primary\">Buka WhatsApp</a></p>';
                html += '</div>';
            });
            html += '</div>';
            
            let popup = window.open('', 'WANotifications', 'width=600,height=500,scrollbars=yes');
            popup.document.write('<html><head><title>WhatsApp Notifications</title></head><body>' + html + '</body></html>');
        }
        
        function clearWANotifications() {
            if (confirm('Hapus semua notifikasi WhatsApp?')) {
                fetch('" . admin_url('admin-ajax.php') . "', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    body: 'action=clear_wa_notifications&nonce=" . wp_create_nonce('clear_wa_nonce') . "'
                }).then(() => location.reload());
            }
        }
        </script>";
    }
}
add_action('admin_notices', 'show_whatsapp_notifications_admin_notice');

// AJAX handler to clear WhatsApp notifications
function clear_wa_notifications_ajax() {
    if (wp_verify_nonce($_POST['nonce'], 'clear_wa_nonce') && current_user_can('manage_options')) {
        update_option('pending_whatsapp_notifications', array());
        wp_die('success');
    }
    wp_die('error');
}
add_action('wp_ajax_clear_wa_notifications', 'clear_wa_notifications_ajax');

// Display admin page for contact messages
function display_contact_messages_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    // Handle status update
    if (isset($_GET['action']) && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($_GET['action'] == 'mark_read') {
            $wpdb->update($table_name, array('status' => 'read'), array('id' => $id));
            echo '<div class="notice notice-success"><p>Pesan ditandai sudah dibaca.</p></div>';
        } elseif ($_GET['action'] == 'delete') {
            $wpdb->delete($table_name, array('id' => $id));
            echo '<div class="notice notice-success"><p>Pesan berhasil dihapus.</p></div>';
        }
    }
    
    // Get all messages
    $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    
    echo '<div class="wrap">';
    echo '<h1>Pesan Kontak</h1>';
    
    if (empty($messages)) {
        echo '<p>Belum ada pesan masuk.</p>';
    } else {
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nama</th>';
        echo '<th>Email</th>';
        echo '<th>Telepon</th>';
        echo '<th>Layanan</th>';
        echo '<th>Pesan</th>';
        echo '<th>Status</th>';
        echo '<th>Tanggal</th>';
        echo '<th>Aksi</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        foreach ($messages as $msg) {
            $status_badge = $msg->status == 'read' ? '<span style="color: green;">✅ Dibaca</span>' : '<span style="color: orange; font-weight: bold;">🔔 Baru</span>';
            
            echo '<tr>';
            echo '<td><strong>' . esc_html($msg->name) . '</strong></td>';
            echo '<td><a href="mailto:' . esc_attr($msg->email) . '">' . esc_html($msg->email) . '</a></td>';
            echo '<td><a href="tel:' . esc_attr($msg->phone) . '">' . esc_html($msg->phone) . '</a></td>';
            echo '<td>' . esc_html($msg->service ?: 'Tidak dipilih') . '</td>';
            echo '<td>' . esc_html(wp_trim_words($msg->message, 10)) . '</td>';
            echo '<td>' . $status_badge . '</td>';
            echo '<td>' . esc_html($msg->created_at) . '</td>';
            echo '<td>';
            
            if ($msg->status != 'read') {
                echo '<a href="?page=contact-messages&action=mark_read&id=' . $msg->id . '" class="button button-small">Tandai Dibaca</a> ';
            }
            
            $wa_message = "Halo {$msg->name}, terima kasih sudah menghubungi Barokah Ibu Printing! 😊\n\nKami sudah menerima pesan Anda tentang " . ($msg->service ?: 'layanan percetakan') . ".\n\nTim kami akan segera membantu Anda. Ada yang bisa kami bantu lebih lanjut?";
            $clean_phone = str_replace(['+', '-', ' ', '(', ')'], '', $msg->phone);
            
            echo '<a href="https://wa.me/' . esc_attr($clean_phone) . '?text=' . urlencode($wa_message) . '" target="_blank" class="button button-primary button-small" style="background: #25D366; border-color: #25D366;">💬 WhatsApp</a> ';
            echo '<a href="?page=contact-messages&action=delete&id=' . $msg->id . '" class="button button-small" onclick="return confirm(\'Yakin hapus pesan ini?\')">Hapus</a>';
            echo '</td>';
            echo '</tr>';
            
            // Show full message if clicked
            echo '<tr class="message-detail" style="display: none;" id="detail-' . $msg->id . '">';
            echo '<td colspan="8">';
            echo '<div style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 15px; margin: 10px 0;">';
            echo '<h4>Pesan Lengkap:</h4>';
            echo '<p>' . nl2br(esc_html($msg->message)) . '</p>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        
        // Add JavaScript for expandable rows
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("tbody tr:not(.message-detail)").forEach(function(row) {
                row.style.cursor = "pointer";
                row.addEventListener("click", function(e) {
                    if (e.target.tagName === "A" || e.target.tagName === "BUTTON") return;
                    
                    const id = this.querySelector("a[href*=mark_read]")?.href.match(/id=(\d+)/)?.[1];
                    if (id) {
                        const detailRow = document.getElementById("detail-" + id);
                        if (detailRow) {
                            detailRow.style.display = detailRow.style.display === "none" ? "table-row" : "none";
                        }
                    }
                });
            });
        });
        </script>';
        
        echo '<style>
        tbody tr:not(.message-detail):hover {
            background-color: #f0f8ff;
        }
        .message-detail td {
            background-color: #f9f9f9 !important;
        }
        </style>';
    }
    
    echo '</div>';
}

// Add debug page to admin menu
function add_debug_menu() {
    if (current_user_can('manage_options')) {
        add_submenu_page(
            'edit.php?post_type=contact_messages',
            'Debug Logs',
            'Debug Logs',
            'manage_options',
            'barokah-debug',
            'show_debug_page'
        );
    }
}
add_action('admin_menu', 'add_debug_menu');

// Show debug page
function show_debug_page() {
    if (!current_user_can('manage_options')) {
        return;
    }
    
    if (isset($_POST['clear_debug'])) {
        delete_option('barokah_debug_logs');
        echo '<div class="notice notice-success"><p>Debug logs cleared!</p></div>';
    }
    
    $debug_logs = get_option('barokah_debug_logs', array());
    
    echo '<div class="wrap">';
    echo '<h1>Barokah Ibu - Debug Logs</h1>';
    
    if (empty($debug_logs)) {
        echo '<p>No debug logs yet. Try submitting a contact form.</p>';
    } else {
        echo '<form method="post"><button type="submit" name="clear_debug" class="button">Clear Logs</button></form><br>';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr><th>Time</th><th>Message</th></tr></thead>';
        echo '<tbody>';
        
        foreach (array_reverse($debug_logs) as $log) {
            echo '<tr>';
            echo '<td>' . esc_html($log['time']) . '</td>';
            echo '<td><pre>' . esc_html($log['message']) . '</pre></td>';
            echo '</tr>';
        }
        
        echo '</tbody></table>';
    }
    echo '</div>';
}

// Add contact messages to admin menu counter
function add_contact_messages_bubble() {
    global $menu;
    
    $unread_count = get_posts(array(
        'post_type' => 'contact_messages',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'is_read',
                'value' => '0',
                'compare' => '='
            )
        ),
        'fields' => 'ids'
    ));
    
    $count = count($unread_count);
    if ($count > 0) {
        foreach ($menu as $key => $value) {
            if ($menu[$key][2] == 'edit.php?post_type=contact_messages') {
                $menu[$key][0] .= ' <span class="awaiting-mod">' . $count . '</span>';
                break;
            }
        }
    }
}
add_action('admin_menu', 'add_contact_messages_bubble');

// Mark message as read when viewed
function mark_contact_message_as_read($post_id) {
    if (get_post_type($post_id) == 'contact_messages' && is_admin()) {
        update_post_meta($post_id, 'is_read', 1);
    }
}
add_action('edit_post', 'mark_contact_message_as_read');

// Customize contact messages admin columns
function contact_messages_admin_columns($columns) {
    $columns = array(
        'cb' => $columns['cb'],
        'title' => 'Pesan',
        'sender_info' => 'Info Pengirim',
        'service' => 'Layanan',
        'status' => 'Status',
        'date' => 'Tanggal'
    );
    return $columns;
}
add_filter('manage_contact_messages_posts_columns', 'contact_messages_admin_columns');

// Populate custom columns
function contact_messages_admin_column_content($column, $post_id) {
    switch ($column) {
        case 'sender_info':
            $name = get_post_meta($post_id, 'sender_name', true);
            $phone = get_post_meta($post_id, 'sender_phone', true);
            $email = get_post_meta($post_id, 'sender_email', true);
            
            echo "<strong>{$name}</strong><br>";
            echo "📞 <a href='tel:{$phone}'>{$phone}</a><br>";
            echo "📧 <a href='mailto:{$email}'>{$email}</a>";
            break;
            
        case 'service':
            $service = get_post_meta($post_id, 'sender_service', true);
            echo !empty($service) ? esc_html($service) : '<em>Tidak dipilih</em>';
            break;
            
        case 'status':
            $is_read = get_post_meta($post_id, 'is_read', true);
            if ($is_read == '1') {
                echo '<span style="color: green;">✅ Sudah dibaca</span>';
            } else {
                echo '<span style="color: orange; font-weight: bold;">🔔 Belum dibaca</span>';
            }
            break;
    }
}
add_action('manage_contact_messages_posts_custom_column', 'contact_messages_admin_column_content', 10, 2);

// Make columns sortable
function contact_messages_sortable_columns($columns) {
    $columns['sender_info'] = 'sender_name';
    $columns['service'] = 'sender_service';
    $columns['status'] = 'is_read';
    return $columns;
}
add_filter('manage_edit-contact_messages_sortable_columns', 'contact_messages_sortable_columns');

// Add meta boxes to contact messages
function add_contact_message_meta_boxes() {
    add_meta_box(
        'contact_message_details',
        'Detail Pesan Kontak',
        'contact_message_details_callback',
        'contact_messages',
        'normal',
        'high'
    );
    
    add_meta_box(
        'contact_message_actions',
        'Tindakan Cepat',
        'contact_message_actions_callback',
        'contact_messages',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_contact_message_meta_boxes');

// Meta box callback for message details
function contact_message_details_callback($post) {
    $name = get_post_meta($post->ID, 'sender_name', true);
    $phone = get_post_meta($post->ID, 'sender_phone', true);
    $email = get_post_meta($post->ID, 'sender_email', true);
    $service = get_post_meta($post->ID, 'sender_service', true);
    $message = get_post_meta($post->ID, 'sender_message', true);
    $submission_time = get_post_meta($post->ID, 'submission_time', true);
    
    echo '<div style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 20px;">';
    echo '<h3 style="margin-top: 0; color: #2563eb;">📋 Informasi Pengirim</h3>';
    echo '<table class="form-table">';
    echo '<tr><th>Nama:</th><td><strong>' . esc_html($name) . '</strong></td></tr>';
    echo '<tr><th>Telepon:</th><td><a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></td></tr>';
    echo '<tr><th>Email:</th><td><a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></td></tr>';
    echo '<tr><th>Layanan:</th><td>' . (!empty($service) ? esc_html($service) : '<em>Tidak dipilih</em>') . '</td></tr>';
    echo '<tr><th>Waktu:</th><td>' . esc_html($submission_time) . ' WIB</td></tr>';
    echo '</table>';
    
    echo '<h3 style="color: #2563eb;">💬 Pesan Customer</h3>';
    echo '<div style="background: white; border: 1px solid #ccc; border-radius: 4px; padding: 15px; min-height: 100px;">';
    echo '<p>' . nl2br(esc_html($message)) . '</p>';
    echo '</div>';
    echo '</div>';
}

// Meta box callback for quick actions
function contact_message_actions_callback($post) {
    $phone = get_post_meta($post->ID, 'sender_phone', true);
    $email = get_post_meta($post->ID, 'sender_email', true);
    $name = get_post_meta($post->ID, 'sender_name', true);
    $service = get_post_meta($post->ID, 'sender_service', true);
    
    $wa_message = "Halo {$name}, terima kasih sudah menghubungi Barokah Ibu Printing! 😊\n\nKami sudah menerima pesan Anda tentang " . (!empty($service) ? $service : 'layanan percetakan') . ".\n\nTim kami akan segera membantu Anda. Ada yang bisa kami bantu lebih lanjut?";
    
    echo '<div style="text-align: center;">';
    echo '<div style="margin-bottom: 15px;">';
    echo '<a href="https://wa.me/' . esc_attr(str_replace(['+', '-', ' '], '', $phone)) . '?text=' . urlencode($wa_message) . '" target="_blank" class="button button-primary" style="width: 100%; margin-bottom: 10px; background: #25D366; border-color: #25D366;">';
    echo '💬 Balas via WhatsApp</a>';
    echo '</div>';
    
    echo '<div style="margin-bottom: 15px;">';
    echo '<a href="mailto:' . esc_attr($email) . '?subject=Re: Layanan Percetakan - Barokah Ibu&body=Halo ' . esc_attr($name) . ',%0D%0A%0D%0ATerima kasih sudah menghubungi Barokah Ibu Printing!%0D%0A%0D%0ASalam,%0D%0ATeam Barokah Ibu" target="_blank" class="button button-secondary" style="width: 100%;">';
    echo '📧 Balas via Email</a>';
    echo '</div>';
    
    echo '<div style="margin-bottom: 15px;">';
    echo '<a href="tel:' . esc_attr($phone) . '" class="button button-secondary" style="width: 100%;">';
    echo '📞 Telepon Sekarang</a>';
    echo '</div>';
    
    $is_read = get_post_meta($post->ID, 'is_read', true);
    if ($is_read != '1') {
        echo '<div style="margin-top: 20px; padding: 10px; background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 4px;">';
        echo '<small>💡 <strong>Tips:</strong> Pesan ini akan otomatis ditandai sebagai "sudah dibaca" setelah Anda menyimpan/mengupdate post ini.</small>';
        echo '</div>';
    }
    echo '</div>';
}

// Opsi: Sembunyikan admin bar untuk non-admin (optional)
// Uncomment baris berikut jika ingin menyembunyikan admin bar untuk semua user kecuali admin
/*
function hide_admin_bar_for_non_admin() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_non_admin');
*/
?>