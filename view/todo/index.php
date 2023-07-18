<?php
require_once("c://xampp/htdocs/TODO/view/head/head.php");
require_once("c://xampp/htdocs/TODO/controller/todoController.php");
$obj = new todoController();
$rows = $obj->index();
?>
<div class="mb-3">
    <a href="/TODO/view/todo/create.php" class="btn btn-primary">Add New Task</a>
</div>
<table class="table" >
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Task</th>
            <th scope="col">Options</th>

        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
        
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">View</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Edit</a>
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
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Delete</a>
                                    
                                </div>
                                </div>
                            </div>
                            </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">There are no tasks</td>
            </tr>
        <?php endif; ?>
            
        
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/TODO/view/head/footer.php");
?>