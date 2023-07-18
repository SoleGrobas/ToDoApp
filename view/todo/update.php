<?php
    
    require_once("c://xampp/htdocs/TODO/controller/todoController.php");
    $obj = new todoController();
    $obj->update($_POST['id'],$_POST['title'],$_POST['todo_task']);
    
?>