<?php
/** Constants */
$dir = __DIR__ . '/';
define('PATH', $dir);
define('URI', get_template_directory_uri());
define('HOMEPAGE', get_option('page_on_front'));
define('IMG', '/dist/img/');
define('SECTION', '/parts/');
define('AUTOMATIC_UPDATER_DISABLED', true); // Отключаем автообновления всего
define('WP_REST_API', true);

// require_once PATH . '/inc/Helpers.php';
require_once PATH . '/inc/General.php';
// require_once PATH . '/inc/Ajax.php';

/** Settings meta fields */
require_once PATH . '/inc/CommonMeta.php';
require_once PATH . '/inc/Meta.php';