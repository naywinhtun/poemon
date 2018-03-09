<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center><h2>Update Form</h2>
      <a href="/logout">Logout</a>
      <form class="form-horizontal" method="POST" action="user/update">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Enter Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phno">Contact Phno:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phno" name="phone" value="{{$user->phone}}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="phno">User Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
          </div>
        </div>

        
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>

     @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ( $errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
    </center>
  </div>
</body>
</html>

<?php
if(Session::has('message')){
  ?>
  <p class="alert alert-danger">{{ Session::get('message') }}</p>
  <?php
}
?>