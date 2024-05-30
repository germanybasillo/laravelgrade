<x-app-layout>
  <x-slot name="header">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="path/to/your/custom.css" rel="stylesheet">

<div class="card" style="width: 50%; margin-left: 30%">
  <div class="card-header">Contactus Page</div>  
  <a class="btn btn-primary" href="javascript:history.go(-1)">Back</a>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$students->subject}}" class="form-control"></br>
        <label>Grades</label></br>
        <input type="text" name="grades" id="grades" value="{{$students->grades}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
    <!-- Bootstrap JS (optional, if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </x-app-layout>
 