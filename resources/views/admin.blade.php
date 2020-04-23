<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin - Gullas College of Medicine</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  
  <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
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
      @if(!empty($success))
        <div class="alert alert-success" role="alert">
          {{$success}}
        </div>
      @endif
      <form method="POST" action="{{ route('createannouncement') }}">
      @csrf
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
      @if(!empty($deleted))
        <div class="alert alert-warning" role="alert">
          {{$deleted}}
        </div>
      @endif
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
          @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->title }}</td>
                <td>{{date('g:i:s A F j, Y', strtotime($announcement->created_at))}}</td>
                <td>
                  <form action="{{ route('deleteannouncement') }}" method="POST">
                  @csrf
                    <input type="hidden" name="id" value="{{ $announcement->id }}">
                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                  </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

    </div>
  </section>
  <!--================ Banner Section end =================-->
  <script src="{{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
  </script>
</body>
</html>