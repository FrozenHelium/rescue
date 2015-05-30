<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

$officialPage = $GLOBALS['g_officialPage'];
$reports = null;

if($tabID == 'reports') {
    $officialPage->SetActiveTab(0);
    $reports = $GLOBALS['g_user']->GetReports();
}else if($tabID == 'mycases') {
    $officialPage->SetActiveTab(1);
}else{
    header("Location: index.php?page=forbidden");
}

?>
