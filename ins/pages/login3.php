<!DOCTYPE html>
<html>
<head>
  <?php include '../main/nav.php'; ?> 

</head>
<body>
<br><br><br>
    <div class="container w-50 card " align="center" >
     <h1>Login Form</h1>
     <div style=" margin-right: auto;">
     <input type="radio" name="Status" value="Student" >&nbsp;&nbsp;Student<br><br>
     </div>
     <div style="margin-right: auto;">
     	<input type="radio" name="Status" value="Employee">&nbsp;&nbsp;Employee<br>

     </div>
     

     <br><br>
     
     <form action="../sql/user.php" >
	<div class="form-floating mb-3">
  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>

  
</div>
<div class="form-floating">
  <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label><br><br>

  <input type="submit" value="Log In" name="login_form" class=" btn btn-success w-25 " ><br><br><br>
</div>
  <a href="register.php">Don't have an account? Register</a>
  <br><br>
</div>
</div>

</body>
</html>