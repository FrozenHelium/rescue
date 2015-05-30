<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}
if($tabID == 'reports'){
    if(isset($_GET['reportid'])){
        include('official_reportdetail_view.php');
    }
    else include('official_reports_view.php');

 }
else if($tabID == 'mycases') include('official_mycases_view.php');
else header("Location: index.php?page=forbidden");

?>
