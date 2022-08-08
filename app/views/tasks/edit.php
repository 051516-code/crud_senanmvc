  <?php require APPROOT . '/views/includes/header.php'; ?>

  <main class="container p-4">

    <?php

    ?>
    <?php require APPROOT . '/views/includes/message.php'; ?>

    <div class="container p-4">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card card-body">
            <form action="<?= URLROOT ?>/task/editTask/<?php echo $data['id']; ?>" method="POST">
              <div class="form-group">
                <input name="title" type="text" class="form-control" value="<?php echo $data['title'] ?>" placeholder="Update Title">
              </div>
              <div class="form-group">
                <input name="created_at" type="text" class="form-control" value="<?php echo $data['created_at'] ?>" placeholder="Update Title">
              </div>
              <div class="form-group">
                <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $data['description']; ?></textarea>
              </div>
              <button class="btn-success" name="update">
                Update
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>