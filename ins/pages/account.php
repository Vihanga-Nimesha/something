<?php include '../main/nav.php'; ?>


<?php
	$uid=$_SESSION["user"];
	$sql=" SELECT * FROM user WHERE uid='$uid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$name=$row["name"];
	}
?>

<h1>Welcome <?php echo $name ?> </h1>