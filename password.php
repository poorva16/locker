<?php
    include 'database.php';
    $providers=$passwords="";
  if(isset($_POST['providers']) && isset($_POST['passwords']))
  {
    $providers = $_POST['providers'];
    $passwords = $_POST['passwords'];
  
    if(mysql_query("insert into password values('', '$providers', '$passwords')")){
      echo "successful";
  }    
    else
    { echo "query not successful"; }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>password</title>
		<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

	<link href="password.css" rel="stylesheet">
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

   <div class="container">
   <div class="row">
   <form action="password.php" method="POST">
    <table class="striped">
        <thead>
          <tr>
              <th data-field="providers">Password Provider</th>
              <th data-field="passwords">Password</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><input id="providers" type="text" name="providers" class="validate"></td>
            <td><input id="passwords" type="text" name="passwords" class="validate"></td>
          </tr>
        </tbody>
      </table>
      <button class="btn waves-effect waves-light" type="submit" style="margin-top:18%; margin-left:30%;">Submit
      <i class="mdi-action-lock-outline"></i>
      </button>
      </form>
      <button class="btn waves-effect waves-light" type="submit" style="margin-top:-6.3%;margin-left:455px;">Show Passwords
      <i class="mdi-action-lock-open"></i>
      </button>

       <?php
      $pass= mysql_query("SELECT * from password");
      echo '<table class="striped">';
      echo '<tr>';
    echo '<thead>';
    echo '<th>Provider</th>';
    echo '<th>Password</th>';
    echo '</thead>';
    echo '</tr>';
while($row = mysql_fetch_array($pass))
{
    echo '<tr>';
    echo '<td>'.$row['providers'].'</td>';
     echo '<td>'.$row['passwords'].'</td>';
     echo '</tr>';
}
echo '</table>';

          ?>
  </div>
  </div>
  </body>
  </html>