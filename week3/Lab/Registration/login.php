
<?php

include './autoload.php';

$reg = new Registration(); //extends DB so no need to call DB
$util = new Util();
$validate = new Validation();
$errors = [];
$message = '';

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if ($util->isPostRequest()) {

    if (!$validate->isValidEmail($email) || empty($email)) {
        $errors[] = 'Sorry, Email is not valid.';
    }
    if (empty($password)) {
        $errors[] = 'Sorry, Password cannot be blank.';
    }

    if (!count($errors)) {
        $reg = new Registration(); //extends DB so no need to call DB
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $userID = $reg->login($email, $password);
        if ($userID > 0) {
            session_start();
            $_SESSION['user_id'] = $userID;
            $util->redirect('admin.php');
        } else {
            $message = 'Error, Login failed.';
        }
    }
}

include './template/errors.html.php';
include './template/messages.html.php';
include_once '../Registration/template/login.html.php';
?>
