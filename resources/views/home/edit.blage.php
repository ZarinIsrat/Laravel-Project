<!DOCTYPE html>
<html>
<head>
	<title>EDIT USER</title>
</head>
<center>

<body  style="background-color:#165881">
	<h1 style ="color:#21A0EE">EDIT USER </h1>

<form method="post">
	@csrf
	<table border="2" style ="color:#21A0EE;border-color:#21A0EE;">
	<tr>
			<td>Id</td>
			<td><{{$employee->id}}></td>
			<input type="hidden" name="id" value="{{$employee->id}}">
		</tr>
		<tr>
			<th>Employee First Name</th>
			<td><input type="text" name="First_Name" value="{{$employee->First_Name}}"></td>
		</tr>
		
		
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" value="{{$employee->username}}"></td>
		</tr>
		
		<tr>
			<th>PHONE</th>
			<td><input type="text" name="Phone" value="{{$employee->Phone}}"></td>
		</tr>
		<tr>
			<th>Company </th>
			<td><input type="text" name="Company" value="{{$employee->Company}}"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" value="{{$employee->password}}"></td>
		</tr>
		
		
		<tr>
			<th><input type="submit" name="submit" value="Save" /></th>
			<a style ="color:#21A0EE" href="/home">Back</a><br/>
			<td></td>
		</tr>
	</table>
</form>
</body>
</center>
</html>



</html>