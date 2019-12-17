<h1>New Category</h1>

<form action="cat-add.php" method="POST">

  <label for="name">Name</label>
  <input type="text" id="name" name="name">

  <label for="remark">Remark</label>
  <textarea name="remark" id="remark" cols="30" rows="10"></textarea>

<input type="submit" value="Add Category">
</form>
<style>
form label{
  display:block;
  margin-top: 8px;
}
</style>
