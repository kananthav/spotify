<?php
/**
 * Created by PhpStorm.
 * User: KA
 * Date: 11/26/2017
 * Time: 10:26 PM
 */

class Account{

    private $errorArray;

    public function __construct(){
        $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em, $em2);
        $this->validatepasswords($pw, $pw2);

        /*
         * Check if validation any error or not
         * If there is no error then execute the code
         * the value will be false
         */
        if(empty($this->errorArray) == true){
            // Insert to db
            return true;
        }else{
            return false;
        }
    }

    public function getError($error) {
        if(!in_array($error, $this->errorArray)) {
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un){
        if(strlen($un) > 25 || strlen($un) < 5){
            array_push($this->errorArray, "Your username must be between 5 and 25 characters");
            return;
        }

        //TODO: check if username is exists

    }

    private function validateFirstName($fn){
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateLastName($ln){
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateEmails($em, $em2){
        if ($em != $em2) {
            array_push($this->errorArray, "Your emails do not match");
            return;
        }

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, "Email is invalid");
            return;
        }

        //TODO: Check that username hasn't already been used
    }

    private function validatePasswords($pw, $pw2){
        if($pw != $pw2){
            array_push($this->errorArray, "Your password do not match");
            return;
        }

        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, "Your password can only contain numbers and letters");
            return;
        }

        if(strlen($pw) > 30 || strlen($pw) < 6){
            array_push($this->errorArray, "Your password must be between 6 and 30 characters");
            return;
        }
    }

}