<?php

class AddressDB extends DB {

    public function __construct() {

        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '');
    }

    /**
     * A method to add address.
     *    
     * @return boolean
     */
    public function addAddress($fullName, $email, $address, $city, $state, $zip, $birthday) {

        $db = $this->getDb();
        $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
        $binds = array(
            ":fullname" => $fullName,
            ":email" => $email,
            ":addressline1" => $address,
            ":city" => $city,
            ":state" => $state,
            ":zip" => $zip,
            ":birthday" => $birthday,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * A method to get all address data.
     *    
     * @return Array
     */
    public function getAllAddresses() {

        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM address");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $results;
    }

}
