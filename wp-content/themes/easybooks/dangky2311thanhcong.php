<?php
/*
 Template Name: Dang ky Event thanh cong
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Đăng ký thành công</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    ul li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    #event_info {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
    }

    .mb40 {
        margin-bottom: 40px;
    }

    .event-info-left {
        border-radius: 16px;
        background: #FFF;
        padding: 32px;
    }

    .event-info-left .event-name {
        color: var(--Secondary-1, #172D58);

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .event-info-left .event-name span {
        background: var(--Gradient-2, linear-gradient(90deg, #C00B02 0%, #EEA27A 100%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .author-name {
        color: #172D58;

        /* Text/16/Medium */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        /* 24px */
    }

    .author-name span {
        color: var(--Secondary-1, #172D58);

        /* Text/16/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
    }

    .host {
        color: var(--Red-2, #E11B1C);
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: italic;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
        margin-top: 16px;
    }

    .author-name {
        ul {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
    }

    .event-info-right {
        border-radius: 16px;
        background: #FFF;
        padding: 32px
    }

    .event-info-right .time-left {
        border-radius: 8px;
        background: var(--Red-5, #FCE8E8);
        padding: 10px 30px;
        margin-bottom: 24px;
    }

    .event-info-right .time-left .time-left-text {
        color: var(--Secondary-1, #172D58);
        text-align: center;

        /* Text/14/Bold */
        font-family: "Nunito Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 21px */
    }

    .event-info-right .time-left .count-down {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 24px;
    }

    .number-time,
    .seperate {
        color: var(--Red-2, #E11B1C);

        /* Text/20/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
    }

    .number-text {
        color: var(--Gray-3, #6E7A8E);

        /* Text/10/Medium */
        font-family: "Nunito Sans";
        font-size: 10px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .count-down .row2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .event-info-right-row {
        display: flex;
        align-items: center;
        gap: 16px;
        color: var(--Secondary-1, #172D58);

        /* Text/16/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 24px */
    }

    .event-btn {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: 1px solid var(--Blue-2, #0E4B9F);
        background: var(--Blue-2, #0E4B9F);
        color: #FFF;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }

    #event_useful_content {
        padding: 80px 0 40px 0;
    }

    .event-title {
        color: var(--Blue-1, #0A3571);
        text-align: center;

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .useful-box {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .useful-box .content {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
        width: 90%;
    }

    .useful-text {
        color: var(--Gray-2, #263856);
        text-align: center;

        /* Text/20/Bold */
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    #event_speaker {
        background-image: url(https://easybooks.vn/wp-content/uploads/2024/02/back-blue.png);
        background-size: cover;
        padding: 80px;
    }

    .event_speaker-title {
        color: #FFF;
        text-align: center;

        /* Heading/32/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .speaker-name {
        padding: 6px 50px;
        flex-shrink: 0;
        border-radius: 26px;
        background: #FFF;
        color: var(--Red-2, #E11B1C);

        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-align: center;
    }

    .speaker-position {
        color: #FFF;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }

    .speaker-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 14px;
    }

    #event_timeline {
        padding: 80px;
    }

    .timeline-row {
        padding: 20px 40px;
        flex-shrink: 0;
        display: flex;
        gap: 40px;
        align-items: center;
    }

    .timeline-row .stt {
        text-align: center;

        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;

        background: var(--Geadient-5, linear-gradient(257deg, #FEC437 -0.07%, #EF4941 41.12%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .timeline-row .content {
        color: var(--Gray-1, #151F2F);

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    #event_form {
        padding: 80px 0;

    }

    #event_form form {
        padding: 32px;
        border-radius: 16px;
        background: var(--Blue-5, #E7EDF5);
    }

    #event_form form .form-row {
        margin-bottom: 32px;
    }

    #event_form form .form-label {
        color: var(--gray-700, #374151);

        /* Text/16/Semi bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 150%;
        /* 24px */
    }

    #event_form form .form-label span {
        color: var(--Red-2, #E11B1C);

    }

    #event_form form input,
    #event_form form select,
    #event_form form textarea {
        border-radius: 6px;
        border: 1px solid var(--gray-300, #D1D5DB);
        background: var(--white, #FFF);

        /* shadow/sm */
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
        color: var(--gray-500, #6B7280);

        /* Text/16/Medium */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        /* 24px */
    }

    footer {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
        margin-top: 40px;
    }

    .footer-text {
        color: var(--Primary-2, #EA5626);
        font-family: "Nunito Sans";
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: 164%;
        /* 32.8px */
    }

    .footer-text span {
        color: var(--Secondary-1, #172D58);
    }

    .center-footer {
        display: flex;
        align-items: center;
    }

    #dat_cho {
        background-color: transparent !important;
        color: #fff !important;
        border: none !important;
        width: 100%;
    }

    .event-btn:hover {
        opacity: 0.8;
    }

    #event_register {
        padding: 80px 0;
        background: var(--Blue-5, #E7EDF5);
    }

    .step-row {
        display: flex;
        gap: 30px;
    }

    .step-row .step-number {
        width: 64px;
        height: 64px;
        flex-shrink: 0;
        background: var(--Blue-2, #0E4B9F);
        color: #FFF;
        text-align: center;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* Heading/24/Extra Bold */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .step-content {
        color: var(--Gray-1, #151F2F);

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: revert;
    }

    .step-content span {
        display: inline-flex;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: var(--Geadient-5, linear-gradient(257deg, #FEC437 -0.07%, #EF4941 41.12%));
        color: #FFF;
        text-align: center;
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
    }

    .register-left {
        display: flex;
        flex-direction: column;
        gap: 50px;
    }

    .qr-text {
        color: var(--Gray-1, #151F2F);
        text-align: center;

        /* Heading/24/Medium */
        font-family: "Nunito Sans";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    /* Responsive */

    /* Mobile and Tablet */
    @media (max-width: 1024px) {
        #event_timeline {
            padding: 40px 0;
        }

        #event_speaker {
            padding: 40px 0;
        }

        .useful-box {
            margin-bottom: 20px;
        }

        .useful-box>img {
            width: 100%;
        }

        #event_info {
            padding: 40px 0;
        }

        footer {
            padding: 40px 0;
        }

        #event_form {
            padding: 40px 0;
        }

        #event_useful_content {
            padding: 40px 0;
        }

        .event-title {
            font-size: 26px;
        }

        .event_speaker-title {
            font-size: 26px;
        }

        .step-row {
            flex-direction: column;
        }

        .step-number {
            display: none !important;
        }
    }

    /* Tablet */
    @media (min-width: 740px) and (max-width: 1023px) {}

    /* Mobile */
    @media (max-width:740px) {
        .event-info-left .event-name {
            font-size: 26px;
        }

    }
</style>

<body>
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
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }
</style>
<section id="register_successful">
    <img style="max-width: 100%" src="http://softdreams.vn/wp-content/uploads/2024/03/Asset-1@4x-1.png" alt="">
    <h1>Bạn đã đăng ký thông tin thành công qua landing page!</h1>
    <div class="back-btn">
        <!-- <a href="https://softdreams.vn/event">
            <button class="btn btn-outline-success btn-lg button">
                Xem hội thảo khác
            </button>
        </a> -->
        <a href="https://easybooks.vn/">
            <button class="btn btn-outline-primary btn-lg button">
                Quay về trang chủ
            </button>
        </a>
    </div>
</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</body>

</html>