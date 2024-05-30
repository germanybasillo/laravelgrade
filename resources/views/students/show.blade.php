<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="path/to/your/custom.css" rel="stylesheet">
</head>
<body>
<div class="card" style="width: 50%; margin-left: 30%">
  <div class="card-header">Students Page</div>
  <a class="btn btn-primary" href="javascript:history.go(-1)">Back</a>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Subject : {{ $students->subject }}</p>
        <p class="card-text">Grades : {{ $students->grades }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
    <!-- Bootstrap JS (optional, if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>