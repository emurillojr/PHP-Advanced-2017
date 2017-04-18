<?php

/**
 *
 * @author Ernesto Murillo

 */
interface IMessage {

    public function addMessage($key, $msg);

    public function removeMessage($key);

    public function getAllMessages();
}
