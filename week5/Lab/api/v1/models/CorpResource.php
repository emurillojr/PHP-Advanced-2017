<?php

/**
 * Description of CorporationsResource
 *
 * @author Ernesto Murillo
 */
class CorpResource extends DBSpring implements IRestModel {

    // getAll = read / view all
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM corps");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }

    // get = read / view
    public function get($id) {

        $stmt = $this->getDb()->prepare("SELECT * FROM corps where id = :id");
        $binds = array(":id" => $id);
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return $results;
    }

    // post  = insert
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, owner = :owner, phone = :phone, location = :location");
        $binds = array(
            ":corp" => $serverData['corp'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":email" => $serverData['email'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone'],
            ":location" => $serverData['location']
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    // put = update
    public function put($serverData,$id) {
        $stmt = $this->getDb()->prepare("UPDATE corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, owner = :owner, phone = :phone, location = :location WHERE id = :id");
        $binds = array(
            ":id" => $id,
            ":corp" => $serverData['corp'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":email" => $serverData['email'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone'],
            ":location" => $serverData['location']
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    // delete = delete
    public function delete($id) {
        $stmt = $this->getDb()->prepare("DELETE FROM corps WHERE id = :id");
        $binds = array(":id" => $id);
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

}
