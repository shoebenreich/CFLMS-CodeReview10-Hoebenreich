<?php 

require_once 'db_connect.php';

if ($_POST) {
   $imglink = $_POST['image'];
   $ISBN = $_POST['ISBN'];
   $type = $_POST['type'];
   $title = $_POST['title'];
   $author = $_POST['author'];
   $descritpion = $_POST['description'];
   $publisher = $_POST['publisher'];
   $publishDate = $_POST['publish_date'];
   $available = $_POST['status'];
   
   
    $sql = "INSERT INTO media (`image`, ISBN, mediatype, title, author_id, `description`, publisher_id,`date`, `status` ) VALUES ('$imglink','$ISBN','$type','$title',$author,'$descritpion',$publisher,$publishDate,'$available')";
    if($connect->query($sql) === TRUE) {
       echo "<html>
       <head>
          <title>Big Library</title>
          <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
       
          <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
           <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
           <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
          <style type= 'text/css'>
             fieldset {
                  margin : auto;
                  margin-top: 100px;
                   width: 50%;
              }
       
              table  tr th {
                  padding-top: 10px;
              }
       
              footer{
                  margin-top: 35vw;
              }
          </style>
       
       </head>
       <body>
       <nav class='navbar navbar-light bg-dark'>
         <a class='navbar-brand' href='..\index.php'>
          <p class='text-light mt-0 mb-0'>Media Library</p> 
         </a>
       </nav>
       <h3 align='center'>Your data was added.</h3>
       
       <a align='center' href='../index.php'><button type='button'class='btn btn-primary'>Return Home</button></a>
       
       
       <footer class='bg-dark text-light'>
  <div class='footer-copyright text-center py-3'>© 2020 Copyright: Sanja Höbenreich
  </div>


</footer>";
    
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>

