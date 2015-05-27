<?php

$tabID = 'reports';
if(isset($_GET['tab'])){
    $tabID = $_GET['tab'];
}

if($tabID == 'organizations') include('info_organizations_view.php');
else if($tabID == 'awareness') include('info_awareness_view.php');
else if($tabID == 'statistics') include('info_statistics_view.php');
else if($tabID == 'whatcanyoudo') include('info_whatcanyoudo_view.php');

?>
