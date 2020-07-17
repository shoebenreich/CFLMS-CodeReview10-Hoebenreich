<?php 

require_once 'action/db_connect.php';

if(isset($_GET['id']))
        { $id = $_GET['id'];}

        $sql3 = "SELECT media.mediatype, media.title, media.image, authors.first_name, authors.last_name, media.date, media.ISBN, media.description, media.status FROM media INNER JOIN authors ON authors.author_id = media.author_id WHERE id = $id";
        $result = $connect->query($sql3);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Details</title>
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_array($result);
            echo "<div class='container mt-5'> 
            <h3 class='text-center my-5'>".$data['title']."</h3>
            <div class='d-flex justify-content-around'>
            <img src='".$data['image']."'>
            <p class='ml-5 my-5'>Author: ".$data['first_name']. " " . $data['last_name'] ."<br>Published Date: ".$data['date']."<br>Description: ".$data['description']."</p></div>
            <p class='text-center'><a href='index.php'><button type='button' class='btn btn-primary'>Go back</button></a></p>";
        } else  echo "ERROR!";
        ?>
        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>