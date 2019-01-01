

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}"/>   

</head>
<body>

	<div class="box">
		<h2>login</h2>
		<div style="color:red ;text-align: center;">{{session('message')}}</div>
		<form  name="myform" method="post">
			@csrf
			
			<div class="inputBox">
			<input type="text" placeholder="Enter User Id" name="userid">
			<label>UserId</label>
			</div>
			<div class="inputBox">
			<input type="password" placeholder="Enter Password" name="password">
			<label>Password</label>
			</div>
		  

<br/>

	<button type="submit" required name="submit" class="btn" id="btnSubmit" >Login</button></a>

	</form>

</body>
</html>





