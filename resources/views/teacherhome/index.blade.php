@extends('layout.layout')

<!DOCTYPE html>
<html>
<head>
@section('title')
Home
@stop

	
</head>
<center>
<body >
	<input type="hidden" name="id" value="{{session('id')}}">
@section('h1')
Welcome Teacher
@stop
@section('li')
<li>
<a style ="" href="/teacherhome/profile/{{session('id')}}">Profile</a>
</li>

<li>
<a style ="" href="teacherhome/notice/{{session('id')}}">Notice</a>
</li>
<li>
<a style ="" href="teacherhome/uploadfile/{{session('id')}}">Upload File</a>
</li>

<li><a  style ="" href="{{route('logout.index')}}"> Logout</a> 
</li>

@stop



	<!-- <a style ="color:#21A0EE" href="/home/profile/{{session('id')}}">Profile</a> |<a style ="color:#21A0EE" href="/home/userlist">User List</a> | <a style ="color:#21A0EE" href="/home/adduser">Add User</a>|<a style ="color:#21A0EE" href="/home/uploadfile">Upload File</a> |<a style ="color:#21A0EE" href="home/download">download File</a> |<a style ="color:#21A0EE"href="my-search">Search</a>|<a  style ="color:#21A0EE" href="{{route('logout.index')}}"> Logout</a> 
 -->

	

</body>
</center>
</html>