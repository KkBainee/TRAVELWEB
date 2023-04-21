<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<style>
/* Style The Dropdown Button */
.dropbtn {

  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: white;
}
</style>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="#" class="logo"> <i class="fas fa-paper-plane"></i> travel guide.co </a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <div class="dropdown">
  <button class="dropbtn"><i class="fas fa-user"></i></button>
  <div class="dropdown-content">
    <a href="login.php">User</a>
    <a href="admin.php">Admin</a>
  </div>
</div>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/varanasi.jpeg" alt="">
         </div>
         <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> varanasi </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="varanasi.php" class="btn">Explore</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/chennai.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> chennai </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="chennai.php" class="btn">Explore</a>
         </div>
      </div>

      
      <div class="box">
         <div class="image">
            <img src="images/mysore.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> mysore </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="mysore.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/goa.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> goa </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="goa.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/manali.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> manali </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="manali.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/vizag.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> vizag </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="vizag.php" class="btn">Explore</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/kerala.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> kerala </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="book.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/tirupati.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> tirupati </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="tirupati.php" class="btn">Explore</a>
         </div>
      </div>


      <div class="box">
         <div class="image">
            <img src="images/udaipur.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> udaipur </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="book.php" class="btn">Explore</a>
         </div>
      </div>


      <div class="box">
         <div class="image">
            <img src="images/hyd.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> hyderabad</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="book.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mumbai.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> mumbai</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="book.php" class="btn">Explore</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ladakh.jpeg" alt="">
         </div>
         <div class="content">
         <h3> <i class="fas fa-map-marker-alt"></i> ladakh </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="book.php" class="btn">Explore</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->
















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> aask33930@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> hyderabad, india - 500049 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>travel guide.co</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script1.js"></script>

</body>
</html>