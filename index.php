<?php
   require_once("header1.php");

 ?>

        <div class="">
               <p>lorem20 lorem lorem20 lorem  lorem20 lorem  lorem20 lorem  lorem20 lorem
               lorem20 lorem lorem20 lorem  lorem20 lorem  lorem20 lorem  lorem20 lorem
             lorem20 lorem lorem20 lorem  lorem20 lorem  lorem20 lorem  lorem20 lorem
           lorem20 lorem lorem20 lorem  lorem20 lorem  lorem20 lorem  lorem20 lorem</p>
        </div>

        <?php
              include("footer.php");

         ?>





<!-- <?php
$error_name = " ";
$error_email = " ";
$error_gender = " ";
$error_phone = " ";
$error_website = " ";
$error_message = " ";

if ($_SERVER['REQUEST_METHOD']=='POST') {
  if(empty($_POST['full_name'])){
    $error_name ="Please Enter Your Name";
  }elseif(empty($_POST['email'])){
    $error_email= "Please Enter your Email Adddress";
  }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $error_email= "Please Enter your Valid Email Address";
  }
  elseif(empty($_POST['gender'])){
    $error_gender ="Please Select Your Gender";
  }
  elseif(empty($_POST['phone'])){
    $error_phone ="Please Enter your Mobile No";
  }elseif (!is_numeric($_POST['phone'])) {
     $error_phone = "Please Enter Your Valid Mobile Number";
  }
  elseif(empty($_POST['website'])){
    $error_website = "Please Enter your Website Url";
  }elseif (!filter_var($_POST['website'],FILTER_VALIDATE_URL)) {
    $error_website = "Please Enter Your Valid website Url";
  }
  elseif(empty($_POST['message'])){
    $error_message = "Please Type Your Problem";
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
<form  action="" method="post">
  <table>
    <tr>
      <td>
         <label for="">Full Name</label>
      <span style="color:red">*</span>  <input type="text" name="full_name" placeholder="Enter Your Name Here"> <span style="color:red"><?php echo $error_name; ?></span>
    </tr>
    <tr>
      <td>
         <label for="">Email</label>
        <span style="color:red">*</span>  <input type="text" name="email" placeholder="Enter Your E-Mail" >  <span style="color:red"><?php echo $error_email; ?></span>
      </td>
    </tr>
    <tr>
      <td>
         <label for="">Phone No</label>
        <span style="color:red">*</span>  <input type="Phone" name="phone" placeholder="Enter Your Mobile Number" >  <span style="color:red"><?php echo $error_phone; ?></span>
      </td>
    </tr>
    <tr>
      <td>
         <label for="">Website</label>
        <span style="color:red">*</span>  <input type="text" name="website" placeholder="Enter Your Website URL">  <span style="color:red"><?php echo $error_website; ?></span>
      </td>
    </tr>
    <tr>
      <td>
         <label for="">Gender</label>
      <span style="color:red">*</span>    <input type="radio" name="gender" value="male">male   <span style="color:red"><?php echo $error_gender; ?></span>
         <input type="radio" name="gender" value="female">Female
      </td>
    </tr>

    <tr>
      <td>
          <label for="">Message</label>
        <span style="color:red">*</span>  <textarea name="message" rows="8" cols="20" placeholder="Enter your Message"></textarea>  <span style="color:red"><?php echo $error_message; ?></span>
      </td>
    </tr>
    <tr>
      <td>
         <button type="submit" name="submit">Submit</button>
      </td>
    </tr>

  </table>
</form> -->
