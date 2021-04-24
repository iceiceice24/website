<?php
require_once "connection2.php";
$id2 = $_GET['id2'];
$query2 = "SELECT * FROM tbl_seat2 WHERE id2=$id2";
$seat2 = mysqli_fetch_assoc(mysqli_query($con2,$query2));
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>CinemaUna</title>


     <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
     <link href="vendor/css/all.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
     <link rel="icon" href="resource/img/movie.png" type="image/png">

   </head>
<body>
    <header id="home">
      <div class="conatiner-fluid navcon">
       <div class = "container">
         <nav class="navbar navbar-expand-lg navbar-red" id = "navbar1">

           <img src="resource/img/movie.png" alt = "logo" class="img-fluid logo"/>
       <div class="container-fluid">
       <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

       <div class="navbar-nav ml-auto">
         <a class="nav-link active" aria-current="page" href="index.php">Home</a>
         <a class="nav-link active" aria-current="page" href="index.php#gallery">Gallery</a>
         <a class="nav-link active" aria-current="page" href="index.php#gallery">Reservation</a>



       </div>
     </div>
   </div>
 </nav>
</div>
</div>


<form class="ml-5" action="process_reserve2.php" method="post">
  <h1 class="text-light"> Name </h1>
  <input type="hidden" name="id2" value="<?php echo $id2 ?>">
  <input type="text" name="name2" value="">
  <button type="submit" name="button" class="btn btn-dark">Submit</button>
  <a href="/" class="btn btn-red">Cancel</a>
</form>
</header>
</html>
