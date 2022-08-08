<?php
class UsersCtrl extends RuterController
{
  public function __construct()
  {
    // $this->view('users/index');
  }
  // Cargar todas las tareas 
  public function index()
  {
    // enviar mensaje respuesta 
    $_SESSION['message'] = 'bienvenido nuevo usuario!!!';
    $_SESSION['message_type'] = 'success';
    $this->view('users/index');
  }
}
