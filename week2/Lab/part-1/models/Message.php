<?php

/**
 * Description of Message
 *
 * @author Ernesto Murillo
 */
class Message implements IMessage {

    protected $messages = [];

    public function addMessage($key, $msg) {
        $this->messages[$key] = $msg;
    }

    public function getAllMessages() {
        return $this->messages;
    }

    public function removeMessage($key) {
        if (array_key_exists($key, $this->messages)) {
            unset($this->messages[$key]);
        } else {
            throw new Exception('The key doesnt exist' . $key);
        }
    }

}
