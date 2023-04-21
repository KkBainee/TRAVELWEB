<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">  
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


</head>
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

<div class="heading" style="background:url(images/admin.jpg) no-repeat">
   <h1>admin login</h1>
</div>

<!-- login section starts  -->

<section class="booking">

   <h1 class="heading-title">admin login</h1>

   <form action="admin_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" placeholder="enter name" name="admin_name">
         </div>
         <div class="inputBox">
            <span>password :</span>
            <input type="text" placeholder="enter your password" name="pwd">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="text" placeholder="enter email" name="email">
         </div>
      </div>

      <!-- <input type="submit" value="login" class="btn" name="send" onclick={() => alert('login succesful')}> -->
      <button class="btn btn-info" type="submit">Login</button>
    </form>


  

</section>

<!-- booking section ends -->








