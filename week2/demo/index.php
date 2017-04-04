<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';  //autoloads all classes used in page
        
        $validtor = new Validator();
        
        $test = new TestClass("testing");
        echo $test->getTest();
        
        $phone = '555-999-8888';
        
        // access function within class   have to use -> to access
        if ( $validtor->phoneIsValid($phone) ) {
            $message = 'Phone is Valid';
        } else {
            $message = 'Phone is NOT Valid';
        }
        
        ?>
        
        
        <?php if ( isset($message) ) : ?>
        <h2><?php echo $message; ?> </h2>
        <?php endif; ?>
        
        
    </body>
</html>
