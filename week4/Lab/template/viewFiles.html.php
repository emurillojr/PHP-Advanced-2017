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

        <h2>Your Files:</h2>

        <ol>
            <?php foreach ($directory as $fileInfo) : ?>        
                <?php if ($fileInfo->isFile()) : ?>
                    <li><?php echo $fileInfo ?> <br>

                        <form action="#" method="POST">
                            <a href="details.php?filePath=<?php echo $fileInfo->getPathname() ?>" class="btn btn-info">View</a> &nbsp;&nbsp;
                            <input type="hidden" name="file" value="<?php echo $fileInfo->getPathname(); ?>" />
                            <input type="submit" name="submit" class="btn btn-danger" value="Delete" />
                        </form> 
                    </li>

                <?php endif; ?>
                <?php
            endforeach;
            echo $fileInfo->getPathname();
            ?>
        </ol>
        <br />
        <a href="index.php" class="btn btn-success" >Add Another File</a>

    </body>
</html>
