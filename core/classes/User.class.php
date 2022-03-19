<?php

class User {
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function get_users() {
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}