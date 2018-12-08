<?php
require(__DIR__ .'/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
   <script src='validations.js'></script>
  <meta charset="UTF-8">
  <title>Service</title>
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
        <h2>Service</h2>
        <section>
          <p>Required information is marked with an asterisk (*).</p>
        </section>
    <section>
      <form name="client" action="" method="post" onsubmit="return JSValidateService()">
    <div class="row">
      <div class="col-25">
        <label for="firstname">*First Name:</label>
      </div>
      <div class="col-75">
        <input name = "firstname" type="text" id="fname" required ><!--minlength="6" maxlength="20"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lastname">*Last Name</label>
      </div>
      <div class="col-75">
        <input name ="lastname" type="text" id="lname" required><!--minlength="6" maxlength="20"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">*E-Mail:</label>
      </div>
      <div class="col-75">
        <input name ="email" type="text" id="email" required><!--change type to email-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phone">Phone:</label>
      </div>
      <div class="col-75">
        <input name="phone" type="tel" id="phone"><!--minlength="10" maxlength="10"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="businessname">Business Name:</label>
      </div>
      <div class="col-75">
        <input name ="businessname" type="text" id="BusinessName"><!--minlength="6" maxlength="100"-->
    </div> 
  </div>
  <input name="client" type="submit" value="Submit">
  </form>
 <!--<?php
  $con = con();
      if(isset($_POST['client']))
    {
        $check=False;
        if(!$check)
      {
          $Fname = $_POST['firstname'];
        if(!test_length($Fname)){
          echo '<script type="text/javascript"> alert("First Name should be greater than 2 charcters and less than 20 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
        $Lname = $_POST['lastname'];
        if(!test_length($Fname)){
          echo '<script type="text/javascript"> alert("Last Name should be greater than 2 charcters and less than 20 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
        $Email = $_POST['email'];
        if(!test_email($Email)){
          echo '<script type="text/javascript"> alert("Please enter a valid email")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
        $Phone = $_POST['phone'];
         if(!test_phone($Phone)){
          echo '<script type="text/javascript"> alert("Please enter a valid Phone Number")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
        $BusinessName = $_POST['businessname'];
        if(!test_length($Fname)){
          echo '<script type="text/javascript"> alert("Business Name should be greater than 2 charcters and less than 100 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
     }
      if($check)
      {
        $Subject = 'Please use these credentials to login';
        $Password = generate_password(8);
        $Message = 'E-Mail: '.$Email.'   Password:'.$Password;
        mail($Email,$Subject,$Message);
        $user_query = "INSERT INTO user (email,password,roleID) VALUE ('$Email','$Password',1)";
        $user_query_run = mysqli_query($con,$user_query);
        $userid_query="SELECT userid from user where email='$Email'";
        $result = mysqli_query($con,$userid_query);
        $User_id = mysqli_fetch_assoc($result);
        $user=$User_id['userid'];
        $service_query="INSERT INTO Service (fname,lname,email,phone,userid) VALUES ('$Fname','$Lname','$Email','$Phone',$user)";
        $client_query_run=mysqli_query($con,$service_query);
        if(mysqli_affected_rows($con)>0){
          echo '<script type="text/javascript"> alert("Please Login using the login page")</script>';
        }
        else{
          echo '<script type="text/javascript"> alert("Error: Please Try someother time")</script>';
        }
      }
    }
          else{
            echo '<script type="text/javascript"> alert("Check the values and resubmit the form again")</script>';
          }
?>--> 
    </section>
    </article>
    </div>   
  	<footer>
    <p><i>Copyright &copy; 2018 Pet Store<br><a href="mailto:varun@nalamalapu.com">varun@nalamalapu.com</a></i></p>
    </footer>
  </main>
      </body>
</html>