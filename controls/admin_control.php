<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

$adminPage = $GLOBALS['g_adminPage'];
$reports = null;

if($tabID == 'reports') {
    $adminPage->SetActiveTab(0);
    $reports = $GLOBALS['g_user']->GetReports();
}else if($tabID == 'manageofficials') {
    $adminPage->SetActiveTab(1);
}else{
    header("Location: index.php?page=forbidden");
}

?>
