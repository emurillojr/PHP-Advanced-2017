<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './autoload.php';
        
        $reg = new Registration();
        $util = new Util();
        
        if ($util->isPostRequest()){
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');    
            
            
            $reg->insertUser($email,$password);
           
        }
        
        
        
        include_once '../Registration/template/signUp.html.php';
        ?>
    </body>
</html>
