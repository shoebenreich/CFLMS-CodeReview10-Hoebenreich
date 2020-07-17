<?php 

require_once 'action/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <title >CodeReview 10</title>
   <style>
     footer{
           margin-top: 20vw;
       }
   .padding{
    padding-top: 320px;
   }
   
   
   </style>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="index.php">
   <p class="text-light mt-0 mb-0">Media Library</p> 
  </a>
</nav>
<div class="container padding">
<h3 align="center">Do you really want to delete this Dataset?</h3>
<form align='center' action ="action/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit" class="btn btn-success">Yes, delete it!</button >
   <a href="index.php"><button type="button" class="btn btn-danger">No, go back!</button></a>
</form>
</div>
<footer class="bg-dark text-light">
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Sanja Höbenreich
  </div>


</footer>
</body>

</html>

<?php
}
?>