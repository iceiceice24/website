<?php
require_once "connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM tbl_seat WHERE id=$id";
$seat = mysqli_fetch_assoc(mysqli_query($con,$query));
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
         <a class="nav-link active" aria-current="page" href="reservation.php">Reservation</a>



       </div>
     </div>
   </div>
 </nav>
</div>
</div>


<form class="ml-5" action="process_reserve.php" method="post">
  <h1 class="text-light"> Name </h1>
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <input type="text" name="name" value="">
  <button type="submit" name="button" class="btn btn-dark">Submit</button>
  <a href="/" class="btn btn-red">Cancel</a>
</form>
</header>
</html>
