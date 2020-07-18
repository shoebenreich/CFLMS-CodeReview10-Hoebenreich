<?php 
session_start();
require_once 'action/db_connect.php';
error_reporting(E_ALL ^  E_NOTICE); 
 ?>
<!DOCTYPE html>
<html>
<head>
   <title>Media Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <style type="text/css">
       .manage {
           width : 99%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
       }
       
       
   </style>

</head>
<body>
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="#">
   <p class="text-light mt-0 mb-0">Media Library</p> 
  </a>
  <a href= "create.php"><button type="button" class="btn btn-primary" >Add New Media</button></a>
</nav>
<div class ="manage container">


   <table  border="1" cellspacing= "1" cellpadding="3" >
   <div class="container"> 
       <thead class = "bg-light">
           <tr>
              <th>Type</th>
              <th>Title</th>
              <th>Image</th>
              <th>Author</th>
              <th>Publisher</th>
              <th>Publisher Date</th>
              <th>ISBN</th>
              <th>Description</th>
              <th>Status</th>
              <th>Modify</th>
           </tr>
       </thead>
       <tbody>

        <?php
        
           $sql = "SELECT * FROM media INNER JOIN publishers ON media.publisher_id = publishers.publisher_id INNER JOIN authors ON media.author_id = authors.author_id";
           $result = $connect->query($sql);
        
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                
                   echo  "<tr>
                       <td>" .$row['mediatype']."</td>
                       <td>" .$row['title']."</td>
                       <td><img src= ' " .$row['image']." ' width='150px'></td>
                       <td>" .$row['first_name']." " .$row['last_name']."</td>
                       <td><a href='publisher.php?id=" .$row['publisher_id']."'>" .$row['name']."</a></td>
                       <td>" .$row['date']."</td>
                       <td>" .$row['ISBN']."</td>
                       <td>" .$row['description']."</td>
                       <td>".$row['status']."</td>
                       <td>
                            <a href='details.php?id=" .$row['id']."'><button type='button' class='btn btn-success'>Show More</button></a>
                            <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-primary'>Edit</button></a>
                            <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
       </tbody>
   </table>
</div>
</div>
<footer class="bg-dark text-light">

  <div class="footer-copyright text-center py-3">© 2020 Copyright: Sanja Höbenreich
  </div>


</footer>
</body>
</html>