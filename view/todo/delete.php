<?php
    
    require_once("c://xampp/htdocs/TODO/controller/todoController.php");
    $obj = new todoController();
    $obj->delete($_GET['id']);
    
?>