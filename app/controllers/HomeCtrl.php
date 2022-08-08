<?php
class HomeCtrl extends RuterController
{
  public function __construct()
  {
    // $this->TaskModel = $this->model('TaskModel');
  }

  // Cargar todas las tareas 
  public function index()
  {
    $this->view('index');
  }
  public function Tasks()
  {
    echo "hola";
  }
}
