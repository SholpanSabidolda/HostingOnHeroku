@extends('layout')
@section('content')

    <title>laravel 8 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  
<body>
  <div>
  <img src="https://previews.123rf.com/images/drcmarx/drcmarx1703/drcmarx170300003/75722150-checkout-icon.jpg"width="500"height="500">
</div>
<div class="container">
   
    <div class="panel panel-success">
      <div class="panel-heading"><h2>
Payment by instalments</h2></div>
      <div class="form-group">
        <div class="panel-body">
      <label for="Surname">Surname</label>
      <input type="text" name="name"class="form control" placeholder="Surname">
        <div class="form-group">
      <div class="panel-body">
        <label for="Student's surname">Name</label>
      <input type="text" name="name"class="form control" placeholder="Name">
      <div class="panel-body"> <label for="IIN">IIN</label>
      <input type="text" name="name"class="form control" placeholder="Document number">
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
</body>
</html>

@stop
