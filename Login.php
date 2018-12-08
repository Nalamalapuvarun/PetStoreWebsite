<?php 
include 'config.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
   <script src='validations.js'></script>-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">
  <title>Login</title>
  <link rel="stylesheet" href="css/pet.css">
  </head>
  <body id="wrapper">
    <header>
         <h1>Pet Store</h1>
    </header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Aboutus.html">About Us</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <li><a href="Client.php">Client</a></li>
        <li><a href="Service.php">Service</a></li>
        <li><a href="Login.php">Login</a></li>
      </ul>
    </nav>
  <main>
    <img src=images/Index.png>
    <div class="main-body">
    <article>
        <h2>Login</h2>
        <section>
          <p>Required information is marked with an asterisk (*).</p>
        </section>
    <section>
     <form name="login" action="" method="post" onsubmit="return JSValidateLogin()">
    <div class="row">
      <div class="col-25">
        <label for="fname">*E-Mail:</label>
      </div>
      <div class="col-75">
        <input type="text" id="E-Mail" name="email" required> <!-- change type to email-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">*Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="Password" name="password" required>
      </div>
    </div>  
    <input name ="client" type="submit" value="Submit">
  </form>
  <?php
    $con = con();
    if(isset($_POST['client'])){
      $check = False;
      if(!$check){
        $Email = $_POST['email'];
      if(!test_email($Email)){
          echo '<script type="text/javascript"> alert("Please enter a valid email")</script>';
          $check = False;
      }
      $check = True;
      }
      $Password = $_POST['password'];
      if($check){
        $credentials_check = "SELECT email,password,roleId from user where email='$Email'";
        $query = mysqli_query($con,$credentials_check);
        $result = mysqli_fetch_assoc($query);
        $c_Email=$result['email'];
        $c_Password = $result['password'];
        $c_roleId = $result['roleId'];
        if($c_Email == $Email && $c_Password == $Password && $c_roleId == 1){
          echo("<script>location.href = 'LoginBusiness.php';</script>");
        }
        else if($c_Email == $Email && $c_Password == $Password && $c_roleId == 2){
            echo("<script>location.href = 'LoginClient.php';</script>");
        }
        else{
          echo '<script type="text/javascript"> alert("Please check your email and password")</script>';
        }
      }
    }
    else{
      echo '<script type="text/javascript"> alert("Check the values and resubmit the form again")</script>';
    }
  ?>
    </section>
    </article>
    </div>   
  	<footer>
      <p><i>Copyright &copy; 2018 Pet Store<br><a href="mailto:varun@nalamalapu.com">varun@nalamalapu.com</a></i></p>
    </footer>
  </main>
      </body>
</html>