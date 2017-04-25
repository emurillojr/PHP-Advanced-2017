<?php

/**
 * Description of Validation
 *
 * @author Ernesto Murillo
 */
class Validation {

    /**
     * A method to check is email is valid.
     *    
     * @return boolean
     */
    public function isValidEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return true;
        }
        return false;
    }
    
    
    public function notEmptyEmail($email) {
        if (!empty($email)) {
            return true;
        }
        return false;
    }

}
