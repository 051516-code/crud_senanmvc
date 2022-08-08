<?php foreach ($data['tasks'] as $task) { ?>


  <tr>
    <td><?= $task->title ?></td>
    <td><?= $task->description ?></td>
    <td><?= $task->created_at ?></td>
    <td>
      <a href="<?= URLROOT; ?>/task/editTask/<?= $task->id; ?>" class="btn btn-secondary">
        <i class="fas fa-marker"></i>
      </a>
      <a href="<?= URLROOT; ?>/task/deleteTask/<?= $task->id; ?>" class="btn btn-danger">
        <i class="far fa-trash-alt"></i>
        <input type="checkbox" name="checked" id="">
      </a>

    </td>
  </tr>

<?php } ?>