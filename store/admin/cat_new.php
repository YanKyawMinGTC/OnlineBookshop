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
<div class="container">
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
