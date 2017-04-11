<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registration
 *
 * @author Ernesto Murillo
 */
class Registration extends DB{
    
    public function __construct() {

        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '');
    }
    
    public function insertUser($email, $password) {

        $db = $this->getDb();
        $stmt = $db->prepare("INSERT INTO users SET email = :email, password = :password, created = now()");
        $binds = array(
            
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
            
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    public function login($email, $password) {

        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * from users WHERE email = :email");
        $binds = array(
            
            ":email" => $email,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $results['password'])){
                return $results['user_id'];
                
            }
            
        }
            return 0;
     
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //"password"=>password_hash($password, PASSWORD_DEFAULT)
    
    //return true;
}
