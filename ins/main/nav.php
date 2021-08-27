<!DOCTYPE html>
<html>
<head>
	<title></title>    
	<?php include 'head.php'; ?>
    <?php include '../sql/conn.php'; ?>


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div style=" color: blue " class="container-fluid">
    <img src="../images/school.png" style="height: 50px; margin-right: 10px;">
    <a class="navbar-brand" href="homee.php">INSTITUTE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/homee.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/contact.php">Contact</a>
        </li>    
      </ul>
    </div>
    <div>
      <a class="nav-link active btn btn-light " style=" margin-right: 4px " aria-current="page" href="../pages/register.php">Register</a>
    </div>
    <div class="nav-item">
          <a class="nav-link active btn btn-light "aria-current="page" href="Student_p.php">Student Portal</a>
        </div>
    
</nav>

</body>
</html>