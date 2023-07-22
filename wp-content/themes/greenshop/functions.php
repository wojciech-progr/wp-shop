<?php

/* For theme path */
if (!defined('GREENSHOP_THEME_URL')) {
    define('GREENSHOP_THEME_URL', WP_CONTENT_URL . '/themes/' . get_template());
}

require_once dirname(__FILE__)."/libraries/custom-taxonomy.php";

?>