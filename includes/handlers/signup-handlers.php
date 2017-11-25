<?php

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormEmail($inputText){

}


if(isset($_POST['signupButton'])){
//    echo "pressed";
    $username = sanitizeFormUsername($_POST['username']);
    echo $username;

    $firstName = sanitizeFormString($_POST['firstName']);
    echo $firstName;

    $lastName = sanitizeFormString($_POST['lastName']);
    echo $lastName;

    $email = $_POST['email'];
    echo $email;

    $confirmEmail = $_POST['confirmEmail'];
    echo $confirmEmail;

}

?>