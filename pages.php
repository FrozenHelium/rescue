<?php

require_once 'vars.php';
require_once 'classes/User.php';
require_once 'classes/Page.php';

$g_user = new User;

$g_homePage = null;
$g_loginPage = null;
$g_adminPage = null;
$g_officialPage = null;
$g_forbiddenPage = null;

if($g_user->LoggedIn()){
    $userType = $g_user->GetUserType();
    if($userType == 2){
        $g_adminPage = new Page;
        $g_adminPage->AddStyleSheet("css/admin.css");
        $g_adminPage->SetView("../views/admin_view.php");
        $g_adminPage->SetController("../controls/admin_control.php");
    }else if($userType == 1){
        $g_officialPage = new Page;
        $g_officialPage->AddStyleSheet("css/official.css");
        $g_officialPage->SetView("../views/official_view.php");
        $g_officialPage->SetController("../controls/official_control.php");

    }else{

    }
}else{
    if($GLOBALS['g_pageID'] == 'home'){
        $g_homePage = new Page;
        $g_homePage->AddStyleSheet("css/home.css");
        $g_homePage->SetView("../views/home_view.php");
        $g_homePage->SetController("../controls/home_control.php");
        $g_homePage->DisableNavbar();
    }else{
        $g_loginPage = new Page;
        $g_loginPage->AddStyleSheet("css/login.css");
        $g_loginPage->SetView("../views/login_view.php");
        $g_loginPage->SetController("../controls/login_control.php");
        $g_loginPage->AddJScript("js/sha512.js");
        $g_loginPage->AddJScript("js/forms.js");
        $g_loginPage->DisableNavbar();
    }
}

$g_forbiddenPage = new Page;
$g_forbiddenPage->AddStyleSheet("css/forbiddenpage.css");
$g_forbiddenPage->SetView("../views/forbidden_view.php");
$g_forbiddenPage->SetController("../controls/forbidden_control.php");
$g_forbiddenPage->DisableNavbar();

?>
