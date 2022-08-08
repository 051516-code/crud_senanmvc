<?php
class TaskModel
{
  private $dbTask;

  public function __construct()
  {
    $this->dbTask = new DBController;
  }

  public function getTasks()
  {
    $this->dbTask->query("SELECT * FROM tarefas ORDER BY created_at DESC");

    return $this->dbTask->resultSet();
  }

  public function getTask($id)
  {
    $this->dbTask->query("SELECT * FROM tarefas WHERE id=:id");
    // Bind Values 
    $this->dbTask->bind(':id', $id);
    return $this->dbTask->single();
  }


  public function insertTask($data)
  {
    $this->dbTask->query("INSERT INTO `tarefas` (`id`,`title`, `description`) VALUES (NULL, :title, :description)");

    // Bind Values 
    $this->dbTask->bind(':title', $data['title']);
    $this->dbTask->bind(':description', $data['description']);

    // Executamos la funcion 
    if ($this->dbTask->execute()) {
      return true;
    } else {
      return false;
    }
  }



  public function deleteTask($id)
  {
    //Prepared statement
    $this->dbTask->query(' DELETE FROM `tarefas` WHERE  `tarefas`.`id`= :id');
    //Email param will be binded with the email variable
    $this->dbTask->bind(':id', $id);
    // Executamos la funcion 
    if ($this->dbTask->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function updateTask($data)
  {
    $this->dbTask->query("UPDATE `tarefas` SET title=:title, description = :description, created_at = :created_at  WHERE id = :id  ");

    $this->dbTask->bind('id', $data['id']);
    $this->dbTask->bind('title', $data['title']);
    $this->dbTask->bind('description', $data['description']);
    $this->dbTask->bind('created_at', $data['created_at']);


    // Executamos la funcion 
    if ($this->dbTask->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
