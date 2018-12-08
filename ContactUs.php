<?php
require(__DIR__ .'/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
   <script src='validations.js'></script>
  <title>ContactUs</title>
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
        <h2>Contact Us</h2>
        <section>
          <p>Required information is marked with an asterisk (*).</p>
        </section>
    <section>
      <form name="ContactUs" action="" method="post" onsubmit="return JSValidateContactUs()">
    <div class="row">
      <div class="col-25">
        <label for="fname">*First Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" required><!--minlength="6" maxlength="20"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">*Last Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" required><!--minlength="6" maxlength="20"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">*E-Mail:</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" required><!--change type to email-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Phone">Phone:</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone"><!--minlength="10" maxlength="10"-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Comments">*Comments:</label>
      </div>
      <div class="col-75"><!--minlength="10" maxlength="300"-->
        <textarea name ="comments" required>
        </textarea>
      </div>
    </div>
    <input name="client" type="Submit" value="Submit">
  </form>
  <!-- <?php
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
        if(!test_length($Lname)){
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
        $comments = $_POST['comments'];
        if(!test_length($comments)){
          echo '<script type="text/javascript"> alert("Comments should be greater than 10 charcters and less than 300 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
     }
      if($check)
      {
        $ContactUs_query = "INSERT INTO ContactUs (fname,lname,email,phone,comments) VALUE ('$Fname','$Lname','$Email','$Phone','$comments')";
        $ContactUs_query_run = mysqli_query($con,$ContactUs_query);
        if(mysqli_affected_rows($con)>0){
          echo '<script type="text/javascript"> alert("Thanks for Contacting Us")</script>';
        }
        else{
          echo '<script type="text/javascript"> alert("Error: Please Try some other time")</script>';
        }
      }
    }
          else{
            echo '<script type="text/javascript"> alert("Check the values and resubmit the form again")</script>';
          }
?> -->
    </section>
    </article>
    </div>   
  	<footer>
      <p><i>Copyright &copy; 2018 Pet Store<br><a href="mailto:varun@nalamalapu.com">varun@nalamalapu.com</a></i></p>
    </footer>
  </main>
      </body>
</html>