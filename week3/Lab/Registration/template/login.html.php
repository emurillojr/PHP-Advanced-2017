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
        <a href="signUp.php">Register</a>

        <div class="container">
            <h1>Login</h1>
            <form class="form-horizontal" action="#" method="post">
                <div class="form-group">

                    Email: <input name="email" value="<?php echo $email; ?>" class="form-control"  /> <br />
                    Password: <input name="password" type="password" value="" class="form-control" /> <br />


                    <input type="submit" value="Login" class="btn btn-primary" />
                </div>
            </form>
        </div>

    </body>
</html>