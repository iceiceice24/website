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
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            <a class="nav-link active" aria-current="page" href="#gallery">Gallery</a>
            <a class="nav-link active" aria-current="page" href="#gallery">Reservation</a>



          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
  <video controls class="video pt-md-5 ml-5" >
   <source src="resource/img/trailer.mp4" type=video/mp4 />
    </video>

    <div class="container mt-5 text-light">
      <div class="jumbotron">

         <a href="#gallery" class="btn btn-dark"> Movies </a>
         <a href="#gallery" class="btn btn-red"> Watch Now </a>
         <button type="button" class="btn btn-red text-danger" data-toggle="modal" data-target=".bd-example-modal-sm" >Now Showing</button>
         <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-sm">
             <div class="modal-content">
              <p class="par" style="color:Black; text-align:center;" >
                  IRON MAN
              </p>
             </div>
           </div>
         </div>


         </div>
       </div>

       </header>

   <section class ="section1" id="gallery">

     <div class="container pt-md-5">
   <div class="row">
     <div class="col-md-4">
       <div class="card cardcon mt-3">
       <h3>Iron man</h3>
         <img src="resource/img/ironman.jpg" class="card-img-top" alt="food">
         <h4>Watch Now!</h4>
         <div class="card-body">
         <p class="card-text text-justify">
           Iron Man is a 2008 American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Paramount Pictures,[N 1] it is the first film in the Marvel Cinematic Universe (MCU). Directed by Jon Favreau from a screenplay by the writing teams of Mark Fergus and Hawk Ostby, and Art Marcum and Matt Holloway, the film stars Robert Downey Jr. as Tony Stark / Iron Man alongside Terrence Howard, Jeff Bridges, Shaun Toub, and Gwyneth Paltrow. In the film, following his escape from captivity by a terrorist group, world famous industrialist and master engineer Tony Stark builds a mechanized suit of armor and becomes the superhero Iron Man.
         </p>
           <a href="reservation.php" class="btn btn-red">Click here for reservation</a>
       </div>
       </div>
     </div>
     <div class="col-md-4">
       <div class="card cardcon mt-3">
       <h3>Iron man</h3>
         <img src="resource/img/Hulk.jpg" class="card-img-top" alt="food">
         <h4>
         Watch Now!</h4>
         <div class="card-body">
         <p class="card-text text-justify">
           Hulk is a 2003 American superhero film based on the Marvel Comics character of the same name, directed by Ang Lee and written by James Schamus, Michael France, and John Turman from a story by Schamus. Eric Bana stars as Bruce Banner/Hulk, alongside Jennifer Connelly, Sam Elliott, Josh Lucas, and Nick Nolte. The film explores Bruce Banner's origins. After a lab accident involving gamma radiation, he transforms into a giant green-skinned creature whenever emotionally provoked or stressed. The United States military pursues him, and he clashes with his biological father, who has dark plans for his son. Development for the film started as far back as 1990. At one point, Joe Johnston
         </p>
           <a href="reservation2.php" class="btn btn-red">Click here for reservation</a>
       </div>
       </div>
     </div>
     <div class="col-md-4">
       <div class="card cardcon mt-3 mb-3">
       <h3>Iron Man</h3>
         <img src="resource/img/ironman.jpg" class="card-img-top" alt="food">
         <h4>Watch Now!</h4>
         <div class="card-body">
         <p class="card-text text-justify">
           Iron Man is a 2008 American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Paramount Pictures,[N 1] it is the first film in the Marvel Cinematic Universe (MCU). Directed by Jon Favreau from a screenplay by the writing teams of Mark Fergus and Hawk Ostby, and Art Marcum and Matt Holloway, the film stars Robert Downey Jr. as Tony Stark / Iron Man alongside Terrence Howard, Jeff Bridges, Shaun Toub, and Gwyneth Paltrow. In the film, following his escape from captivity by a terrorist group, world famous industrialist and master engineer Tony Stark builds a mechanized suit of armor and becomes the superhero Iron Man.
         </p>
           <a href="reservation.php" class="btn btn-red">Click here for reservation</a>
       </div>
       </div>
     </div>
   </div>
 </div>


    </section>





<footer>


  <div class="RTbtn">
          <a href="#home">  <i class="fas fa-chevron-circle-up"></i></a>

</footer>

        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
</html>
