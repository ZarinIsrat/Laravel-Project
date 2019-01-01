

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  .wrapper{
  	margin: 0 auto;
  	width: 75%;
  	margin-top: 10px;
  }
  </style>

</head>
    
	<body style="background-color:#3C3636">
		<center>			<a href="/studenthome" style ="color:white">Back</a>
					    
			     
					<h1 style ="color:white">Study planner</h1>
					<form method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id" value="{{$user->id}}">
	@csrf
	<table border="2" style ="color:white;border-color:white;">
		       <td>{{$user->id}}</td>
		      
			 <table border="1">	
					<h1 style ="color:white">EXAMS</h1>
					<th style ="color:white">INSTRUCTOR</th>
			        <th style ="color:white"> COURSES</th>
					<th style ="color:white">SYLLABUS</th>
					<th style ="color:white">Date</th>
					<th style ="color:white">TIME</th>
					<th style ="color:white">Action</th>
					
				

	 @foreach($exams as $exam)
		<tr style ="color:white">
        <td>{{$exam->course}}</td>
		<td>{{$exam->instructor}}</td>
		<td> {{$exam->syllabus}}</td>
		<td> {{$exam->date}}</td>
		<td> {{$exam->time}}</td>
		<td> <a  style ="color:white"href="/studenthome/delete/{{$exam->exam_id}}"> Delete</a> </td>
        
	
		
		 </tr>   
		@endforeach
		      </table>	
		
		
		
	</table>
			
                  
            <table border="1">				   
					
            <h1 style ="color:white">ASSIGNMENT</h1>
			<tr style ="color:white">
			<th>Id</th>
			<th> name</th>
			<th>Course</th>
			<th>Deadline</th>
			<th>Action</th>
			
			<th style ="color:white">Upload assignment</th>
			<th>File</th>
			<th>Download</th>
			

		@foreach($assignments as $assignment)
		<tr style ="color:white">
        <td>{{$assignment->ass_id}}</td>
		<td>{{$assignment->name}}</td>
		<td> {{$assignment->courses}}</td>
		<td> {{$assignment->deadline}}</td>
		<td> <a  style ="color:white"href="/studenthome/assdelete/{{$assignment->ass_id}}"> Delete</a> </td>
		
		<td> <a  style ="color:#7884E1"href="/studenthome/uploadassignment/{{$assignment->ass_id}}"> Upload</a> </td>
		
		<td> {{$assignment->assignment}}</td>
		<td>
							<a href="/assignments/{{$assignment->assignment}}" download="{{ $assignment->assignment}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Download
								</i>
								</button>
							</a>
</td>
		
		
		@endforeach
			
	</table>


					
		
	</center>
	</body>
</html>



 