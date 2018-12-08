<?php
function con(){
$con = mysqli_connect('uta.cloud','varunnal_root','z^cE4@pNk.Ko','varunnal_pet') or die("Unable to connect to the database");
return $con;	
}
function generate_password( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
function test_length($data){
	$len = strlen($data);
	if($len<=100 && $len>=2){
		return true;
	}else{
		return false;
	}
}
function test_email($data){
		if(filter_var($data, FILTER_VALIDATE_EMAIL)){
			return true;
		}
		else{
			return false;
		}
}
function test_phone($data){
		$len = strlen($data);
		if($len==10) {
			return true;
	}
	else{
		return false;
	}
}
?>