<!DOCTYPE html>
<html>
<head>
	<title>EDIT USER</title>
</head>
<center>

<body  style="background-color:#3C3636">
	<h1 style ="color:white">EDIT USER </h1>

<form method="post">
	@csrf
	<table border="2" style ="color:white;border-color:white;">
	<tr>
			<th>Id</th>
			<td>{{$user->id}}</td>
			<input type="hidden" name="id" value="{{$user->id}}">
		</tr>
		<tr>
			<th> First Name</th>
			<td><input type="text" name="First_Name" value="{{$user->First_Name}}"></td>
		</tr>

		<tr>
			<th> Last Name</th>
			<td><input type="text" name="Last_Name" value="{{$user->Last_Name}}"></td>
		</tr>
		
		
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" value="{{$user->username}}"></td>
		</tr>
		
		<tr>
			<th>Gender </th>
			<td><input type="text" name="Gender" value="{{$user->Gender}}" id="Gender"></td>
		</tr>
		<tr>
			<th>Blood Group </th>
			<td><input type="text" name="Blood_Group" id="bloodgroup" value="{{$user->Blood_Group}}"/></td>
			
		</tr>
		<tr>
			<th>DOB </th>
			<td><input type="text" name="DOB" value="{{$user->DOB}}" id="date"></td>
		</tr>
		<tr>
			<th>PHONE</th>
			<td><input type="text" name="Phone" value="{{$user->Phone}}"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" value="{{$user->password}}"></td>
		</tr>
		<tr>
			<th>CONFIRM PASSWORD</th>
			<td><input type="password" name="Confirm_Password" value="{{$user->Confirm_Password}}"></td>
		</tr>
		<tr>
			<th>ADDRESS</th>
			<td><input type="text" name="Address" value="{{$user->Address}}"></td>
		</tr>
		<tr>
			<th>TYPE</th>
			<td><input type="text" name="Type" value="{{$user->Type}}" id="type"></td>
			
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



</html>