<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
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
<div>
<section class="home-packages">

<h1 class="heading-title">Contact Info</h1>

<div class="box-container">

   <div class="box" >
      <div class="image" style="object-fit:container;">
         <img src="image/sushila.jpg" alt="">
      </div>
      <div class="content">
         <h3>Sushila Shahi</h3>
         <h3>Mayor</h3>
        <h3>Mobile:98858426212</h3>
         
      </div>
   </div>

   <div class="box" >
      <div class="image">
         <img src="image/juna.png" alt="">
      </div>
      <div class="content">
         <h3>Juna Chaudhary</h3>
         <h3>Deputy Mayor</h3>
         <h3>Mobile:9858426211</h3>
         <!--<a href="book.php" class="btn">book now</a>-->
      </div>
   </div>
   
   <div class="box">
      <div class="image">
         <img src="image/sher.png" alt="">
      </div>
      <div class="content">
         <h3>Sher Bahadur Budha</h3>
         <h3>Chief Administrative Officer</h3>
         <h3>Mobile:9858436111</h3>
         <h5><b><i class="fa-solid fa-envelope"></i>sher.mnr@gmail.com</b></h5>
         <!--<a href="book.php" class="btn">book now</a>-->
      </div>
   </div>

</div>

</body>
</html>