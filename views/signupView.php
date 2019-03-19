<?php
  include("template/header.php"); 
  ?>
<body>

<form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>

    <label for="nameAdmin"><b>FirstName</b></label>
    <input type="text" placeholder="Enter firstname" name="nameAdmin" required>

    <label for="emailAdmin"><b>Email</b></label>
    <input type="mail" placeholder="Enter Email" name="emailAdmin" required>

    <label for="passwordAdmin"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwordAdmin" required>

    <label for="passwordAdmin"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="passwordAdmin" required>
    
    <div class="clearfix">
      <a href="login.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="signup" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>

<?php
  include("template/footer.php");