function JSValidateClient(){
        var fname = document.forms["client"]["firstname"].value;
        var lname = document.forms["client"]["lastname"].value;
        var email = document.forms["client"]["email"].value;
        var phone = document.forms["client"]["phone"].value;
        var bname = document.forms["client"]["businessname"].value;
        if(fname.length<=20 && fname.length>=2){
        }else{
          alert("First Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(lname.length<=20 && lname.length>=2){
        }else{
          alert("Last Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(phone.length==10){
        }else{
          alert("Please enter a valid Phone Number");
        }
        if(bname.length<=100 && bname.length>=2){
        }else{
          alert("Business Name should be greater than 2 charcters and less than 100 charcters");
        }
        if(email.value==0){
          alert("Please enter email");
        }else if(!isEmail(email.value)){
          alert("Please enter a valid email");
        }
      }
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function JSValidateService(){
        var fname = document.forms["service"]["firstname"].value;
        var lname = document.forms["service"]["lastname"].value;
        var email = document.forms["service"]["email"].value;
        var phone = document.forms["service"]["phone"].value;
        var bname = document.forms["service"]["businessname"].value;
        if(fname.length<=20 && fname.length>=2){
        }else{
          alert("First Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(lname.length<=20 && lname.length>=2){
        }else{
          alert("Last Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(phone.length==10){
        }else{
          alert("Please enter a valid Phone Number");
        }
        if(bname.length<=100 && bname.length>=2){
        }else{
          alert("Business Name should be greater than 2 charcters and less than 100 charcters");
        }
        if(email.value==0){
          alert("Please enter email");
        }else if(!isEmail(email.value)){
          alert("Please enter a valid email");
        }
      }
function JSValidateLogin(){
  var email = document.forms["login"]["email"].value;
  if(email.value==0){
          alert("Please enter email");
        }else if(!isEmail(email.value)){
          alert("Please enter a valid email");
        }
}
function JSValidateContactUs(){
        var fname = document.forms["ContactUs"]["firstname"].value;
        var lname = document.forms["ContactUs"]["lastname"].value;
        var email = document.forms["ContactUs"]["email"].value;
        var phone = document.forms["ContactUs"]["phone"].value;
        var comments = document.forms["ContactUs"]["businessname"].value;
        if(fname.length<=20 && fname.length>=2){
        }else{
          alert("First Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(lname.length<=20 && lname.length>=2){
        }else{
          alert("Last Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(phone.length==10){
        }else{
          alert("Please enter a valid Phone Number");
        }
        if(comments.length<=300 && comments.length>=10){
        }else{
          alert("Business Name should be greater than 10 charcters and less than 300 charcters");
        }
        if(email.value==0){
          alert("Please enter email");
        }else if(!isEmail(email.value)){
          alert("Please enter a valid email");
        }
}
function JSValidateLoginBusiness(){
        var bname = document.forms["LoginBusiness"]["bname"].value;
        var service = document.forms["LoginBusiness"]["service"].value;
        if(bname.length<=20 && bname.length>=2){
        }else{
          alert("Business Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(service.length<=20 && service.length>=2){
        }else{
          alert("The service Name should be greater than 2 charcters and less than 20 charcters");
        }
}
function JSValidateLoginClient(){
        var cname = document.forms["LoginClient"]["cname"].value;
        var mypet = document.forms["LoginClient"]["pname"].value;
        if(cname.length<=20 && cname.length>=2){
        }else{
          alert("Client Name should be greater than 2 charcters and less than 20 charcters");
        }
        if(mypet.length<=20 && mypet.length>=2){
        }else{
          alert("The Pet Name should be greater than 2 charcters and less than 20 charcters");
        }
}