<?php

/**
 * Description of util
 *
 * @author Ernesto Murillo
 */
class Util {

    /**
     * A method to check if a Post request has been made.
     *    
     * @return boolean
     */
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }

}
