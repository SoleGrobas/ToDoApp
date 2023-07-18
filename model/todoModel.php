<?php

class todoModel{
    private $PDO;
    public function __construct(){
        require_once("c://xampp/htdocs/TODO/database/DatabaseConnection.php");
        $con = new DatabaseConnection();
        $this->PDO = $con->conexion();
        $this->PDO->exec("USE todolist");
    }
    public function insert($title,$todo_task){
        $statement = $this->PDO->prepare("INSERT INTO tasks VALUES(null,:title,:todo_task)");
        $statement->bindParam(":title",$title);
        $statement->bindParam(":todo_task",$todo_task);
        
        return($statement->execute()) ? $this->PDO->lastInsertId() : false ;
    }
    public function show($id){
        $statement = $this->PDO->prepare("SELECT * FROM tasks where id = :id limit 1");
        $statement->bindParam(":id",$id);
        return ($statement->execute()) ? $statement->fetch() : false ;
    }
    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM tasks");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    public function update($id,$title,$todo_task){
        $statement = $this->PDO->prepare("UPDATE tasks SET title = :title, todo_task = :todo_task WHERE id = :id");
        $statement->bindParam(":id",$id);
        $statement->bindParam(":title",$title);
        $statement->bindParam(":todo_task",$todo_task);
        return ($statement->execute()) ? $id : false;
    }
    public function delete($id){
        $statement = $this->PDO->prepare("DELETE FROM tasks where id = :id");
        $statement->bindParam(":id",$id);
        return ($statement->execute()) ? true : false ;
    }
}


?>