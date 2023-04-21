<?php

   $connection = mysqli_connect('localhost','root','','admin_login');

   // if(isset($_POST['send'])){
      $name = $_POST['admin_name'];
      $email = $_POST['email'];
      $pas = $_POST['pwd'];

      $request = "select * from login where admin_name='$name' and pwd='$pas' and email='$email'  ";
      $result=$connection->query($request);
    //   echo "$result";
      if($result->num_rows != 0) {
         echo "<script>
            alert('admin login successfull');
            window.location.pathname='TRAVELWEB/data.php'
         </script>";
         // header('location:book.php');
      }
      else {
         echo "<script>
            alert('admin login successfull');
            window.location.pathname='TRAVELWEB/data.php'
         </script>";
      }
?>