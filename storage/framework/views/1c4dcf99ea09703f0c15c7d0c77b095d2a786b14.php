<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin - Gullas College of Medicine</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  
  <link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

</head>
<body>

  <!--================ Banner Section start =================-->
  <section class="hero-banner">
    <div class="container">
      <br>
      <h3><b>Administrator Panel</b></h3>
      <small><i>Only authorized personnel are allowed to access this page.</i></small>
      <hr>
      <h5 class="text-center"><b>Create New Announcement</b></h3>
      <?php if(!empty($success)): ?>
        <div class="alert alert-success" role="alert">
          <?php echo e($success); ?>

        </div>
      <?php endif; ?>
      <form method="POST" action="<?php echo e(route('createannouncement')); ?>">
      <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="title">Announcement Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>        
        <div class="form-group">
          <label for="content">Announcement Content</label>
          <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Create New Announcement</button>
      </form>
      <hr>
      <?php if(!empty($deleted)): ?>
        <div class="alert alert-warning" role="alert">
          <?php echo e($deleted); ?>

        </div>
      <?php endif; ?>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Announcement</th>
                <th>Date Posted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php

          $announcements = App\Announcement::all();
        ?>
        <tbody>
          <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($announcement->title); ?></td>
                <td><?php echo e(date('g:i:s A F j, Y', strtotime($announcement->created_at))); ?></td>
                <td>
                  <form action="<?php echo e(route('deleteannouncement')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($announcement->id); ?>">
                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                  </form>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    </div>
  </section>
  <!--================ Banner Section end =================-->
  <script src="<?php echo e(asset('vendors/jquery/jquery-3.2.1.min.js')); ?>"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
  </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\gcm\resources\views/admin.blade.php ENDPATH**/ ?>