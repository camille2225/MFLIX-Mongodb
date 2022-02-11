<?php
   session_start();
   $name = $_POST['findone'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP & MongoDB</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>


<div class="container">

<br/>
<a href="index.php" id="submit-btn" class="submit-btn">Back</a>


<table class="table-bordered">
   <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
      
   </tr>
   <?php


      require 'config.php';
      



      $user = $collection->find(["name"=>$name]);


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


</body>
</html>