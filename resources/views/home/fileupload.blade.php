

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<center>
<body  style="background: url({{asset('css/p2.png')}}) no-repeat;background-size: 800px;color:#21A0EE" >
	<form method="POST" enctype="multipart/form-data">
		@csrf
	<input type="file" name="image" />
	<th><input type="submit" name="submit" value="Save" /></th>
	</form>

</body>
</center>
</html>