<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "easybooks" );


/** Username của database */
define( 'DB_USER', "root" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "" );


/** Hostname của database */
define( 'DB_HOST', "localhost" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');


/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QrRL+EPP Ow!Og9xbBO16@@|$OO,V fF*1ocpm?V,=z~(pH@^,q]Hg?Se:ggoMc_' );

define( 'SECURE_AUTH_KEY',  '$(uXJ&lNbW|hIDf3c~VW;TdVZGJ}f42K[t?A@:[_uU}SRe}3/tPpFe)4L!Q$rfI8' );

define( 'LOGGED_IN_KEY',    'lgiXj5eYDy`p?F7kmsb#ne+ 6buLOwS.>[7UueS!EM)M_S+s+9.YR:/XFGU-xkIt' );

define( 'NONCE_KEY',        'TPQ(v%p<ieFJR!,)T5N}wEf@u^Q>9hXeO6myp=JE1qHAswqlArpt$@8U@vqk!PNO' );

define( 'AUTH_SALT',        ']X>V#P9H|nV[gi5^OlDBLgY}nO0>Smf!*drT^Q,jM~6x+6Uo&{gnP!J,]N^!`T`;' );

define( 'SECURE_AUTH_SALT', ':-gJ<>7FQkd=6!_a*gaCcgOEzvZ6^SU`PV%oa3odYqrbn3g2mP8kaK55=>/u:T$W' );

define( 'LOGGED_IN_SALT',   'NAN,-t3,Yw.nT^qIPa9FwU*U:k#+{En_i8P~p!pNnvcw/JAu/X[25)&dm7zn#RFI' );

define( 'NONCE_SALT',       'j?#sTSG/NTxeqa.NsjwI|Z&S%DAO<NYB{UJA;pjT&Ppqws>7`j!.(,JTnnM Vv-8' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
define( 'WP_SITEURL', 'http://localhost/easybooks/' );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
