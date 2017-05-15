<?php

/**
 * A method to check is email is valid.
 *    
 * @return boolean
 */
function isValidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        return true;
    }
    return false;
}

/**
 * A method to check is zip code is valid.
 *    
 * @return boolean
 */
function isValidZip($zip) {
    $zipRegex = '/^[0-9]{5}$/';
    if (!preg_match($zipRegex, $zip)) {
        return false;
    }
    return true;
}

/**
 * A method to check is birthday is valid.
 *    
 * @return boolean
 */
function isValidDate($birthday) {
    return (bool) strtotime($birthday);
}
?>
