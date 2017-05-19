<!DOCTYPE html>
//
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './autoload.php';

        $msg = new Message();
        $msg->addMessage('test', 'This is a test msg 1');
        $msg->addMessage('test2', 'This is a test msg 2');
        $msg->addMessage('test3', 'This is a test msg 3');
        var_dump('<br />', $msg->getAllMessages());

        $errmsg = new ErrorMessage();
        $errmsg->addMessage('testError1', 'This is a error errmsg 1');
        $errmsg->addMessage('testError2', 'This is a error errmsg 2');
        $errmsg->addMessage('testError3', 'This is a error errmsg 3');
        var_dump('<br />', $errmsg->getAllMessages());

        $succmsg = new SuccessMessage();
        $succmsg->addMessage('success1', 'This is a success succmsg 1');
        $succmsg->addMessage('success2', 'This is a success seccmsg 2');
        $succmsg->addMessage('success3', 'This is a success seccmsg 3');
        var_dump('<br />', $succmsg->getAllMessages());

        $msg->removeMessage('test2');
        $errmsg->removeMessage('testError1');
        $succmsg->removeMessage('success3');
        ?>

        <br><br><br>
        <?php
        var_dump('<br />', $msg->getAllMessages());
        var_dump('<br />', $errmsg->getAllMessages());
        var_dump('<br />', $succmsg->getAllMessages());

        //test for error
        //$msg->removeMessage('test2');
        ?>

    </body>
</html>
