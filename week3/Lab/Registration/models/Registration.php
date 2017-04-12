<?php

/**
 * Description of Registration
 *
 * @author Ernesto Murillo
 */
class Registration extends DB {

    public function __construct() {

        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '');
    }

    // insert a new user
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

    // login 
    public function login($email, $password) {

        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * from users WHERE email = :email");
        $binds = array(
            ":email" => $email,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $results['password'])) {
                return $results['user_id'];
            }
        }
        return 0;
    }

    // check if email exists 
    public function userExists($email) {

        $db = $this->getDb();
        $stmt = $db->prepare("SELECT email from users WHERE email = :email");
        $binds = array(
            ":email" => $email,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // get userID info
    public function getUserInfo($user_id) {

        $db = $this->getDb();
        $stmt = $db->prepare("SELECT user_id, email, created from users WHERE user_id = :user_id");
        $binds = array(
            ":user_id" => $user_id,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            return $results;
        }
        return null;
    }

}
