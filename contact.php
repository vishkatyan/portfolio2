<?php 
//  database connection
$username = "root";
$password = "";
$server ='localhost';
$db = 'portfolio';
 

$con = mysqli_connect($server, $username, $password, $db);
 if($con){
   ?> <script>
      alert("Connection Successful");
   </script>
   <?php
 } else{
   ?> <script>
      alert("No Connection");
   </script>
   <?php
 }
if(isset ($_POST['submit'])){
    $name=validate( $_POST['name']);
    $mail= validate($_POST['mail']);
    $phone=validate( $_POST['phone']);
    $message=validate( $_POST['message']);



    $insertquery =" insert into contact(name, email, phone, message) values('$name', '$mail', '$phone', '$message')";

   $res= mysqli_query($con, $insertquery);
   if($res){
   ?> 
   <script>
    alert("Data Inserted");
   </script>


    <?php
   }

   }

?>


