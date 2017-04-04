<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            include './models/TestClass.php';
            
            // new instance of this class  pass parameter of constructor
            $test = new TestClass('testing');
            
           
            
            echo $test->getTest();
            
            //$test->setTest(true);  //was set to a bool
            $test->setTest("true");   //correct set to string
            
             echo $test->getTest();
             
            
            //$test->
        
        ?>
    </body>
</html>
