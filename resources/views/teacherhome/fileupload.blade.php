

<!DOCTYPE html>
<html>
<head>
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
	<title>File Upload</title>
</head>
<body  style="background-size: 800px;background-color:#3C3636; color:white" >
	<center>
	<form method="POST" enctype="multipart/form-data">

		                   @csrf
                            <a style ="color:white" href="/teacherhome">Back</a><br/>
                            <h1 style="color:white">File Upload</h1>
                             <table>
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <tr>
                            <td>Subject:</td>
                            <td><input name="subject" type="text"/></td>
                            </tr>
                            <tr>
                            <td>File:</td>
                            <td><input type="file" name="image" />
	                        <input style="color:black" type="submit" name="submit" value="Save" />	</td> 
	                         </tr>
	                        </table>                     
	                        <table border="1">				   
					
            <h1 style ="color:white">File</h1>
			<tr style ="color:white">
			<th>Id</th>
			<th>Action</th>		
			<th>File</th>
			<th>Download</th>
			

		@foreach($files as $file)
		<tr style ="color:white">
        <td>{{$file->file_id}}</td>
		<td>{{$file->subject}}</td>
		<td>{{$file->file}}</td>
		<td> <a  style ="color:blue"href="/teacherhome/filedelete/{{$file->file_id}}"> Delete</a> </td>
		
		
		
		<td>
							<a href="/files/{{$file->file}}" download="{{$file->file}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Download
								</i>
								</button>
							</a>
</td>
		
		
		@endforeach
			
	</table>   
                        
	</form>
</center>
</body>

</html>