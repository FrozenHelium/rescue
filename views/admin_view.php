<?php

$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

if($tabID == 'reports') include('admin_reports_view.php');
else if($tabID == 'manageofficials') include('admin_manageofficials_view.php');

?>
