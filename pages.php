<?php

require_once 'vars.php';
require_once 'classes/User.php';
require_once 'classes/Page.php';

//$g_user = new User;

$g_homePage = null;
//$g_forbiddenPage = null;

$g_homePage = new Page;
$g_homePage->AddStyleSheet("css/home.css");
$g_homePage->SetView("../views/home_view.php");
$g_homePage->SetController("../controls/home_control.php");
$g_homePage->DisableNavbar();

?>
