
<?php

include './autoload.php';
$reg = new Registration(); //extends DB so no need to call DB
$util = new Util();
$validate = new Validation();
$errors = [];


$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

if ($util->isPostRequest()) {

    if (!$validate->isValidEmail($email) || empty($email)) {
        $errors[] = 'Sorry, Email is not valid.';
    }
    if (empty($password)) {
        $errors[] = 'Sorry, Password cannot be blank.';
    }
    if (empty($confirmPassword)) {
        $errors[] = 'Sorry, Confirm Password cannot be blank.';
    }
    if ($password != $confirmPassword) {
        $errors[] = 'Sorry, Passwords do not match.';
    }

    if (!count($errors)) {

       
        if ($reg->userExists($email)) {
            $message = 'You have already registered with this email';
        }
        
        
        if ($reg->insertUser($email, $password)) {
            $message = 'You have successfully registered';
            $email = '';
            $password = '';
            $confirmPassword = '';
        }
         else {
            $message = 'Error, Registration failed.';
        }
    }
}

include './template/errors.html.php';
include './template/messages.html.php';
include_once '../Registration/template/signUp.html.php';
?>

