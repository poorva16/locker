<?php
    include 'database.php';
    session_start();
    if(@$_SESSION['id']){
    	header('location:password.php');
    }
    $fname=$fname1=$lname=$lname1=$password=$password1="";
  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password']) && isset($_POST['email']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email= $_POST['email'];
  
    if(mysql_query("insert into register values('', '$fname', '$lname', '$password', '$email')")){
      echo "successful";
  }    
    else
    { echo "query not successful"; }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
		<script type="text/javascript" src="jquery-1.11.0.js"></script>
		<link rel="stylesheet" href="materialize/css/materialize.min.css">
    	<script src="materialize/js/materialize.min.js"></script>
		<link href="login.css" rel="stylesheet">
</head>
<body>
	  <?php include 'navbar.php'; ?> 
	 <div class="container">
	    <div class="row col s12 z-depth-2">
	      <div class="teal lighten-2 col s12 m4 l6" id="login-container">
	        <p id="signin">Sign In</p>
	      	<form class="col s6" name="login-form" method="POST" action="login1.php" autocomplete="off">
		      <div class="row">
		        <div class="input-field col s12 offset-s4">
		          <input id="f_name" type="text" name="fname" class="validate" value="">
		          <label for="f_name">First Name</label>
		        </div>
		        <div class="input-field col s12 offset-s4">
		          <input id="l_name" type="text" name="lname" class="validate" value="">
		          <label for="l_name">Last Name</label>
		        </div>
		      </div>
		      <div class="row">
		         <div class="input-field col s12 offset-s4">
		          <input id="password" type="password" name="password" class="validate" value="">
		          <label for="pwd">Password</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col s12 offset-s12">
		           <button class="btn waves-effect waves-light" type="submit" name="action1" id="login">Login
	   			   <i class="mdi-content-send right"></i>
	  		       </button>
	  		    </div>
	  		  </div>
		      <div id="vr"></div>
	        </form>
	      </div> 
	      <div class="teal lighten-2 col s12 m4 l6" id="reg-container">
	      	<p id="reg">New User? Register!</p>
	      	<form class="col s6" method="POST" name="register-form" action="login.php" autocomplete="off">
		      <div class="row">
		        <div class="input-field col s12 offset-s4">
		          <input id="first_name" type="text" name="fname" class="validate">
		          <label for="first_name">First Name</label>
		        </div>
		       <div class="input-field col s12 offset-s4">
		          <input id="last_name" type="text" name="lname" class="validate">
		          <label for="last_name">Last Name</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12 offset-s4">
		          <input id="password" type="password" name="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12 offset-s4">
		          <input id="email" type="email" name="email" class="validate">
		          <label for="email">Email</label>
		        </div>
		      </div>
		       <div class="row">
		        <div class="col s12 offset-s12">
		           <button class="btn waves-effect waves-light" type="submit" name="action1" id="register">Register
	   			   <i class="mdi-content-send right"></i>
	  		       </button>
	  		    </div>
	  		  </div>
	        </form>
	      </div>  
	    </div>
	 </div>
</body>
</html>