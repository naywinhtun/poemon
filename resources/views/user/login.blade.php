<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center><h2>Login Form</h2>
    <a href="/register">Register</a>
			<form class="form-horizontal" method="POST" action="user/login">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">User Name:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="name" name="email" placeholder="Enter Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10"> 
            <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
          </div>
        </div>
        
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </center>
  </div>
</body>
</html>

