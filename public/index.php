<?php

require_once "../pages.php";

$pageID = 'homepage';
if(isset($_GET['page'])){
    $pageID = $_GET['page'];
}

if($pageID == 'homepage'){
    if($g_homePage != null){
        $g_homePage->GeneratePage();
    }
    else echo 'oops! something went wrong :/';
}

?>
