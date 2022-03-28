<?php

class User {
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function checkInput($data) {
        return $data;
    }

    public function getAll() {
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function registration($fields) {
        $keys = array_keys( $fields ); 
        $columns = implode( ', ', $keys);
        $values  .= ":" .implode( ',:', $keys);
        $query = "INSERT INTO users({$columns}) VALUES({$values})";

        if($stmt = $this->pdo-prepare($query)) {
            foreach ($field as $key => $value) {
                $stmt -> bindValue(":{$key}",$value);
            }
            $stmt ->execute();
            $count = $stmt->rowCount();
            if ($count>0) {
                $GLOBALS['succes']= "Registration succesfull.";
                return true; 
            }
        }
        return false;
    }
}