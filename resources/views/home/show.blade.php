<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<center>
<body style="background-color:#3C3636;">
 <h1  style="color:white">USER </h1>

	<a href="/home" style ="color:white">Back</a>
	
	<table border="1">
		<tr style ="color:white">
			<th>Id</th>
			<th>First name</th>	
			<th>Last name</th>
			<th>Username</th>			
			<th>Gender</th>
			<th>Blood_Group</th>	
			<th>DOB</th>	
			<th>Addtess</th>		
			<th>Phone </th>		
			<th>Action</th>
		</tr>
			
		
		@foreach($users as $user)
		<tr style ="color:white">
        <td>{{$user->id}}</td>
		<td>{{$user->First_Name}}</td>
		<td> {{$user->Last_Name}}</td>
		<td> {{$user->username}}</td>
		<td> {{$user->Gender}}</td>
		<td> {{$user->Blood_Group}}</td>
		<td>{{$user->DOB}}</td>
		<td>{{$user->Address}}</td>
		<td>{{$user->Phone}}</td>

		

		
		
		
		<td><a  style ="color:white"href="/home/edit/{{$user->id}}">Edit</a> | <a  style ="color:white"href="/home/delete/{{$user->id}}"> Delete</a> </td>
		</tr>
		
		@endforeach


	</table>
</body>
</center>
</html>