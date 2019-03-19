<?php
  include("template/header.php"); 
  ?>
<body>

	<p class="mx-auto">Welcome to my <strong> Tourism </strong> application</p>
	<p class="mx-auto">If you do not have an account, please see <strong> <a href="signup.php"> subscribe</a></strong></p>

	<div class="container text-center" style="background-color:#f1f1f1"> 
	  <h2>Login</h2>
		<form action="login.php" method="post">
			<div class="imgcontainer">
				<!-- <img src="../assets/img/backgImg.jpg" alt="Admin" class="avatar"> -->
			</div>

			<div class="container">
				<label for="nameAdmin"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="nameAdmin" required><br><br>
				<label for="passwordAdmin"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="passwordAdmin" required>
			</div>

			
			<div class="container" style="background-color:#f1f1f1"> 
			  <br> 
				<button type="submit" name="login">Login</button>
				<button type="button" class="cancelbtn">Cancel</button>
			</div>
		</form>
  </div>


</body>

<?php
  include("template/footer.php");