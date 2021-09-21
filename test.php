<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
   if (empty($_POST['full_name'])) {
     echo "Please Enter Your Name";
   }elseif(empty($_POST['email'])){
     echo "Please Enter Your Email";
   }elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
     echo "Please Enter Valid Email Address";
   }
   elseif(empty($_POST['phone'])){
     echo "Please Enter Your Phone Number";
   }elseif (!is_numeric($_POST['phone'])) {
     echo "Plase Enter Valid Mobile Number";
   }
   elseif(empty($_POST['gender'])){
     echo "Please Select your Gender";
   }elseif(empty($_POST['website'])){
     echo "Please Enter Your Website";
   }elseif(filter_var($_POST['website'],FILTER_VALIDATE_URL)){
     echo "Please Enter Valid Website U";
   }
   elseif(empty($_POST['message'])){
     echo "Please Type Your Complain";
   }else {
     $full_name =  $_POST['full_name'];
     $email =  $_POST['email'];
     $gender =  $_POST['gender'];
     $phone =  $_POST['phone'];
     $website =  $_POST['website'];
     $message =  $_POST['message'];

     echo $full_name."<br>";
     echo $email."<br>";
     echo $phone."<br>";
     echo $gender."<br>";
     echo $website."<br>";
     echo $message;
   }
 }
else {

}


 ?>
