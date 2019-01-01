

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<center>
<body  style="background-size: 800px;background-color:#3C3636; color:white" >
	<form method="POST" enctype="multipart/form-data">
		 <a  style ="color:white" href="/studenthome/study">Back</a><br/>
		@csrf
	 <h1>Choose your file</h1>
     <input type="hidden" name="id" value="{{$assignments->user}}">
	<input type="file" name="assignment" />
	<th><input type="submit" name="submit" value="Save" /></th>
	</form>

</body>
</center>
</html>