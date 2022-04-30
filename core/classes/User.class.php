<?php
include_once 'Common.class.php';

class User {
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function checkInput($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    public function getAll() {
        return $this->getAllData('users');
    }

    public function registration($fields) {
        $keys = array_keys( $fields ); 
        $columns = implode( ', ', $keys);
        $values  = ":" .implode( ',:', $keys);
        $query = "INSERT INTO users({$columns}) VALUES({$values})";

        if($stmt = $this->pdo->prepare($query)) {
            foreach ($fields as $key => $value) {
                $stmt -> bindValue(":{$key}",$value);
            }
            $stmt->execute();
            $count = $stmt->rowCount();
            return $count > 0;
        }
        return false;
    }
}