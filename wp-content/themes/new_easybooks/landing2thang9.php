<?php /* Template Name: Landing Page: 2/9 */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <meta property="og:image" content="https://easybooks.vn/wp-content/uploads/2024/06/easybooksthumbnail.png" />
    <meta property="og:image:secure_url"
        content="https://easybooks.vn/wp-content/uploads/2024/06/easybooksthumbnail.png" />
    <link rel="Shortcut Icon" href="https://easybooks.vn/wp-content/uploads/2020/07/favicon-eb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title><?php the_title() ?></title>
    <style>
        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-LightItalic.svg#AvertaStdCY-LightItalic') format('svg');
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY Extrathin';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrathin.svg#AvertaStdCY-Extrathin') format('svg');
            font-weight: 100;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Light.svg#AvertaStdCY-Light') format('svg');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtraboldItalic.svg#AvertaStdCY-ExtraboldItalic') format('svg');
            font-weight: bold;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Extrabold.svg#AvertaStdCY-Extrabold') format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Black.svg#AvertaStdCY-Black') format('svg');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-SemiboldItalic.svg#AvertaStdCY-SemiboldItalic') format('svg');
            font-weight: 600;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Bold.svg#AvertaStdCY-Bold') format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Regular.svg#AvertaStdCY-Regular') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BlackItalic.svg#AvertaStdCY-BlackItalic') format('svg');
            font-weight: 900;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY Extrathin';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ExtrathinItalic.svg#AvertaStdCY-ExtrathinItalic') format('svg');
            font-weight: 100;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Thin.svg#AvertaStdCY-Thin') format('svg');
            font-weight: 100;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-Semibold.svg#AvertaStdCY-Semibold') format('svg');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-ThinItalic.svg#AvertaStdCY-ThinItalic') format('svg');
            font-weight: 100;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-BoldItalic.svg#AvertaStdCY-BoldItalic') format('svg');
            font-weight: bold;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Averta Std CY';
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.eot');
            src: url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.eot?#iefix') format('embedded-opentype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.woff2') format('woff2'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.woff') format('woff'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.ttf') format('truetype'),
                url('<?php bloginfo('template_directory'); ?>/assets/font/averta2/AvertaStdCY-RegularItalic.svg#AvertaStdCY-RegularItalic') format('svg');
            font-weight: normal;
            font-style: italic;
            font-display: swap;
        }
    </style>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Averta Std CY';
        }

        img {
            max-width: 100%;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: inherit;
            cursor: pointer;
        }

        .landing-title {
            color: var(--Primary-800, #ef5627);
            text-align: center;
            font-size: 32px;
            font-style: normal;
            line-height: 44px;
            margin-bottom: 50px;
            font-weight: 700;
        }

        .landing-title span {
            -webkit-text-fill-color: #0149B8;
        }

        .form-button {
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

        .form-button-animation {
            animation: glow 0.8s infinite;
            transition: 0.5s;
        }

        .form-button:hover {
            opacity: 0.8;
        }

        body {
            padding-top: 84px;
        }

        #header {
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99999;
            background: #fff;
            width: 100%;
        }

        .header-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-box ul {

            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }


        .header-box ul li {
            list-style: none;
            color: var(--Gray-800, #040F3E);
            font-size: 18px;
            line-height: 24px;
        }

        .header-box ul li:hover {
            color: var(--Primary-800, #EF5627);

        }

        .header-box ul li a {
            color: inherit;
        }

        .popup {
            background: none !important;
            padding: 0 !important;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            z-index: 3;
            display: none;
        }

        .popup .form-box {
            width: 100% !important;
            position: relative;
        }

        .popup .x-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ccc;
            font-weight: 500;
        }

        .popup .x-close:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        #promotion {
            padding: 50px 0;
        }

        ul {
            padding: 0;
            margin: 0;
        }

        ul li {
            list-style: none;
        }

        #promotion .promotion-left {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        #promotion .promotion-left li {
            display: flex;
            align-items: center;
            color: var(--Gray-800, #040F3E);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 28px;
            gap: 10px;
        }

        #price {
            padding-bottom: 50px;
        }

        #price .price-box {
            border-radius: 16px;
            border: 1px solid var(--Gradient, #F37B20);
            background: var(--Backgrounds-Primary, #FFF);
            padding: 36px 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            height: 100%;
        }

        #price .price-recommendation {
            background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
            border: none;
            position: relative;
        }

        #price .price-recommendation .img-recommendation {
            position: absolute;
            top: -3%;
            left: 50%;
            transform: translateX(-50%);
        }

        #price .price-recommendation .price-pros li {
            color: #fff;
        }

        #price .price-recommendation .form-button {
            background: #fff;
            color: #EC3E2B;
        }

        #price .price-box .price-pros {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        #price .price-box .price-pros li {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #form_register {
            padding: 100px 0;
            background: var(--Blue-200, #E6EDF8);
        }

        #form_register .form-content-left {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        #form_register .form-content-left .title {
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
            background: var(--Gradient, linear-gradient(180deg, #F37B20 0%, #EC3E2B 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #form_register .form-content-left .title span {
            font-size: 48px;
            font-weight: 800;
            line-height: 40px;
            /* 83.333% */
            background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #form_register .form-content-left .form-pros {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        #form_register .form-content-left .form-pros li {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #form_register .form-box {
            border-radius: 8px;
            background: var(--Blue, linear-gradient(180deg, #0172D8 0%, #0149B8 100%));
            padding: 24px;
            width: 90%;
        }

        #form_register .form-box .form-title {
            color: var(--white, var(--Backgrounds-Primary, #FFF));
            text-align: center;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
            margin-bottom: 16px;
        }

        #form_register .form-box .form-info {
            border-radius: 16px;
            background: var(--Backgrounds-Primary, #FFF);
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        #form_register .form-box form .form-row input {
            border-radius: 6px;
            border: 1px solid var(--Gray-300, #E6E7EC);
            background: var(--Blue-200, #E6EDF8);
        }

        #form_register .form-box form .choose-promotion {
            display: flex;
            flex-direction: column;
            gap: 10px;
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
            background-image: url('https://easybooks.vn/wp-content/uploads/2024/08/Component-249-3.png');
            background-size: cover;
            display: inline-block;
            margin-right: 10px;
        }

        /* When the radio button is checked, change the icon to another image */
        .promotion-select input[type="radio"]:checked+.label-select {
            background-image: url('https://easybooks.vn/wp-content/uploads/2024/08/Component-249-2.png');
        }

        @keyframes jump-shaking {
            0% {
                transform: translateX(0)
            }

            25% {
                transform: translateY(-9px)
            }

            35% {
                transform: translateY(-9px) rotate(17deg)
            }

            55% {
                transform: translateY(-9px) rotate(-17deg)
            }

            65% {
                transform: translateY(-9px) rotate(17deg)
            }

            75% {
                transform: translateY(-9px) rotate(-17deg)
            }

            100% {
                transform: translateY(0) rotate(0)
            }
        }

        .rise-shake {
            animation: jump-shaking 1.8s infinite;
        }

        .my-custom-class {
            border: none;
            border-radius: 5rem;
            transition: 0.3s;
            background-color: #fc6921f0;
            animation: glow 0.8s infinite;
            transition: 0.5s;
            padding: 20px 40px;
            font-size: 24px;
            -webkit-border-radius: 5rem;
            -moz-border-radius: 5rem;
            -ms-border-radius: 5rem;
            -o-border-radius: 5rem;
        }

        .my-custom-class span {
            display: block;
            width: 100%;
            height: 100%;
            font-weight: 700;
            margin-right: 0px;
            transition: 0.3s;
            font-size: 16px;
        }

        .my-custom-class:hover {
            /* transform: translateX(-20px)rotate(30deg); */
            border-radius: 5px;
            background-color: #fc6921f0;
            transition: 0.5s;
            cursor: pointer;
        }

        @keyframes glow {
            0% {
                box-shadow: 5px 5px 20px orange, -5px -5px 20px orange;
            }

            50% {
                /* box-shadow: 5px 5px 20px rgb(81, 224, 210), -5px -5px 20px rgb(81, 224, 210) */
                box-shadow: 5px 5px 20px orange, -5px -5px 20px orange;
            }

            /* 100% {
    box-shadow: 5px 5px 20px orange, -5px -5px 20px orange;
    } */
        }


        #footer {
            padding: 50px 0;
            background: var(--Gray-800, #040f3e);
        }

        #footer ul li {
            list-style: none;
        }

        #footer .footer-col-left {
            display: inline-flex;
            flex-direction: column;
            gap: 24px;
            align-items: flex-start;
        }

        #footer .footer-col-left .footer-slogan {
            font-size: 16px;
            line-height: 24px;
            background: var(--Gradient, linear-gradient(180deg, #f37b20 0%, #ec3e2b 100%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        #footer .footer-col-left .footer-info {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        #footer .footer-col-left .footer-info li {
            display: flex;
            gap: 12px;
            align-items: center;
            color: var(--white, #fff);
            font-size: 16px;
            line-height: 28px;
        }

        #footer .footer-list-sns {
            display: flex;
            gap: 16px;
            align-items: center;
        }



        @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1200px;
            }
        }

        @media (max-width: 1440px) {
            .popup {
                width: 64% !important;
            }

            .popup .form-box .form-info {
                gap: 10px !important;
            }
        }

        @media (max-width: 1200px) {}

        @media (max-width: 1024px) {

            #banner .form-banner {
                padding: 5px 5px;
            }

            .landing-title {
                font-size: 20px;
            }

            .form-button {
                width: auto;
            }



            .all-product {
                width: 100%;
            }

            .all-product .all-product-show {
                width: 100%;
            }

            #form_register .form-box {
                width: 100%;
            }

            #promotion {
                padding: 30px 0;
            }

            .landing-title {
                margin-bottom: 20px;
            }

            #price {
                padding-bottom: 30px;
            }

            #form_register {
                padding: 30px 0;
            }

            .popup .form-box .form-title {
                margin-bottom: 10px !important;
            }

            .header-box ul {
                display: none !important;
            }

        }

        @media (max-width: 480px) {
            .all-product {
                width: 100%;
            }

            .all-product .all-product-show {
                width: 100%;
                padding: 20px;
            }

            .promotion-select .label-select {
                width: 35px;
                height: 30px;
            }

            .landing-title {
                margin-bottom: 10px;
                line-height: normal;
            }

            .seperate {
                display: none;
            }

            .popup {
                width: 100% !important;
            }

            .popup .form-box {
                padding: 1rem !important;
            }

            .popup .form-box .form-title {
                font-size: 14px !important;
            }

            .popup .form-control {
                padding: 0.4rem 1rem !important;
            }

            .popup .form-box .form-info {
                padding: 1rem !important;
            }

        }
    </style>
    <div class="overlay"></div>
    <section id="form_register" class="popup">

        <div class="container">
            <div class="form-box">
                <div class="x-close">
                    X
                </div>
                <div class="form-title">
                    ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI NGAY HÔM NAY!
                </div>
                <form action="../form-handle" method="POST" id="form_validate_popup">
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
                        <input type="text" name="landing2thang9" value="landing2thang9" hidden>

                        <div class="choose-promotion">
                            <div class="heading">Chọn gói ưu đãi:</div>
                            <label for="5phantram" class="promotion-select">
                                <input type="radio" id="5phantram" name="promotion" value="5">
                                <span class="label-select"></span>
                                <span>Giảm <strong>5%</strong> khi mua 2 năm gói phần mềm kế toán
                                    EasyBooks</span><br>
                            </label>
                            <label for="15phantram" class="promotion-select">
                                <input type="radio" id="15phantram" name="promotion" value="15" checked="checked">
                                <span class="label-select"></span>
                                <span>Giảm <strong>15%</strong> khi mua 3 năm gói phần mềm kế toán
                                    EasyBooks</span><br>
                            </label>
                            <label for="20phantram" class="promotion-select">
                                <input type="radio" id="20phantram" name="promotion" value="20">
                                <span class="label-select"></span>
                                <span>Giảm <strong>20%</strong> khi mua 5 năm gói phần mềm kế toán
                                    EasyBooks</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-lg-3 mt-sm-3 mt-3"><button style="border: none"
                            type="submit" class="form-button">Đăng ký
                            ngay</button></div>
                </form>


            </div>
        </div>
    </section>
    <section id="header">
        <div class="container">
            <div class="header-box">
                <a target="_blank" href="https://easybooks.vn/"> <img
                        srcset="https://easybooks.vn/wp-content/uploads/2024/06/header-logo.png 2x" alt=""></a>
                <ul>
                    <li><a href="#hero" class="scroll-link">Trang chủ</a></li>
                    <li><a href="#promotion" class="scroll-link">Chức năng</a></li>
                    <li><a href="#price" class="scroll-link">Báo giá</a></li>
                    <li><a target="_blank" href="https://easybooks.vn/tin-tuc">Tin tức</a></li>
                </ul>
                <a href="tel:  0766 074 666" class="form-button"> 0766 074 666 </a>
            </div>
        </div>
    </section>
    <section id="hero">
        <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609670.png 2x">
    </section>
    <section id="promotion">
        <div class="container">
            <div class="landing-title">
                Chương trình ưu đãi dành riêng cho khách hàng <br class="seperate">
                <span>"lần đầu sử dụng EasyBooks"</span>
            </div>
            <div class="d-flex justify-content-center mb-lg-5 mb-sm-3 mb-3"><a
                    class="form-button form-button-animation open-popup">Nhận ưu đãi ngay</a>
            </div>

            <div class="row gy-4 d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <ul class="promotion-left">
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609654.png 2x"
                                alt="">Đáp
                            ứng đầy đủ nghiệp vụ kế toán theo Thông tư 88, Thông tư 133 và
                            Thông tư 200</li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609655.png 2x"
                                alt="">Kết
                            nối thông minh với hóa đơn điện tử, phần mềm bán hàng,... giúp
                            đồng bộ dữ liệu nhanh chóng, chính xác</li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609656.png 2x"
                                alt="">Kết
                            nối trực tiếp với trang thuế điện tử, cho phép tra cứu và tải tờ khai
                            hàng loạt theo tháng, quý, năm</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-lg-end">
                    <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Rectangle-5744.png 2x">
                </div>

            </div>
        </div>
    </section>
    <section id="price">
        <div class="container">
            <div class="landing-title">Đăng ký liền tay - Nhận ngay ưu đãi</div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="price-box">
                        <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Frame-427326721.png 2x" alt="">
                        <ul class="price-pros">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Không giới hạn người dùng</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Làm việc online mọi lúc mọi nơi</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Tiết kiệm 85% công sức nhập liệu</li>
                        </ul>
                        <a class="form-button open-popup">Mua ngay</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="price-box price-recommendation">
                        <img class="img-recommendation"
                            srcset="https://easybooks.vn/wp-content/uploads/2024/08/Group-2609669.png 2x" alt="">
                        <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Frame-427326722.png 2x" alt="">
                        <ul class="price-pros">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle-1.png 2x"
                                    alt="">Không giới hạn người dùng</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle-1.png 2x"
                                    alt="">Làm việc online mọi lúc mọi nơi</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle-1.png 2x"
                                    alt="">Tiết kiệm 85% công sức nhập liệu</li>
                        </ul>
                        <a class="form-button open-popup">Mua ngay</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="price-box">
                        <img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Frame-427326723.png 2x" alt="">
                        <ul class="price-pros">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Không giới hạn người dùng</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Làm việc online mọi lúc mọi nơi</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Tiết kiệm 85% công sức nhập liệu</li>
                        </ul>
                        <a class="form-button open-popup">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="form_register">
        <div class="container">
            <div class="row gy-4 d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-content-left">
                        <div class="title">EASYBOOKS - PHẦN MỀM KẾ TOÁN TỐT NHẤT HIỆN NAY</div>
                        <div class="title"><span>50.000+</span> KHÁCH HÀNG TIN DÙNG</div>
                        <ul class="form-pros">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Hạch toán tự động giúp kế toán tiết kiệm 85% thời gian nhập liệu</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Miễn phí đồng bộ hóa đơn đầu vào - đầu ra</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Miễn phí tra cứu thuế điện tử, tải tờ khai hàng loạt theo tháng, quý, năm
                            </li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">
                                Tự động cảnh báo người dùng khi hạch toán không hợp lệ, tồn quỹ âm,
                                kho âm và các bút toán không tuân thủ nguyên tắc kế toán</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">
                                Tự động tổng trích xuất số liệu lên báo cáo thuế, báo cáo tài chính, dự báo
                                dòng tiền,... đáp ứng kịp thời yêu cầu quản trị của Sếp</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/08/Check-circle.png 2x"
                                    alt="">Giao diện thân thiện, dễ sử dụng, sử dụng ngay sau 10 phút làm quen</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-lg-end">
                    <div class="form-box">
                        <div class="form-title">
                            ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI NGAY HÔM NAY!
                        </div>
                        <form action="../form-handle" method="POST" id="form_validate">
                            <div class="form-info">
                                <div class="form-row">
                                    <input class="form-control" type="text" name="hoten" placeholder="Họ và tên*">
                                </div>
                                <div class="form-row">
                                    <input class="form-control" type="text" name="phonenumber"
                                        placeholder="Số điện thoại*">
                                </div>
                                <div class="form-row">
                                    <input class="form-control" type="text" name="taxcode" placeholder="Mã số thuế*">
                                </div>
                                <div class="form-row">
                                    <input class="form-control" type="email" name="email" placeholder="Email*">
                                </div>
                                <input type="text" name="landing2thang9" value="landing2thang9" hidden>

                                <div class="choose-promotion">
                                    <div class="heading">Chọn gói ưu đãi:</div>
                                    <label for="5phantram" class="promotion-select">
                                        <input type="radio" id="5phantram" name="promotion" value="5">
                                        <span class="label-select"></span>
                                        <span>Giảm <strong>5%</strong> gói phần mềm kế toán
                                            EasyBooks</span><br>
                                    </label>
                                    <label for="15phantram" class="promotion-select">
                                        <input type="radio" id="15phantram" name="promotion" value="15"
                                            checked="checked">
                                        <span class="label-select"></span>
                                        <span>Giảm <strong>15%</strong> gói phần mềm kế toán
                                            EasyBooks</span><br>
                                    </label>
                                    <label for="20phantram" class="promotion-select">
                                        <input type="radio" id="20phantram" name="promotion" value="20">
                                        <span class="label-select"></span>
                                        <span>Giảm <strong>20%</strong> gói phần mềm kế toán
                                            EasyBooks</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center" style="margin-top: 24px"><button
                                    style="border: none" type="submit" class="form-button">Đăng ký
                                    ngay</button></div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="row gy-4 d-flex align-items-end">
                <div class="col-lg-8">
                    <div class="footer-col-left">
                        <img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-logo.png 2x" alt="">
                        <div class="footer-slogan">EASYBOOKS - PHẦN MỀM KẾ TOÁN ƯU VIỆT CHO MỌI DOANH NGHIỆP</div>
                        <ul class="footer-info">
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x"
                                    alt="">Trụ sở chính: Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm,
                                Hà Nội</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon1.png 2x"
                                    alt="">Chi nhánh: Số H.54 đường Dương Thị Giang, Phường Tân Thới Nhất, Quận 12, TP.
                                Hồ Chí Minh</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon2.png 2x"
                                    alt="">easybooks.softdreams@gmail.com</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon3.png 2x"
                                    alt="">0766 074 666</li>
                            <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-landing-icon4.png 2x"
                                    alt="">https://easybooks.vn/</li>
                        </ul>
                        <style>
                            .footer-info {
                                padding-left: 0;
                            }

                            .all-product {
                                border-radius: 6px;
                                background: rgba(255, 255, 255, 0.30);
                                color: #FFF;
                                font-size: 14px;
                                font-style: normal;
                                line-height: 20px;
                                padding: 8px 18px;
                                display: flex;
                                gap: 10px;
                                align-items: center;
                                position: relative;
                                cursor: pointer;
                                font-weight: 700;
                            }

                            .all-product-show {
                                position: absolute;
                                background: #fff;
                                bottom: 130%;
                                left: 0;
                                width: 60rem;
                                padding: 30px 50px;
                                border-radius: 10px;
                                display: none;
                                border: 1px solid #ccc;

                            }

                            .all-product-show .software-row {
                                padding: 10px;
                                gap: 20px;
                            }

                            .all-product-show .solution-box {
                                display: flex;
                                justify-content: space-between;
                                gap: 20px;
                                flex-wrap: wrap;

                            }

                            .all-product-show .solution-box .solution-col {
                                display: flex;
                                flex-direction: column;
                                gap: 20px;
                            }

                            .all-product-show .software-row .software .software-title {
                                color: var(--Gray-800, #040F3E);
                            }

                            .all-product-show .software-row .software .software-des {
                                color: var(--Gray-900, #030b2c);
                                font-weight: 400;

                            }

                            /* .all-product-show .software-row .software {
                                padding: 5px 40px 5px 20px;

                            } */

                            .all-product-show .software-row:hover {
                                background: var(--primary-5, #fdeee9);
                            }

                            .all-product-show .solution-nav-title {
                                color: var(--Gray-800, #040F3E);
                                font-size: 18px;
                            }

                            .all-product-show ul {
                                margin: 0;
                                padding: 0;
                            }

                            .all-product-show .list-software {
                                display: flex;
                                flex-direction: column;
                            }

                            .arrow-up {
                                transform: rotate(180deg);
                                transition: transform 0.3s;
                            }

                            .arrow-down {
                                transform: rotate(0deg);
                                transition: transform 0.3s;
                            }
                        </style>
                        <div class="all-product">
                            Tất cả sản phẩm của Softdreams <i class="fa fa-caret-down arrowclass"
                                aria-hidden="true"></i>
                            <div class="all-product-show">
                                <div class="solution-box">
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Tài chính kế toán
                                        </div>
                                        <ul class="list-software">
                                            <a target="_blank" href="https://easybooks.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Group-2.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyBooks</div>
                                                        <div class="software-des">
                                                            Phần mềm kế toán
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyinvoice.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyInvoice</div>
                                                        <div class="software-des">
                                                            Phần mềm hóa đơn điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easy-pit.easyinvoice.com.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-1.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyPIT</div>
                                                        <div class="software-des">
                                                            Khấu trừ thuế TNCN
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank"
                                                href="https://easyinvoice.vn/softdreams-ra-mat-giai-phap-in-ve-dien-tu-easyticket/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-2.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyTicket</div>
                                                        <div class="software-des">
                                                            Phần mềm đặt vé điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Quản trị điều hành
                                        </div>
                                        <ul class="list-software">
                                            <a target="_blank" href="https://easyhrm.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-3.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyHRM</div>
                                                        <div class="software-des">
                                                            Phần mềm quản trị nhân lực
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyposs.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-4.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyPOS</div>
                                                        <div class="software-des">
                                                            Phần mềm bán hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easyca.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-5.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyCA</div>
                                                        <div class="software-des">
                                                            Phần mềm chữ ký số
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://easydocs.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Group-3.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyDocs</div>
                                                        <div class="software-des">
                                                            Phần mềm hợp đồng điện tử
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img style="width: 24px"
                                                        src="https://softdreams.vn/wp-content/uploads/2023/11/Group-2609314.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyCRM</div>
                                                        <div class="software-des">
                                                            Phần mềm quản lý khách hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="solution-col">
                                        <div class="solution-nav-title">
                                            Dự án CNTT
                                        </div>
                                        <ul class="list-software">
                                            <a href="#">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Group.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">EasyKYC</div>
                                                        <div class="software-des">
                                                            Xác thực khách hàng
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a target="_blank" href="https://cic.gov.vn/">
                                                <div style="display: flex; align-items: center" class="software-row">
                                                    <img src="https://softdreams.vn/wp-content/uploads/2023/10/Frame-6.png"
                                                        alt="" />
                                                    <div class="software">
                                                        <div class="software-title">CICB</div>
                                                        <div class="software-des">
                                                            Kết nối khách hàng vay
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer-list-sns">
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon1.png 2x"
                                alt="">
                        </li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon2.png 2x"
                                alt="">
                        </li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon3.png 2x"
                                alt="">
                        </li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon4.png 2x"
                                alt="">
                        </li>
                        <li><img srcset="https://easybooks.vn/wp-content/uploads/2024/06/footer-right-icon5.png 2x"
                                alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <style>
        /* nút zalo, gọi, mess  */
        #button-contact-vr {
            position: fixed;
            bottom: 0;
            z-index: 99999;
        }

        /*phone*/
        #button-contact-vr .button-contact {
            position: relative;
            margin-top: -5px;
        }

        #button-contact-vr .button-contact .phone-vr {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 90px;
            height: 90px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
        }

        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #c31d1d;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite;
        }

        .phone-vr-img-circle {
            background-color: #e60808;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out;
        }

        .phone-vr-img-circle a {
            display: block;
            line-height: 37px;
        }

        .phone-vr-img-circle img {
            max-height: 25px;
            max-width: 27px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
        }

        @-webkit-keyframes phone-vr-circle-fill {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
        }

        @-webkit-keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        @keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        .phone-bar a {
            position: absolute;
            margin-top: -65px;
            left: 30px;
            z-index: -1;
            color: #fff;
            font-size: 16px;
            padding: 7px 15px 7px 50px;
            border-radius: 100px;
            white-space: nowrap;
        }

        .phone-bar a:hover {
            opacity: 0.8;
            color: #fff;
        }

        @media(max-width: 736px) {
            .phone-bar {
                display: none;
            }
        }

        #zalo-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #zalo-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        #viber-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #714497;
            background-color: rgba(113, 68, 151, 0.8);
        }

        #viber-vr .phone-vr-img-circle {
            background-color: #714497;
        }

        #contact-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #contact-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        div#whatsapp-vr .phone-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #1fd744;
            background-color: rgb(35 217 72 / 70%);
        }

        div#whatsapp-vr .phone-vr .phone-vr-img-circle {
            background: #1cd741;
        }

        div#whatsapp-vr .phone-vr .phone-vr-img-circle img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
        }

        #fanpage-vr img {
            max-width: 35px;
            max-height: 35px;
        }

        #fanpage-vr .phone-vr-img-circle {
            background-color: #1877f2;
        }

        #fanpage-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 rgb(24 119 242 / 65%);
            background-color: rgb(24 119 242 / 70%);
        }

        /*css all in one*/
        #gom-all-in-one .button-contact {
            transition: 1.6s all;
            -moz-transition: 1.6s all;
            -webkit-transition: 1.6s all;
        }

        #button-contact-vr.active #gom-all-in-one .button-contact {
            margin-left: -100%;
        }

        #all-in-one-vr .phone-bar {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 100%;
            color: #fff;
            padding: 5px 15px 5px 48px;
            border-radius: 50px;
            margin-left: -64px;
            width: max-content;
            cursor: pointer;
        }

        #popup-showroom-vr,
        div#popup-form-contact-vr {
            display: none;
        }

        #popup-showroom-vr.active,
        div#popup-form-contact-vr.active {
            display: block;
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 99999;
        }

        .bg-popup-vr {
            position: absolute;
            left: 0;
            top: 0;
            background: rgb(51 51 51 / 50%);
            width: 100%;
            height: 100vh;
        }

        .content-popup-vr {
            background: #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            border-radius: 5px;
            box-shadow: 0 0 14px 5px rgb(0 0 0 / 49%);
            max-width: 600px;
            display: flex;
        }

        .content-popup-vr input,
        .content-popup-vr textarea {
            width: 100%;
            max-height: 100px;
            min-height: 38px;
            border: 1px solid #b1b1b1;
            margin-bottom: 10px;
            padding: 0 7px;
            background: #fff;
        }

        .content-popup-vr label {
            width: 100%;
        }

        .content-popup-vr input.wpcf7-form-control.wpcf7-submit {
            max-width: fit-content;
            padding: 5px 32px 2px;
            background: #2196f3;
            border: 0;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            margin: 10px auto 0;
            display: block;
            box-shadow: 0px 0px 5px 1px rgb(0 0 0 / 29%);
            font-weight: 400;
            min-height: auto;
            line-height: 30px;
        }

        .content-popup-vr input.wpcf7-form-control.wpcf7-submit:hover {
            opacity: 0.7;
        }

        .content-popup-vr .close-popup-vr {
            font-family: sans-serif;
            width: 23px;
            height: 23px;
            background: black;
            position: absolute;
            top: -10px;
            right: -10px;
            color: #fff;
            text-align: center;
            line-height: 23px;
            font-size: 17px;
            border-radius: 50%;
            cursor: pointer;
        }

        .content-popup-vr .close-popup-vr:hover {
            background: #b50000;
        }

        .content-popup-vr .content-popup-div-vr {
            width: 100%;
            padding: 25px;
        }

        .content-popup-vr .content-popup-img-vr {
            width: 100%;
            max-width: 45%;
            border-radius: 10px 0 0 10px;
            overflow: hidden;
        }

        #loco-top,
        #loco-bottom {
            display: block;
        }

        #loco-top .content-popup-img-vr,
        div#popup-form-contact-vr #loco-bottom .content-popup-img-vr {
            max-width: 100%;
            text-align: center;
        }

        #contact-showroom.no-event a {
            pointer-events: none;
        }

        .content-popup-vr .content-popup-div-vr ul {
            color: #333;
            list-style: none;
            font-size: 15px;
        }

        @media(max-width: 673px) {
            div#popup-form-contact-vr .content-popup-vr {
                display: block;
            }

            div#popup-form-contact-vr .content-popup-vr .content-popup-img-vr {
                max-width: 100%;
                display: none;
            }
        }

        #button-contact-vr {
            transform: scale(0.8);
        }

        #button-contact-vr {
            margin: -10px;
        }

        #button-contact-vr {
            bottom: 1%;
        }
    </style>
    <div style="position: fixed;" id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <div id="fanpage-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://www.facebook.com/www.easybooks.vn">
                            <img alt="Fanpage"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/Facebook.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0766074666">
                            <img alt="Zalo"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/zalo.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:0766 074 666">
                            <img alt="Phone"
                                src="https://easyhrm.vn/wp-content/plugins/button-contact-vr/img/phone.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            var timeout;
            $(".all-product").hover(
                function () {
                    clearTimeout(timeout);
                    $(".all-product-show").show();
                },
                function () {
                    timeout = setTimeout(function () {
                        if (!$(".all-product-show").is(":hover")) {
                            $(".all-product-show").hide();
                        }
                    }, 100); // Delay để kiểm tra nếu con trỏ chuột không nằm trên div2
                }
            );

            $(".all-product-show").hover(
                function () {
                    clearTimeout(timeout);
                    $(".all-product-show").show();
                },
                function () {
                    timeout = setTimeout(function () {
                        if (!$(".all-product").is(":hover")) {
                            $(".all-product-show").hide();
                        }
                    }, 100); // Delay để kiểm tra nếu con trỏ chuột không nằm trên div1
                }
            );
        });
        $(document).ready(function () {
            $('.scroll-link').on('click', function (e) {
                console.log($('header').outerHeight());
                e.preventDefault();
                // Lấy vị trí của phần tử cần scroll đến
                const targetId = $(this).attr('href').substring(1);
                const targetElement = $('#' + targetId);
                // Scroll đến vị trí của phần tử
                $('html, body').animate({
                    scrollTop: targetElement.offset().top
                }, 500);
            });
            $('.open-popup').on('click', function () {
                $('.overlay').show();
                $('.popup').show();
            });
            $('.x-close').on("click", function () {
                closeOverlayAndModal();
            });

            $('.overlay').on("click", function (event) {
                if (event.target === $('.overlay')[0]) {
                    closeOverlayAndModal();
                }
            });

            function closeOverlayAndModal() {
                $('.overlay').hide();
                $('.popup').hide();
            }
        });

    </script>
    <script>
        $(document).ready(function () {
            var validate_rules =
            {
                rules: {
                    hoten: {
                        required: true,
                        minlength: 6
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phonenumber: {
                        required: true,
                        minlength: 9,
                        maxlength: 12
                    },
                    taxcode: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    hoten: {
                        required: "Vui lòng nhập tên!",
                        minlength: "Hãy nhập họ và tên",
                    },
                    email: {
                        required: "Vui lòng nhập vào email",
                        email: "Email sai định dạng, hãy nhập lại!"
                    },
                    phonenumber: {
                        required: "Vui lòng nhập số điện thoại!",
                        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
                        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
                    },
                    taxcode: {
                        required: "Vui lòng nhập mã số thuế!",
                        minlength: "Độ dài tối thiểu 6 kí tự",
                    }
                }
            }
            $("#form_validate").validate(validate_rules);
            $("#form_validate_popup").validate(validate_rules);
        });

    </script>
</body>


</html>