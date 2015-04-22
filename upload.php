<?php
include 'redirect.php';
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$name = $_FILES['file']['type'];
echo $name;
$tmp_name = $_FILES['file']['tmp_name'];
echo $tmp_name;
$error = $_FILES['file']['error'];
$ext = end((explode("/", $name)));
echo $ext; # extra () to prevent notice

if(isset($name)){
	if(!empty($name)){
		$location = 'upload/';
		if(move_uploaded_file($tmp_name,'1.'.$ext)){
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
		<link rel="stylesheet" href="materialize/css/materialize.min.css">
        <script src="materialize/js/materialize.min.js"></script>
	    <link href="upload.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php' ?>
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