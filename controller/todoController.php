<?php
class todoController{
    private $model;
    public function __construct(){
        require_once("c://xampp/htdocs/TODO/model/todoModel.php");
        $this->model = new todoModel();
    }
    public function store($title, $todo_task){
        $id = $this->model->insert($title, $todo_task);
       
        return ($id!=false) ? header("Location:show.php?id=".$id): header("Location:create.php");
    }
    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $title, $todo_task){
        return ($this->model->update($id,$title,$todo_task) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
    }
}

?>