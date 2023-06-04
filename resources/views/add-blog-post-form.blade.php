<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      BIODATA MAHASISWA
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       <div class="form-group">
          <label for="exampleInputEmail1">NIM</label>
          <input type="id" id="str" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Umur</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kota</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jurusan</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">created_at</label>
          <input type="time" id="date" name="date" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">update_at</label>
          <input type="time" id="date" name="title" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>