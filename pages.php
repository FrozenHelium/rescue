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
$g_urgentPage = null;
$g_notifyPage = null;
$g_infoPage = null;

if(($GLOBALS['g_pageID'] == 'official' || $GLOBALS['g_pageID'] == 'admin' ) && $g_user->LoggedIn()){
    $userType = $g_user->GetUserType();
    if($userType == 2){
        $g_adminPage = new Page;
        $g_adminPage->SetUser($g_user);
        $g_adminPage->AddStyleSheet("css/admin.css");
        $g_adminPage->SetView("../views/admin_view.php");
        $g_adminPage->SetController("../controls/admin_control.php");
        $g_adminPage->AddTab("Reports", "index.php?page=admin&tab=reports");
        $g_adminPage->AddTab("Manage Officials", "index.php?page=admin&tab=manageofficials");
    }else if($userType == 1){
        $g_officialPage = new Page;
        $g_officialPage->SetUser($g_user);
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
    }else if($GLOBALS['g_pageID'] == 'urgent'){
        $g_urgentPage = new Page;
        $g_urgentPage->AddStyleSheet("css/urgent.css");
        $g_urgentPage->SetView("../views/urgent_view.php");
        $g_urgentPage->SetController("../controls/urgent_control.php");
        $g_urgentPage->DisableNavbar();

    }else if($GLOBALS['g_pageID'] == 'notify'){
        $g_notifyPage = new Page;
        $g_notifyPage->AddStyleSheet("cssnotifye.css");
        $g_notifyPage->SetView("../views/notify_view.php");
        $g_notifyPage->SetController("../controls/notify_control.php");
        $g_notifyPage->DisableNavbar();

    }else if($GLOBALS['g_pageID'] == 'info'){
        $g_infoPage = new Page;
        $g_infoPage->AddStyleSheet("css/info.css");
        $g_infoPage->SetView("../views/info_view.php");
        $g_infoPage->SetController("../controls/info_control.php");
        $g_infoPage->AddTab("Organizations", "index.php?page=info&tab=organizations");
        $g_infoPage->AddTab("Awareness", "index.php?page=info&tab=awareness");
        $g_infoPage->AddTab("Statistics", "index.php?page=info&tab=statistics");
        $g_infoPage->AddTab("What can you do?", "index.php?page=info&tab=whatcanyoudo");
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
