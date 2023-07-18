<?php
    require_once("c://xampp/htdocs/TODO/controller/todoController.php");
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
        $todo_task = isset($_POST['todo_task']) ? htmlspecialchars($_POST['todo_task']) : '';
       
    $obj = new todoController();
    $obj->store($title,$todo_task);
    }
?>