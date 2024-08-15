<?php
add_action('wp_enqueue_scripts', function () {
    $themeUrl = get_template_directory_uri();

    // css files
    wp_enqueue_style('main-css', $themeUrl . '/assets/css/style.css');

    // js files
    wp_enqueue_script('main-js', $themeUrl . '/assets/js/main.js', array(), '1.0', true);
});
function create_button_shortcode($atts)
{
    // Thiết lập các thuộc tính mặc định cho button
    $atts = shortcode_atts(
        array(
            'text' => 'Click me', // Văn bản hiển thị trên button
            'url' => '#', // URL liên kết của button
            'class' => 'custom-button-class' // Lớp CSS tùy chỉnh cho button
        ),
        $atts,
        'button'
    );

    // Tạo HTML cho button
    $button_html = '<div class="d-flex justify-content-center" style="padding: 2rem"><a  target="_blank" href="' . esc_url($atts['url']) . '" class=""><button class="' . esc_attr($atts['class']) . '"><span style="color: #fff !important">' . esc_html($atts['text']) . '</span></button></a></div>';

    return $button_html;
}

// Đăng ký shortcode
add_shortcode('button', 'create_button_shortcode');



function my_form_shortcode()
{
    // Đường dẫn đến file forminpost.php trong thư mục theme của bạn
    $file_path = get_template_directory() . '/formInPosts.php';

    // Kiểm tra xem file có tồn tại không
    if (file_exists($file_path)) {
        // Sử dụng hàm ob_start() để lấy nội dung của file
        ob_start();
        include $file_path;
        return ob_get_clean();
    } else {
        return '<p>File form không tồn tại.</p>';
    }
}

// Đăng ký shortcode
add_shortcode('my_form', 'my_form_shortcode');

// Code tính lượt view cho bài viết
function setpostview($postID)
{
    $count_key = 'views';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID)
{
    $count_key = 'views';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

?>