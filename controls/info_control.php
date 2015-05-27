<?php
$tabID = 'organizations';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

$infoPage = $GLOBALS['g_infoPage'];

if($tabID == 'organizations') {
    $infoPage->SetActiveTab(0);
}else if($tabID == 'awareness') {
    $infoPage->SetActiveTab(1);
}else if($tabID == 'statistics') {
    $infoPage->SetActiveTab(2);
}else if($tabID == 'whatcanyoudo') {
    $infoPage->SetActiveTab(3);
}else{
    header("Location: index.php?page=forbidden");
}

?>
