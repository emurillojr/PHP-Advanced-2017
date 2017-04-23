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
        $upload = new Uploader();

        try {
            $fileName = $upload->upLoad('upfile');
        } catch (RuntimeException $e) {
            $error = $e->getMessage();
        }
        ?>

        <?php if (isset($fileName)) : ?>
            <h2>Your file uploaded successfully.</h2>
        <?php else: ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-success">Add Another File</a>
        <a href="view.php" class="btn btn-info">View Files</a>

    </body>
</html>
