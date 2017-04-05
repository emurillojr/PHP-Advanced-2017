<?php

require_once './autoload.php';

$dbconnect = new AddressDB();
$util = new Util();
$validate = new Validation();
$errors = new ErrorMessage();
$message = new Message();

$fullName = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'addressline1');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$birthday = filter_input(INPUT_POST, 'birthday');

$states = $util->returnStates();


$todaysdate = date("m/d/Y");



if ($util->isPostRequest()) {

    if (empty($fullName)) {
        $errors->addMessage('FullName', 'Sorry, Full Name cannot be blank.');
    }
    if (!$validate->isValidEmail($email) || empty($email)) {
        $errors->addMessage('Email', 'Sorry, Email is not valid.');
    }
    if (empty($address)) {
        $errors->addMessage('Address', 'Sorry, Address cannot be blank.');
    }
    if (empty($city)) {
        $errors->addMessage('City', 'Sorry, City cannot be blank.');
    }
    if (!$validate->isValidZip($zip) || empty($zip)) {
        $errors->addMessage('Zip', 'Sorry, Zip Code is not valid.');
    }
    if (!$validate->isValidDate($birthday) || ($validate->isValidDate($birthday) > $todaysdate)) {
        $errors->addMessage('Birthday', 'Sorry, Birthday is not valid');
    }
    if (!count($errors)) {
        if ($dbconnect->addAddress($fullName, $email, $address, $city, $state, $zip, $birthday)) {
            $message = 'Address Added';
            $fullName = '';
            $email = '';
            $address = '';
            $city = '';
            $state = '';
            $zip = '';
            $birthday = '';
        } else {
            $message->addMessage('Error', 'Error, Address was not added.');
        }
    }
}

include './templates/errors.html.php';
include './templates/messages.html.php';
include './templates/add-address.html.php';
?>
