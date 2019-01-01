
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
<center>
   
	<body style="background-color:#3C3636">
		<a style ="color:white" href="/studenthome">Back</a><br/>
			<table border="0" height="70%" width="80%" cellpadding="20" align="center" style ="color:white">
				<tr>
		
				</tr>
				<tr height="200%">
					<td colspan="7">
						<form method="POST" >
							@csrf
							<fieldset>
								<legend style ="color:white">Exam</legend>
								<table >
								  <td>{{$user->id}}</td>
			                       <input type="hidden" name="id" value="{{$user->id}}">
								<tr>
								<td style ="color:white">Course	Name:</td>
								<td><input name="course" type="text"/></td>
								<td><div style="color:red">
			                   @if($errors->any())
				
				               {{$errors->first('course')}} <br>
				
			                   @endif
								</tr>
								<tr>
								<td style ="color:white">Course	Instructor:</td>
								<td><input name="instructor" type="text"/></td>
								<td><div style="color:red">
			                   @if($errors->any())
				
				               {{$errors->first('instructor')}} <br>
				
			                   @endif
								</tr>
								</tr>
								<tr>
								<td style ="color:white">Syllabus:</td>
								<td><input name="syllabus" type="text"/></td>
								<td><div style="color:red">
			                   @if($errors->any())
				
				               {{$errors->first('syllabus')}} <br>
				
			                   @endif
								</tr>
								</tr>
								<tr>
								<td style ="color:white">Exam	Date:</td>
								<td><input name="date" type="text" id="date"/></td>
								<td><div style="color:red">
			                   @if($errors->any())
				
				               {{$errors->first('date')}} <br>
				
			                   @endif
								</tr>
								</tr>
								<tr>
								<td style ="color:white">Exam	Time:</td>
								<td><input name="time" type="time"/></td>
								<td><div style="color:red">
			                   @if($errors->any())
				
				               {{$errors->first('time')}} <br>
				
			                   @endif
								</tr>
							
								</table><hr>
								<input type="submit" value="ADD">
							</fieldset>
							<br>
						</form>
						<tr style ="color:white">
						<td>course</td>
						<td>instructor</td>
						<td>syllabus</td>
						<td>date</td>
						<td>time</td>
		                 </tr>
						
						
						<h2 style ="color:white ;text-align:center">Exam LIST</h2>

	   @foreach($exams as $exam)
		<tr style ="color:white">
        <td>{{$exam->course}}</td>
		<td>{{$exam->instructor}}</td>
		<td> {{$exam->syllabus}}</td>
		<td> {{$exam->date}}</td>
		<td> {{$exam->time}}</td>
		
		

		
		
		@endforeach
			
	                     
						
					</td>
				</tr>
				
			</table>

		
	</body>
	</center>
</html>


