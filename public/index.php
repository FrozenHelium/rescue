<?php

$g_pageID = 'home';
if(isset($_GET['page'])){
    $g_pageID = $_GET['page'];
}

require_once "../pages.php";


if($g_pageID == 'home'){
    if($g_homePage != null){
        $g_homePage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID == 'urgent'){
    if($g_urgentPage != null){
        $g_urgentPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID == 'notify'){
    if($g_notifyPage != null){
        $g_notifyPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID == 'info'){
    if($g_infoPage != null){
        $g_infoPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID == 'login'){
    if($g_loginPage != null){
        $g_loginPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID=='admin'){
    if($g_adminPage != null){
	    $g_adminPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else if($g_pageID=='official'){
    if($g_officialPage != null){
        $g_officialPage->GeneratePage();
    }else $g_forbiddenPage->GeneratePage();
}else $g_forbiddenPage->GeneratePage();

?>
