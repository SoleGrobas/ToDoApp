<?php

class DatabaseConnection{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "todolist";
    public function conexion(){
        try {
            $PDO = new PDO (
                "mysql:host=".$this->server.";database=".$this->database,$this->username,$this->password);
                return $PDO;
        } catch (PDOException $e) {
            echo "Problemas coneccion" .$e->getMessage();
        }
    }
}


?>