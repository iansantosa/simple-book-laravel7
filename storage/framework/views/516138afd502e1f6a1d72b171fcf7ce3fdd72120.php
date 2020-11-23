<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List of Book in Lybrary</h2>
  <p>All of Books in this table ready in the Library </p>            
  <a href="http://localhost/iwanblog/public/update">
    <button type="button" class="btn btn-dark" style="margin-left: 0px; font-size:16px">Insert New Record</button>
    </a>
  
  
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tittle</th>
        <th>Author</th>
		<th>ISBN</th>
        <th>Publisher</th>
        <th>Publication_year</th>
		<th>last_modified_data</th>
        <th>created_data</th>
        <th>created_at</th>
		<th>updated_at</th>
		<th><center>Edit</center></th>
    <th><center>Delete</th>
    
      </tr>
    </thead>
    <tbody>
      <?php  
//if($_SESSION["tag"] == false)
//{
   $json = file_get_contents('http://localhost/iwanblog/public/api/book/');
   $data = json_decode($json);

if (count($data->data))
{
    foreach($data->data as $idx => $stand)
    {
        echo "<tr>";
        echo "<td>$stand->id</td>";
        echo "<td>$stand->title</td>";
        echo "<td>$stand->author</td>";
        echo "<td>$stand->isbn</td>";
        echo "<td>$stand->publisher</td>";
        echo "<td>$stand->publication_year</td>";
        echo "<td>$stand->last_modified_date</td>";
        echo "<td>$stand->created_date</td>";
        echo "<td>$stand->created_at</td>";
        echo "<td>$stand->updated_at</td>";
        echo  '<td><a href="http://localhost/iwanblog/public/update">
        <button type="button" class="btn btn-dark" style="margin-left: 75px; font-size:16px">edit</button>
        </a></td>';
        echo  '<td><a href="http://localhost/iwanblog/public/update">
        <button type="button" class="btn btn-dark" style="margin-left: 75px; font-size:16px">Delete</button>
        </a></td>';

        //echo '<td> <form action="" method="POST"> <input type="button" value="edit"></form></td>';
        //echo '<td> <form action="" method="POST"> <input type="button" value="delete" onclick="return confirm(yakin?);"></td>';
       
       // echo '<a href="{{url('/edit')}" class="btn btn-xs btn-primary">Edit</a> | 
       // <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>'

        echo "<td style='text-align: center'>
        <i class='open-homeEvents fas fa-eye' data-id=$stand->id data-toggle='modal' data-target='#modalHomeEvents'></i>
        <i class='open-deletePage fas fa-trash-alt' data-id=$stand->id data-toggle='modal' data-target='#modalDelEvents'></i>
        <i class='open-updatePage fas fa-edit' data-id=$stand->id></i>
        </td>";
        echo "</tr>";
       
   // }
}
} ?>
    
      
    
    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\iwanblog\resources\views/bookrecord.blade.php ENDPATH**/ ?>