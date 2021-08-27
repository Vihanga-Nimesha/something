<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
.comment {
  width: 40%;
  height: 100px;
  padding: 10px;
        
}

table
{


  width:500px;
  height:550px;
  padding:10px;
  border:10px solid darkblue
}

.textboxid
{
    height:30px;
    width: 50;
    font-size:14pt;
}
		
	</style>
</head>
<body>

	<h1 style="text-align: center;">Complaint</h1>

	<table style="margin-left: auto;margin-right: auto; text-align: center;">
		<tr>
			<td>
				Enter your name<input style="margin-left: 50px;" type="text" name="name" placeholder="Name" class="textboxid">
			</td>
		</tr>
		<tr>
			<td>
				Enter your Email<input style="margin-left: 50px;" type="text" name="name" class="textboxid" placeholder="Email">
			</td>
		</tr>
		<tr>
			<td>
				Enter your complaint
				<form action="/form/submit" method="POST">
      			<textarea class="comment">Type your comment here.</textarea>
    			</form>
				
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</body>
</html>