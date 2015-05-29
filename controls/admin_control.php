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
    $reports = $GLOBALS['g_user']->GetReports();
    if(isset($_POST['name']) && isset($_POST['organization'])){
        $user=$GLOBALS['g_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $organization=$_POST['organization'];
        $designation=$_POST['designation'];
        $location=$_POST['location'];
        $contact=$_POST['contact'];
        $user->AddOfficial($username, $password, $name, $organization, $designation, $location, $contact);
    }
}else{
    header("Location: index.php?page=forbidden");
}

?>
