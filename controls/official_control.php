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
}else{
    header("Location: index.php?page=forbidden");
}

?>
