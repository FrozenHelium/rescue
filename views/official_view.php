<?php
$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}
if($tabID == 'reports') include('official_reports_view.php');
else header("Location: index.php?page=forbidden");

?>
