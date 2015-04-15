	  <nav>
	    <div class="nav-wrapper">
	      <ul id="nav-mobile" class="left hide-on-med-and-down">
	        <li><a href="login.php">Login</a></li>
	        <li><a href="password.php">Password Locker</a></li>
	        <li><a href="upload.php">Media Locker</a></li>
	        <?php 
	        	if(@$_SESSION['id'])
	        		echo "<li><a href='logout.php'>Logout</a></li>";
	         ?>
	      </ul>
	    </div>
	  </nav>