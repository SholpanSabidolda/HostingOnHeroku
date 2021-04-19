<!DOCTYPE html>
<html>
<head>
    <title>laravel 8 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  
<body>
<div class="container">
   
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>
For applicants</h2></div>
      <div class="form-group">
      <label for="Student's name">Student's name</label>
      <input type="text" name="name"class="form control" placeholder="Name">
      <div class="panel-body">
        <label for="Student's surname">Student's surname</label>
      <input type="text" name="name"class="form control" placeholder="Surname">
      <div class="panel-body">
        <label for="Student's class">Student's class</label>
      <input type="text" name="name"class="form control" placeholder="Class">
      <div class="panel-body">
        <div class="panel-body">
        <label for="Student's IIN">Student's IIN</label>
      <input type="text" name="name"class="form control" placeholder="Document number">
      <div class="panel-body">
        <label for="Student's address">Student's home address</label>
      <input type="text" name="name"class="form control" placeholder="Home address">
      <div class="panel-body">
      <div class="panel-body">
   </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
        </form>
  
      </div>
    </div>
</div>
</body>
  
</html>