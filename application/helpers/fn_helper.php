<?php
function getFbLogin() {
    $ci =& get_instance();
    $url = $ci->facebook->getLoginUrl(array(
        'redirect_uri' => site_url('auth/facebook'), 
        'scope' => array("email", "public_profile") // permissions here
    ));

    return $url;
}