<?php
require_once("c://xampp/htdocs/TODO/view/head/head.php");
?>

    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ToDo</label>
        <input type="text" name="todo_task" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
   
    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>

<?php
require_once("c://xampp/htdocs/TODO/view/head/footer.php");
?>