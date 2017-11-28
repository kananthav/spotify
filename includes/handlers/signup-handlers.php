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

// register button pressed
if(isset($_POST['signupButton'])){
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Call the 'register' function in 'Account' class.
    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword);

    if($wasSuccessful == true) {
        header("Location: index.php");
    }
}

?>