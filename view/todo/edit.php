<?php
    require_once("c://xampp/htdocs/TODO/view/head/head.php");
    require_once("c://xampp/htdocs/TODO/controller/todoController.php");
    $obj = new todoController();
    $task = $obj->show($_GET['id']);
    
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Edit your Task</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $task[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputtext" class="col-sm-2 col-form-label">Edit Title</label>
        <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputtext" value="<?= $task[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputtext" class="col-sm-2 col-form-label">Edit Description</label>
        <div class="col-sm-10">
        <input type="text" name="todo_task" class="form-control" id="inputtext" value="<?= $task[2]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Update">
        <a class="btn btn-danger" href="show.php?id<?= $task[0]?>">Cancel</a>
    </div>
</form>
<?php
    require_once("c://xampp/htdocs/TODO/view/head/footer.php");
?> 