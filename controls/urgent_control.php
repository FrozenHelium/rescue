<?php

$formSubmissionSuccess = null;
$formSubmissionMsg = null;

if(isset($_POST['location']) && isset($_POST['category']) && isset($_POST['description'])){
    $location = $_POST['location'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    if(isset($_POST['anonymous']))
        $anonymous = $_POST['anonymous'];
    else $anonymous = 0;
    $urgent = 1;
    $user = $GLOBALS['g_user'];
    try{
        $user->AddReport($location, $category, $description, $anonymous, $name, $contact, $urgent);
        $formSubmissionMsg = "Your report was submitted.";
        $formSubmissionSuccess = true;
    }catch(Exception $e){

        $formSubmissionMsg= $e->getMessage();
        $formSubmissionSuccess = false;
    }
}

?>
