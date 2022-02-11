<!DOCTYPE html>
<html>
<head>
    <title>PHP & MongoDB</title>
    <!-- Dy Reyes Angelo Nathan, Tagulao, Paolo, Santiago Aenon Jorish -->
   
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style type="text/css">
    body {
    background-color: #444442;
    padding-top: 85px;
}

 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #313AB2;
  border: none;
  border-radius: 15px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
</head>

<body>


<div class="container">

<a href="create.php" id="submit-btn" class="button">Add a data</a>
<a href="ito.php" id="submit-btn" class="button">Find a data</a>



<?php


   if(isset($_SESSION['success'])){
      echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
   }


?>

<table class="table table-dark table-striped">
   <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
      
   </tr>
   <?php


      require 'config.php';
      



      $user = $collection->find([]);

      foreach($user as $user) {
         echo "<tr>";
         echo "<td>".$user->name."</td>";
         echo "<td>".$user->email."</td>";
         echo "<td>".$user->password."</td>";
         echo "<td>";
         echo "<a href='edit.php?id=".$user->_id."' class='edit-btn'>Edit</a>";
         echo "<a href='delete.php?id=".$user->_id."' class='delete-btn'>Delete</a>";
         echo "</td>";
         echo "</tr>";
      };




   ?>
</table>
</div>
<br/>
<br/>

</body>
</html>