<?php
    require_once("c://xampp/htdocs/TODO/view/head/head.php");
    require_once("c://xampp/htdocs/TODO/controller/todoController.php");
    $obj = new todoController();
    $data = $obj->show($_GET['id']);
   
?>

<h2 class="text-center">ToDo List</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Back</a>
    <a href="edit.php?id=<? $data[0]?>" class="btn btn-success">Edit</a>
    
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete your task?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Once the task is deleted, it cannot be recovered.
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            <a href="delete.php?id=<?= $data[0]?>" class="btn btn-danger">Delete</a>
            
        </div>
        </div>
    </div>
    </div>
    </div>
<table class="table container-fluid" >
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Task</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col"><?= $data["id"]?></th>
            <th scope="col"><?= $data["title"]?></th>
            <th scope="col"><?= $data["todo_task"]?></th>
        </tr>
    </tbody>
</table>
<?php
    require_once("c://xampp/htdocs/TODO/view/head/footer.php");
?> 