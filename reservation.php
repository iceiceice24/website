<?php
require_once "connection.php";
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

<?php
$query = "SELECT * FROM tbl_seat";
$result = mysqli_query($con,$query);
$seats = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($seats);
 ?>

  <div class="seats">

  <?php foreach($seats as $seat): ?>
  <a href=<?php $seat["is_reserved"]?print("javascript:void(0)"):print("/reserved_seat.php?id=".$seat['id']) ?>>
    <?php if($seat["is_reserved"]): ?>
     <img class="seats" src="resource\img\3.png" alt="" >
    <?php else: ?>
      <img class="seats" src="resource\img\1.png" alt="">
    <?php endif; ?>
      <h4><?php echo $seat["seat_number"] ?></h3>
      <?php if($seat["is_reserved"]): ?>
        <h5><?php echo $seat["name"] ?></h4>
      <?php else: ?>
        <h5>Available</h4>
      <?php endif; ?>
    </a>
  <?php endforeach; ?>



</div>
 <img class="right" src="resource\img\4.png" alt="" >

</header>
<header id="home">
<img class="left" src="resource\img\5.png" alt="" >

</header>


<footer>


  <div class="RTbtn">
          <a href="#home">  <i class="fas fa-chevron-circle-up"></i></a>

</footer>

        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
</html>
