<?php

class Common {
    public function getAllData($table) {
        $stmt = $this->pdo->prepare("SELECT * FROM ${table}");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}