<?php

include './autoload.php';

$dbconnect = new AddressDB();
$util = new Util();
$validate = new Validation();

$fullName = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'addressline1');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$birthday = filter_input(INPUT_POST, 'birthday');

$states = $util->returnStates();

$errors = [];
$message = '';


if ($util->isPostRequest()) {

    if (empty($fullName)) {
        $errors[] = 'Sorry, Full Name cannot be blank.';
    }
    if (!$validate->isValidEmail($email) || empty($email)) {
        $errors[] = 'Sorry, Email is not valid.';
    }
    if (empty($address)) {
        $errors[] = 'Sorry, Address cannot be blank.';
    }
    if (empty($city)) {
        $errors[] = 'Sorry, City cannot be blank.';
    }
    if (!$validate->isValidZip($zip) || empty($zip)) {
        $errors[] = 'Sorry, Zip Code is not valid.';
    }

    if (!$validate->isValidDate($birthday)) {
        $errors[] = 'Sorry, Birthday is not valid';
    }
    if (strToTime($birthday) > time()) {
        $errors[] = 'Sorry, Birthday can not be greather than today.';
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
            $message = 'Error, Address was not added.';
        }
    }
}

include './templates/errors.html.php';
include './templates/messages.html.php';
include './templates/add-address.html.php';
?>
