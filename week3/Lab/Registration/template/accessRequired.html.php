<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //session_start();
        $reg = new Registration();
        if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] <= 0) {
            exit('Please login.');
        }
        ?>
    </body>
</html>
