<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        require_once './templates/validation.php';
        require_once './models/addressCrud.php';
        

        $fullName = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $address = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $states = returnStates();
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');

        $errors = [];
        $message = '';

        if (isPostRequest()) {

            if (empty($fullName)) {
                $errors[] = 'Sorry full name is not valid';
            }
           
            if (!isValidEmail($email) || empty($email)) {
                $errors[] = 'Sorry email is not valid';
            }
            if (empty($address)) {
                $errors[] = 'Sorry address is not valid';
            }
            
            if (empty($city)) {
                $errors[] = 'Sorry city is not valid';
            }

            if (!isValidZip($zip) || empty($zip)) {
                $errors[] = 'Sorry zip code is not valid';
            }
            
            if (! isValidDate($birthday)){
            $errors[] = 'Sorry birthday is not valid';
            }
        
             if ( !count($errors) ) {
                if (addAddress($fullName, $email, $address, $city, $state, $zip, $birthday)){
                  $message = 'Address Added';
                    $fullName = '';
        $email = '';
        $address = '';
        $city = '';
        $state = '';
        $zip = '';
        $birthday = '';
                }
             }
             
            
            }


        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include './templates/add-address.html.php';
        ?>
        <br>
        <a href="index.php">View All Addresses</a>
    </body>
</html>
