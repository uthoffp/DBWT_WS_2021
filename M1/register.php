<?php
function saveRegistration() : bool {
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['gdpr']) || !isset($_POST['lang'])) {
        return false;
    }
    if(trim($_POST['name']) == "" || trim($_POST['email']) == "" || !$_POST['gdpr']){
        return false;
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || strpos($_POST['email'], "@trash.de") !== false) {
        return false;
    }

    $userData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'lang' => $_POST['lang']
    ];
    file_put_contents(filename, serialize($userData), FILE_APPEND);
    return true;

}

const filename = "newsletter.txt";
$successful = saveRegistration();

if($successful) {
    header("location:start.php?news=1");
} else{
    header("location:start.php?news=0");
}

