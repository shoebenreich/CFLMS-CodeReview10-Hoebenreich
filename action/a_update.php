<?php 

require_once 'db_connect.php';
error_reporting(E_ALL ^  E_NOTICE);

if ($_POST) {
   $type = $_POST['mediatype'];
   $title = $_POST['title'];
   $imglk = $_POST['image'];
   $author = $_POST['author'];
   $publisher = $_POST['publisher'];
   $pdate = $_POST['publish_date'];
   $ISBN = $_POST['ISBN'];
   $descritpion = $_POST['description'];
   $status = $_POST['status'];

   $id = $_POST['id'];

   $sql = "UPDATE media SET `mediatype` = '$type', title = '$title', `image` = '$imglk', author_id = '$author', publisher_id = '$publisher', `date` = '$pdate', ISBN = '$ISBN',  `description` = '$descritpion'  WHERE id = {$id}" ;

   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>