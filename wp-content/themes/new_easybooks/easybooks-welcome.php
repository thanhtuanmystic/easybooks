<?php
/** Template Name: Easybooks Welcome **/
get_header();
?>

<style>
    #register_successful {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 100px 0;
        flex-direction: column;
        gap: 40px;
    }

    .back-btn {
        display: flex;
        gap: 20px;
    }

    .back-btn .button {
        padding: 20px;
        text-align: center;

        /* Text/16/Bold */
        font-size: 16px;
        font-style: normal;
        /* 24px */
    }
</style>
<section id="register_successful">
    <img style="max-width: 100%" src="http://softdreams.vn/wp-content/uploads/2024/03/Asset-1@4x-1.png" alt="">
    <h1>Chúc mừng bạn đã đăng ký thành công!</h1>
    <div class="back-btn">
        <a href="https://easybooks.vn/">
            <button class="btn btn-outline-primary btn-lg button">
                Quay về trang chủ
            </button>
        </a>
    </div>
</section>