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
        
        $msg = new Message();
        $msg->addMessage('test','This is a test 1');
        $msg->addMessage('test2','This is a test 2');
        
        $errmsg = new ErrorMessage();
        $errmsg->addMessage('testErr','This is a error 1');
        $errmsg->addMessage('testErr2','This is a error 2');
        
        //var_dump('<br />', $msg->getAllMessages());
        $msg->removeMessage('test');
        
        var_dump('<br />', $msg->getAllMessages());
        var_dump('<br />', $errmsg->getAllMessages());
        
        
        ?>
    </body>
</html>
