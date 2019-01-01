
<html>
<head>
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
	
	<body style="background-color:#3C3636">
		<center>

		<table border="0" height="70%" width="80%" cellpadding="20" align="center">
			<a href="/studenthome" style ="color:WHITE">Back</a>
			<tr>
				
			</tr>
			<tr height="200%">
				<td colspan="7">
					<form method="POST">
						@csrf
						<fieldset>
							<legend style ="color:white" >ASSIGNMENT</legend>
							<table>
							<td>{{$user->id}}</td>
			                <input type="hidden" name="id" value="{{$user->id}}">
							<tr>
							<td style ="color:white">Assignment	name:</td>
							<td><input name="work" type="text"/></td>
			 				<td><div style="color:red">
			                @if($errors->any())
				
				            {{$errors->first('work')}} <br>
				
			                @endif
		                    </div></td>
							</tr>
							<tr>
							<td style ="color:white">Course:</td>
							<td><input name="aCourse" type="type"/></td>
							<td><div style="color:red">
			                @if($errors->any())
				
				            {{$errors->first('aCourse')}} <br>
				
			                @endif
		                    </div></td>
							</tr>
							<tr>
							<td style ="color:white">Last	Date:</td>
							<td><input name="date" type="text" id="date"/></td>
							<td><div style="color:red">
			                @if($errors->any())
				
				            {{$errors->first('date')}} <br>
				
			                @endif
		                    </div></td>
							</tr>
							</table><hr>
							<input type="submit"	value="ADD">
						</fieldset>
						<br>
					</form>
			<h1 style="text-align:center;color:white">Assignment List</h1>
			<center>
			<table border="1" >
		    <tr style ="color:white">
			<th>Id</th>
			<th> name</th>
			<th>Course</th>
			<th>Deadline</th>
			</tr>

			@foreach($assignments as $assignment)
		<tr style ="color:white">
        <td>{{$assignment->ass_id}}</td>
		<td>{{$assignment->name}}</td>
		<td> {{$assignment->courses}}</td>
		<td> {{$assignment->deadline}}</td>
		
		
		@endforeach
			


		</table>
	</center> 

	</body>
</html>
