<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Free and Paid Online Courses | MyCourses.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      body{
        background-image: url(c5.jpg);
      }
    </style>
</head>
<body>
    <nav id="navbar" data-aos="zoom-in-up">
        <div id="logo">
            <img src="logo.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="index.php"> Explore Courses</a></li>
            <!-- <li class="item"><a href="#client-section">About Us</a></li> -->
            <li class="item"><a href="index.php">Register Now</a></li>
            <li class="item"><a href="#">SignUp</a></li>
            <li class="item"><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <div data-aos="zoom-in-up">
        <!-- Left section of signup form -->
        <div>
            <h1 style="color: white; text-align: center;">Sign Up</h1>
          <h5 style="color: white; text-align: center; padding-top: 15px;">Welcome to MyCourses</h5>
            <form action="" method="POST">
             <div>
                <p><label for="userName" style="color: white;"></label></p>
                <input type="text" name="name" id="userName" autocomplete="off"  placeholder="User Name" >
             </div>
             <div>
                <p><label for="password" style="color: white;"></label></p>
                <input type="password" name="pass" id="password" required placeholder="Password">
             </div>
             <button type="button" name="submit" id="btn">Sign Up Now</button>
             
            </form>
            
        </div>
    
    </div>

            <p style="text-align: center; color: white; padding-top: 230px;"> Copyright ?? 2022, MyCourses.com. All Rights Reserved.</p> 

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 300,
        duration: 1000
    });
  </script>
</html>

<?php
include 'connection.php'; 
if(isset($_POST['submit']))
{
   $username = mysqli_real_escape_string($con,$_POST['name']);
   $pas = mysqli_real_escape_string($con,$_POST['pass']);

   $password= password_hash($pas, PASSWORD_BCRYPT);

   $emailquery = "select * from signup where username='$username' ";
   $query= mysqli_query($con, $emailquery);
   $emailcount = mysqli_num_rows($query);
   if($emailcount>0)
   {
    ?>
    <script>
        alert("Username already exists");
    </script>
    <?php
    }
    else{
        $insertquery ="insert into signup(username, pass) values('$username', '$password')";

        $iquery=mysqli_query($con, $insertquery);
        if($iquery)
        {
            ?>
            <script>
                alert("Signup Successful");
            </script>
            <?php
        }else
        {
            ?>
            <script>
                alert("Some Error Occured");
            </script>
            <?php

        }
    }
} 

?>