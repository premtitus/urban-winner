<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-color: #d6e0ff;
}
div.wrapper {
  padding: 2vw;
}
.buttontop {
  background-color: #0c254d;
  border-radius:10px;
  color: #9dafcc;
  padding: 1vw;
  transition-duration: 1s;
  cursor: pointer;
  font-size: calc( 0.5vw + 8.5px )
}
.buttontop:hover {
  background-color: #4CAF50;
  color: white;
  padding: 1vw 1.2vw 1vw;
}
.submit {
  background-color: #00070a;
}
a {
    display: block;
}
</style>
<?php 
include_once 'wrapping.php'; 
include_once 'top_nav.php'; 
?>

<div class="wrapper">
  <div class="top">
  	<div class="top-left">
  		
  			<div class="register">
  				<center>
  					<a href="registerindex.php">
  						<div class="buttontop">
  							Register for VCE Central Space Here!!
  						</div>
  					</a>
  				</center>
  			</div>
  			
  			<div class="login">
  				<center>
  					<div>
  					</div>
  					<a href="registerindex.php">
  						<div class="buttontop">
  							Login to the VCE Central Space Here!
  						</div>
  					</a>
  				</center>
  			</div>
  	</div>
  	<div class="top-right" >
  		<b>Search For Posts</b> 
  	</div>
  </div>

  <?php 
  include_once 'messenginguserinfo.php';
  ?>
  