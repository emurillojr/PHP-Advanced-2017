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

        <h2>File Details: </h2>

        <a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download File</a>&nbsp; &nbsp;
        <a href="index.php" class="btn btn-success">Add Another File</a> &nbsp; &nbsp;
        <a href="view.php" class="btn btn-info">View Files</a> <br><br>

        <b>File Name: </b><?php echo $filePath->getFilename(); ?><br>
        <b>File Size: </b> <?php echo filesize($file_path); ?> bytes <br>
        <b>File Date: </b><?php echo date("l F j, Y, g:i a", $filePath->getMTime()); ?><br>
        <b>File Type: </b><?php echo $extension; ?><br> <br> 

        <?php if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif'): ?>
            <img height="400px" src="<?php echo $file_path; ?>" />
        <?php endif; ?>  

        <?php if ($extension == 'txt'): ?>
            <?php
            $file = new SplFileObject($file_path, "r");
            $contents = $file->fread($file->getSize());
            ?>
            <textarea readonly="" style="height: 400px"><?php echo $contents; ?></textarea>
        <?php endif; ?>

        <?php if ($extension == 'pdf' || $extension == 'html'): ?>
            <object src="<?php echo $file_path; ?>"><embed height="400px" src="<?php echo $file_path; ?>"></embed></object>                                                    
        <?php endif; ?>

        <?php
        if ($filePath->isFile()) :
            ?>
            <form action="./view.php" method="POST">
                <input type="hidden" name="file" value="<?php echo $filePath->getPathname(); ?>" />
                <input type="submit" name="submit" class="btn btn-danger" value="Delete" />
            </form>
        <?php endif; ?>

    </body>
</html>
