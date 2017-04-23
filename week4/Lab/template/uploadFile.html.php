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

        <form enctype="multipart/form-data" action="upload.php" method="POST" >
            <h2>Upload Files </h2> <br><br>
            <input name="upfile" type="file" /><br><br>
            <input type="submit" value="Upload File" class="btn btn-success"/>
        </form>
        <br />
        <a href="view.php" class="btn btn-info">View Files</a>
    </body>
</html>
