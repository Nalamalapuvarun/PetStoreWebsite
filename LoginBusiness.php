<?php
require(__DIR__ .'/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">
  <!-- script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
   <script src='validations.js'></script> -->
  <title>Business HomePage</title>
  <link rel="stylesheet" href="css/pet.css">
  </head>
  <body id="wrapper">
    <header>
         <h1>Business's Pet Store</h1>
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
        <h2>My Business</h2>
        <section>
          <p>Required information is marked with an asterisk (*).</p>
        </section>
    <section>
      <form name="LoginBusiness" action="" method="post" onsubmit="return JSValidateLoginBusiness()">
    <div class="row">
      <div class="col-25">
        <label for="cname">Business Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="bname" name="bname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mypet">*Service:</label>
      </div>
      <div class="col-75">
        <input type="text" id="service" name="service" required>
      </div>
    </div>
    <input name="client"type="submit" value="Add New One">
  </form>
   <?php
  $con = con();
      if(isset($_POST['client']))
    {
        $check=False;
        if(!$check)
      {
          $Bname = $_POST['bname'];
        if(!test_length($Bname)){
          echo '<script type="text/javascript"> alert("Business Name should be greater than 2 charcters and less than 20 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
        $Service = $_POST['service'];
        if(!test_length($Service)){
          echo '<script type="text/javascript"> alert("The Service should be greater than 2 charcters and less than 20 charcters ")</script>';
          $check = False;
        }
        else{
          $check = True;
        }
     }
      if($check)
      {
        $LoginBusiness_query = "INSERT INTO businessinfo (bname,service) VALUE ('$Bname','$Service')";
        $LoginBusiness_query_run = mysqli_query($con,$LoginBusiness_query);
        if(mysqli_affected_rows($con)>0){
          echo '<script type="text/javascript"> alert("Thanks for the Details")</script>';
        }
        else{
          echo '<script type="text/javascript"> alert("Error: Please Try some other time")</script>';
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