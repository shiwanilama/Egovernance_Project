<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <style>
     /*<!-- div.sticky {
         position: -webkit-sticky;
         position: sticky;
         top: 0;
         background-color: yellow;
         padding: 50px;
         font-size: 20px;
}-->*/
</style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="image/image1.png" alt="" width="70px" height="70px"></a>
   <div>
      <h3 style="color:red;"><b>Lamki Chuha Municipality Office</b></h3>
      <h3 style="color:red;" >Bhalka,Kailali</h3>
      <h3 style="color:red;"><b>Sudurpashchim Province, Nepal</b></h3>
   </div>
   <div>
   <nav class="navbar p-0 m-0" style="color:red;">
      <a href="home.php">Home</a>
      <a href="package.php">Notice and Information</a>
      <a href="contact.php">Contact</a>
      <a href="chatapp/index.php">Login</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
   </nav>
   </div>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<section class="home">
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/image2.jpg" class="d-block" width="100%" height="70%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/image5.jpg" class="d-block" width="100%" height="50%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/image3.jpg" class="d-block" width="100%" height="70%" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<!-- home about section starts  -->
<div class="bg-light">
  <h3 class="text-center">Welcome to the website of LamkhiChuha Municipality<i class="fa-solid fa-hands-praying"></i></h3>
</div>
<div class="sticky">
   <img src="image/msg.jpg" alt="">
</div>
<section class="home-about">

   <div class="image">
      <img src="image/image7.png" alt="" width="150px" height="280px">
   </div>

   <div class="content">
      <h3>Brief Description</h3>
      <p>Lamki Chuha is a municipality in Kailali District in Sudurpashchim Province of Nepal established on 18 May 2014 by merging Baliya and Chuha, two existing village development committees.Later in May 8, 2014 it was formed by merging all the ward of Pratappur Village development committee.</p><a href="about.php" class="btn">read more</a>
   </div>
   

</section>


<!--home offer section starts  -->
<section class="home-packages">

   <h1 class="heading-title">Plans and Programs</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/hospital.jpg" alt="">
         </div>
         <div class="content">
            <h5>24jul-24july,2021&nbsp;<i class="fa-solid fa-circle-check"></i>Completed</h5>
            <p>Health</p>
            <p></p>
            <a href="learnmore.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/school.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Education</p>
            <a href="learnmore.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="image/agri.jpg" alt="">
         </div>
         <div class="content">
            <h3></h3>
            <p>Agriculture</p>
            <a href="leranmore.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   

</section>
  


<!-- home offer section ends -->

















<!-- footer section starts  -->
<!--
<section class="footer">

   

   

   <div class="box1" style="text-align:center;">
         <h3>contact info</h3>
         <br>
         <a href="#"> <i class="fas fa-phone"></i>+977-98181621515</a>
        <br>
         <a href="#"> <i class="fas fa-phone"></i>+977-9800662866</a>
         <br>
         <a href="#"> <i class="fas fa-envelope"></i>shiwash@gmail.com </a>
        <br>
         <a href="#"> <i class="fas fa-map"></i>Lamki Chuha-5,Baliya,Sudhurpaschim Pradesh</a>
      </div>

</section>-->

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>