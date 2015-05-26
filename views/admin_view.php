<?php
$tab = 'reports';
if(isset($_GET['tab'])){
    $tab = $_GET['tab'];
}

if($tab=='reports') include('admin_reports_view.php');
else if($tab=='manageofficials') include('admin_manageofficials_view.php');

?>
