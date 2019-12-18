<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
    textarea{
    width: 100%;
    resize:none;
  }
  </style>
</head>
<body>
<?php include("confs/auth.php")?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="cat_list.php">Manage Categories</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="book_list.php">Manage Book List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php">Manage Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<h1>New Category</h1>
<form action="cat_add.php" method="POST">
  <div class="form-group">
  <label for="name">Name</label>
  <input type="text" id="name" name="name" class="form-control">
  </div>
<div class="form-group">
<label for="remark">Remark</label>
  <textarea name="remark" id="remark" class="form-control "></textarea>
</div>
<input type="submit" value="Add Category" class="btn btn-primary">
</form>
</div>
</body>
</html>
