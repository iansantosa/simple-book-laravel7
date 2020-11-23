<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="http://localhost/iwanblog/public/api/book" method="post">
  <label>Title</label><br>
  <input type="text" id="title" name="title" ><br>
  <label>Author</label><br>
  <input type="text" id="author" name="author" ><br>
  <label>ISBN</label><br>
  <input type="text" id="isbn" name="isbn" ><br>
  <label>Publisher</label><br>
  <input type="text" id="publisher" name="publisher" ><br>
  <label>Publication Year</label><br>
  <input type="number" id="publication_year" name="publication_year" ><br>
  <label>last_modified_date</label><br>
  <input type="date" id="last_modified_date" name="last_modified_date" ><br>
  <label>Publication Year</label><br>
  <input type="number" id="publication_year" name="publication_year" ><br>
  <label>last_modified_date</label><br>
  <input type="date" id="last_modified_date" name="last_modified_date" ><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html><?php /**PATH C:\xampp\htdocs\iwanblog\resources\views/update.blade.php ENDPATH**/ ?>