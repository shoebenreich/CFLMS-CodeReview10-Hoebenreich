<?php
    require_once 'action/db_connect.php';
    // error_reporting(E_ALL ^  E_NOTICE);
    if(isset($_GET['id']))
        { $item_id = $_GET['id'];}
    $sql2 = "SELECT media.mediatype, media.title, media.image, authors.first_name, authors.last_name, media.date, media.ISBN, media.description, media.status FROM media INNER JOIN authors ON authors.author_id = media.author_id WHERE publisher_id = $item_id";
    $result = $connect->query($sql2);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Publisher</title>
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="index.php">
   <p class="text-light mt-0 mb-0">Media Library</p> 
  </a>
  <a href= "create.php"><button type="button" class="btn btn-primary" >Add New Media</button></a>
</nav>
    <div class="container">
    <table  border="1" cellspacing= "1" cellpadding="3" class="mx-auto my-5">
   <div class="container"> 
       <thead class="thead bg-light">
           <tr>
              <th>Type</th>
              <th>Title</th>
              <th>Image</th>
              <th>Author</th>
              <th>Published Date</th>
              <th>ISBN</th>
              <th>Description</th>
              <th>Status</th>
           </tr>
       </thead>
       <tbody>
    <?php
            if(mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_array($result)) {
                   echo  "<tr>
                       <td>" .$row['mediatype']."</td>
                       <td>" .$row['title']."</td>
                       <td><img src= '" .$row['image']." ' width='150px'></td>
                       <td>" .$row['first_name'] . " " .$row['last_name']."</td>
                       <td>" .$row['date']."</td>
                       <td>" .$row['ISBN']."</td>
                       <td>" .$row['description']."</td>
                       <td>".$row['status']."</td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
           }
            ?></table></div>
        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>