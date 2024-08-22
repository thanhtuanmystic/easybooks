<style>
    #form_shortcode_register {
        margin: 2rem 0;
    }

    #form_shortcode_register .form-box {
        border-radius: 8px;
        background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
        padding: 2rem;
        width: 90%;
    }

    #form_shortcode_register .form-box .form-title {
        color: var(--white, var(--Backgrounds-Primary, #FFF));
        text-align: center;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        margin-bottom: 16px;
    }

    #form_shortcode_register .form-box .form-info {
        border-radius: 16px;
        background: var(--Backgrounds-Primary, #FFF);
        padding: 24px 16px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    #form_shortcode_register .form-box form .form-row input {
        border-radius: 6px;
        border: 1px solid var(--Gray-300, #E6E7EC);
        background: var(--Blue-200, #E6EDF8);
        padding: 1rem;
        font-size: 1.4rem;
    }

    #form_shortcode_register .form-box form .choose-promotion {
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 1.4rem;
    }

    .promotion-select {
        display: flex;
        align-items: center;
    }

    .promotion-select input[type="radio"] {
        display: none;
    }

    .promotion-select .label-select {
        position: relative;
        height: 25px;
        width: 25px;
        background-image: url("https://easybooks.vn/wp-content/uploads/2024/08/Component-249-3.png");
        background-size: cover;
        display: inline-block;
        margin-right: 10px;
    }

    .promotion-select input[type="radio"]:checked+.label-select {
        background-image: url("https://easybooks.vn/wp-content/uploads/2024/08/Component-249-2.png");
    }

    .form-button-shortcode {
        display: flex;
        width: 213px;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 6px;
        background: var(--Gradient-2, linear-gradient(269deg, #f37b20 0.55%, #ec3e2b 56.04%));
        box-shadow: 0px 4px 5.8px 0px rgba(237, 72, 41, 0.3);
        color: #fff;
        font-size: 18px;
        line-height: 24px;
        font-weight: 600;
    }

    .form-button-shortcode:hover {
        opacity: 0.8;
    }

    @keyframes pulse {
        from {
            opacity: 1;
            transform: scale(1);
        }

        to {
            opacity: 0.25;
            transform: scale(0.75);
        }
    }

    .spinner-box {
        display: none;
    }

    .pulse-container {
        width: 120px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .pulse-bubble {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #3ff9dc;
    }

    .pulse-bubble-1 {
        animation: pulse 0.4s ease 0s infinite alternate;
    }

    .pulse-bubble-2 {
        animation: pulse 0.4s ease 0.2s infinite alternate;
    }

    .pulse-bubble-3 {
        animation: pulse 0.4s ease 0.4s infinite alternate;
    }

    .form-thankyou {
        display: none;
        padding: 2rem;
        background: #f8e0b4;
    }


    @media screen and (max-width: 1024px) {
        #form_shortcode_register .form-box {
            width: 100%;
        }
    }
</style>
<section id="form_shortcode_register">
    <div class="form-box">
        <div class="form-title">
            ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI NGAY HÔM NAY!
        </div>
        <form id="form_validate_shortcode">
            <div class="form-info">
                <div class="form-row">
                    <input class="form-control" type="text" name="hoten" placeholder="Họ và tên*">
                </div>
                <div class="form-row">
                    <input class="form-control" type="text" name="phonenumber" placeholder="Số điện thoại*">
                </div>
                <div class="form-row">
                    <input class="form-control" type="text" name="taxcode" placeholder="Mã số thuế*">
                </div>
                <div class="form-row">
                    <input class="form-control" type="email" name="email" placeholder="Email*">
                </div>
                <input type="text" name="form_in_posts" value="form_in_posts" hidden>

                <div class="choose-promotion">
                    <div class="heading">Chọn gói ưu đãi:</div>
                    <label for="5phantram" class="promotion-select">
                        <input type="radio" id="5phantram" name="promotion" value="5">
                        <span class="label-select"></span>
                        <span>Giảm <strong>5%</strong> gói 2 năm phần mềm kế toán
                            EasyBooks</span><br>
                    </label>
                    <label for="15phantram" class="promotion-select">
                        <input type="radio" id="15phantram" name="promotion" value="15" checked="checked">
                        <span class="label-select"></span>
                        <span>Giảm <strong>15%</strong> gói 3 năm phần mềm kế toán
                            EasyBooks</span><br>
                    </label>
                    <label for="20phantram" class="promotion-select">
                        <input type="radio" id="20phantram" name="promotion" value="20">
                        <span class="label-select"></span>
                        <span>Giảm <strong>20%</strong> gói 5 năm phần mềm kế toán
                            EasyBooks</span>
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 24px">
                <button style="border: none" type="submit" class="form-button-shortcode">Đăng ký
                    ngay</button>
                <div class="spinner-box">
                    <div class="pulse-container">
                        <div class="pulse-bubble pulse-bubble-1"></div>
                        <div class="pulse-bubble pulse-bubble-2"></div>
                        <div class="pulse-bubble pulse-bubble-3"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="form-thankyou">
        Gửi thông tin thành công, Easybooks sẽ liên hệ sớm nhất đến với quý khách!
    </div>
</section>