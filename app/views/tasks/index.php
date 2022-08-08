<?php require APPROOT . '/views/includes/header.php'; ?>

<main class="container p-4">

  <?php require APPROOT . '/views/includes/message.php'; ?>


  <div class="row">
    <div class="col-md-4">
      <!-- Formulario  -->
      <div class="card card-body">
        <form action="<?= URLROOT ?>/task/saveTask" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripcion de la Tarea"></textarea>
          </div>
          <input type="submit" name="salvar" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <!-- /Formulario  -->


    <!-- Tabela de Tarefas  -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php require APPROOT . '/views/tasks/table.php'; ?>
        </tbody>
      </table>
    </div>
    <!-- /Tabela de Tarefas  -->
  </div>
  </div>
</main>

<?php require APPROOT . '/views/includes/footer.php'; ?>