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
        <h1>Admin Page</h1>
        Here is your info: <br><br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Email</th>
                    <th>Created On</th>                            
                </tr>
            </thead>

            <tbody>           
                <tr>
                    <td><?php echo $userInfo['user_id']; ?> </td>
                    <td><?php echo $userInfo['email']; ?> </td>
                    <td><?php echo $userInfo['created']; ?> </td>
                </tr>
            </tbody>
        </table>

        <a class='btn btn-primary' href='logout.php'>Logout</a>
    </body>
</html>
