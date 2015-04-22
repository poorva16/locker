<?php
    include 'database.php';
    include 'redirect.php';
    $providers=$passwords="";
    echo $_SESSION['id'];
  if(isset($_POST['providers']) && isset($_POST['passwords']))
  {
    $providers = $_POST['providers'];
    $passwords = $_POST['passwords'];
    $user_id = $_SESSION['id'];
    if(mysql_query("insert into password values($user_id,'', '$providers', '$passwords')")){
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
		<script type="text/javascript" src="jquery-1.11.0.js"></script>
	  <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <script src="materialize/js/materialize.min.js"></script>
    <link href="password.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?> 

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
          <div class="btn-container">
            <button class="btn waves-effect waves-light" type="submit" style="margin-left:10%;">Submit
                <i class="mdi-action-lock-outline"></i>
            </button>
            <button class="btn waves-effect waves-light show-password-btn" type="submit" style="margin-left:10%;">Show Passwords
            <i class="mdi-action-lock-open"></i>
            </button>
          </div>
      </form>

    <?php
      //$('#show').click(function(){
      $user_id = $_SESSION['id'];
      $pass= mysql_query("SELECT * from password where userid=$user_id");
      echo '<table class="striped show-password" hidden>';
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
  <script type="text/javascript">
  $('.show-password-btn').click(function(){
    $('.show-password').show();
  })
  </script>
  </body>
  </html>