<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

$adminPage = $GLOBALS['g_adminPage'];

if($tabID == 'reports') {
    $adminPage->SetActiveTab(0);
}else if($tabID == 'manageofficials') {
    $adminPage->SetActiveTab(1);
}else{
    header("Location: index.php?page=forbidden");
}

?>
