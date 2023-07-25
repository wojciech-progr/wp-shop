<?php

/* For theme path */
if (!defined('GREENSHOP_THEME_URL')) {
    define('GREENSHOP_THEME_URL', 'wp-content/themes/' . get_template());
}

require_once dirname(__FILE__) . "/libraries/custom-taxonomy.php";

// Filter & Function to rename the WordPress logout URL
add_filter('logout_url', 'my_logout_page', 10, 2);
function my_logout_page($logout_url)
{
    return home_url('/admin-login.php'); // The name of your new login file
}
// Filter & Function to rename Lost Password URL
add_filter('lostpassword_url', 'my_lost_password_page', 10, 2);
function my_lost_password_page($lostpassword_url)
{
    return home_url('/admin-login.php?action=lostpassword'); // The name of your new login file
}
// Filter & Function to rename the WordPress login URL
add_filter('login_url', 'login_page', 10, 3);
function my_login_page($login_url, $redirect, $force_reauth)
{
    $login_page = home_url('/admin-login.php'); // The name of your new login file
    $login_url = add_query_arg('redirect_to', $redirect, $login_page);
    return $login_url;
}
?>