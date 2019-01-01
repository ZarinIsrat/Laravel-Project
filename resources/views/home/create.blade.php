<!DOCTYPE html>
<html>

	<head>
	<title>ADD USER</title>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('css/Combo/script.js')}}" ></script>
	<script type="text/javascript" src=" {{asset('css/Combo/jquery-ui.js')}}"></script>
	<link rel="stylesheet" href=" {{asset('css/Combo/jquery-ui.css ')}}">
	<link rel="stylesheet" href=" {{asset('css/Combo/jquery-ui.structure.css')}}">
	<link rel="stylesheet" href="{{asset('css/Combo/jquery-ui.theme.css')}}">
	<script type="text/javascript" src=" {{asset('css/Date/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('css/Date/jquery-ui.js ')}}"></script>
	<link rel="stylesheet" href=" {{asset('css/Date/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/Date/jquery-ui.structure.css ')}}">
	   
	  
</head>
<center>
<body  style="background-color:#3C3636">
	<h1 style ="color:white">Add USER </h1>

<form method="post" enctype="multipart/form-data">
	@csrf
	<table border="2" style ="color:white;border-color:#white;">
		<tr>
			<th> First Name</th>
			<td><input type="text" name="First_Name" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('First_Name')}} <br>
				
			@endif
		</div></td>

		</tr>
		<tr>
			<th> Last Name</th>
			<td><input type="text" name="Last_Name" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Last_Name')}} <br>
				
			@endif
		</div></td>
		</tr>
		
		
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('username')}} <br>
				
			@endif
		</div></td>

		</tr>
		<tr>
			<th>Gender </th>
			<td><input type="text" name="Gender" value="" id="Gender"></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Gender')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>Blood Group </th>
			<td><input type="text" name="Blood_Group" id="bloodgroup"/></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Blood_Group')}} <br>
				
			@endif
			
		</tr>
		<tr>
			<th>DOB </th>
			<td><input type="text" name="DOB" value="" id="date"></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('DOB')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>PHONE</th>
			<td><input type="text" name="Phone" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Phone')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('password')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>CONFIRM PASSWORD</th>
			<td><input type="password" name="Confirm_Password" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Confirm_Password')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>ADDRESS</th>
			<td><input type="text" name="Address" value=""></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Address')}} <br>
				
			@endif
		</tr>
		<tr>
			<th>TYPE</th>
			<td><input type="text" name="Type" value="" id="type"></td>
			<td><div style="color:red">
			@if($errors->any())
				
				{{$errors->first('Type')}} <br>
				
			@endif
			
		</tr>
		<tr>
			<th>Select image</th>
			<td><input type="file" name="image" /></td>
			
		</tr>
	
		<tr>
			<th><input type="submit" name="submit" value="Save" /></th>
			<a style ="color:white" href="/home">Back</a><br/>
			<td></td>
		</tr>
	</table>
</form>
</body>
</center>
</html>