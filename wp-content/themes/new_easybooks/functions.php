<?php

function create_button_shortcode($atts) {
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
    $button_html = '<div class="d-flex justify-content-center" style="padding: 2rem"><a target="_blank" href="' . esc_url($atts['url']) . '" class=""><button class="'. esc_attr($atts['class']) .'"><span>'. esc_html($atts['text']) .'</span></button></a></div>';

    return $button_html;
}

// Đăng ký shortcode
add_shortcode('button', 'create_button_shortcode');



// Code tính lượt view cho bài viết
function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

?>