<html>
<head>
   <title>CodeReview 10</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <style type= "text/css">
      fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 10px;
       }

       footer{
           margin-top: 20vw;
       }
   </style>

</head>
<body>
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="index.php">
   <p class="text-light mt-0 mb-0">Media Library</p> 
  </a>
</nav>
<fieldset >
   
<div align="center">
<legend>Add New Media</legend>
   <form  action="action/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Type</th>
               <td><select name="type">
                <option value="Book">Book</option>
                <option value="CD">CD</option>
                <option value="DVD">DVD</option>
               </select>
               </td>
           </tr>    
           <tr>
               <th>Title</th>
               <td><input  type="text" name= "title" placeholder="Title" /></td>
           </tr>
           <tr>
               <th>Image link</th>
               <td><input type="text"  name="image" placeholder ="Image Link"></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input type="text"  name="author" placeholder ="Author"></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisher" placeholder ="Publisher"></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text" name="publish_date" placeholder ="Publish Date"></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="number"  name="ISBN" placeholder ="ISBN Number"></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="description" placeholder ="Short Description"></td>
           </tr>
           <tr><th>Available</th>
           <td><select name="status">
           <option value="available">Available</option>
           <option value="reserved">Reserved</option>
           </select></td></tr>
           <tr>
               <td><button type ="submit" class="btn btn-success">Insert </button></td>
               <td><a href= "index.php"><button type="button" class="btn btn-light bg-dark text-white">Back</button></a></td>
           </tr>
       </table>
   </form>
</fieldset>
</div>
<footer class="bg-dark text-light">
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Sanja Höbenreich
  </div>


</footer>
</body>
</html>