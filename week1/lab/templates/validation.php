<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function isValidEmail($email)  {
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) !== false ){
               return true;
            }
            return false;
            }
 
function isValidZip($zip)  {
    $zipRegex = '/^[0-9]{5}$/';
     if ( !preg_match($zipRegex, $zip) ) {
                 return false;
            }
            return true;
            }
            
            function isValidDate($birthday){
                return (bool) strtotime($birthday);
            }
            
            
            
            

?>

