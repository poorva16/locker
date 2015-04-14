<?php
 if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$name = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$ext = end((explode(".", $name)));
echo $ext; # extra () to prevent notice

if(isset($name)){
	if(!empty($name)){
		$location = 'upload/';
		if(move_uploaded_file($tmp_name,$location)){
			echo 'uploaded file';
		}
	}
	else {
		echo 'File not chosen';
	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
		<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

	<link href="upload.css" rel="stylesheet">
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
        <li><a href="password.php">Password Locker</a></li>
        <li><a href="upload.php">Media Locker</a></li>
      </ul>
    </div>
  </nav>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="file-field input-field">
      <input class="file-path validate" type="text"/>
      <div class="btn">
        <span>File</span>
        <input type="file" name="file" id="fileToUpload"/>
      </div>
    </div>
   <button class="btn waves-effect waves-light" type="submit" style="
    margin-left: 116px; margin-top: 90px;" value="Upload Image" name="submit">Upload
        <i class="mdi-file-file-upload"></i>
    </button>
  </form>
</body>
</html>