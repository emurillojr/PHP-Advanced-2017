<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginResource
 *
 * @author Ernesto Murillo
 */
class LoginResource extends DBSpring {
    public function login($serverData){
         $db = $this->getDb();
        $stmt = $db->prepare("SELECT * from users WHERE email = :email");
        $binds = array(
            
            ":email" => $serverData['email'],
            
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($serverData['pass'],$results['password'])) {
                return true;
            }
        }
        return false;
        } 
        
    }
    

