<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

$officialPage = $GLOBALS['g_officialPage'];
$reports = null;
$handleMsg = null;

if($tabID == 'reports') {
    $officialPage->SetActiveTab(0);
    if(isset($_POST['detail-reportid'])){
        $id = $_POST['detail-reportid'];
        $handleMsg = "The case is set to be handled by you";
        $GLOBALS['g_user']->HandleReport($id);
    }
    $reports = $GLOBALS['g_user']->GetReports();
}else if($tabID == 'mycases') {
    $officialPage->SetActiveTab(1);
}else{
    header("Location: index.php?page=forbidden");
}

?>
