<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<h1>Login Page</h1>
<form action="login.php" method="POST">
<div class="form-group">
<label for="username">Username</label>
<input type="text" name="uname" class="form-control" id="username">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="text" name="password" class="form-control" id="password">
</div>
<input type="submit" class="btn btn-primary" value="Admin Login">
</form>
</div>
</body>
</html>