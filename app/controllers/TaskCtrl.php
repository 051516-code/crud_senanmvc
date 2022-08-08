<?php
class TaskCtrl extends RuterController
{
  public function __construct()
  {
    $this->TaskModel = $this->model('TaskModel');
  }

  // Cargar todas las tareas 
  public function index()
  {
    $result_tasks = $this->TaskModel->getTasks();
    $data = [
      'tasks' => $result_tasks
    ];
    $this->view('tasks/index', $data);
  }

  // Guradar tareas 
  public function saveTask()
  {
    $data = [
      'title' => '',
      'description' => ''

    ];
    // atribuindo os datos do formulario nas variaveis do array data 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'title' => trim($_POST['title']),
        'description' => trim($_POST['description'])
      ];


      if (empty($data['title']) & empty($data['description'])) {

        $_SESSION['message'] = 'Os campos nao podem estar vazios';
        $_SESSION['message_type'] = 'danger';
        header("Location:index");
      } else {
        $this->TaskModel->insertTask($data);
        // enviar mensaje respuesta 
        $_SESSION['message'] = 'Tarefa salva con succeso!!!!';
        $_SESSION['message_type'] = 'success';
        // header("Location:index");
        redirect('/task/index');
      }
    }
  }


  // Editar tareass
  public function editTask($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'id' => $id,
        'title' => trim($_POST['title']),
        'description' => trim($_POST['description']),
        'created_at' => trim($_POST['created_at'])

      ];


      if ($this->TaskModel->updateTask($data)) {
        $_SESSION['message'] = 'tarefa salva con sucesse!!!';
        $_SESSION['message_type'] = 'success';
        redirect("/task/index");
      } else {
        echo "nao conseguimos salvar";
      }
    } else {
      $task = $this->TaskModel->getTask($id);

      $data = [
        'id' => $task->id,
        'title' => $task->title,
        'description' => $task->description,
        'created_at' => $task->created_at,
      ];
      $this->view('/tasks/edit', $data);
    }
  }

  // Borrar tareas 
  public function deleteTask($id)
  {
    $result = $this->TaskModel->deleteTask($id);

    if (!$result) {
      die("Query falhou");
    } else {
      $_SESSION['message'] = 'Tarefa Apagada con successo!!!!';
      $_SESSION['message_type'] = 'danger';


      redirect("/task/index");
    }
  }
}
