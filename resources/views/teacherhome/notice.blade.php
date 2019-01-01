
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
<center>
    
    <body style="background-color:#3C3636">
        <a style ="color:white" href="/teacherhome">Back</a><br/>
        <table border="0" height="70%" width="80%" cellpadding="20" align="center">
            <tr>
                
            <tr height="200%">
                <td colspan="7">
                    <form method="POST">
                        @csrf
                        <fieldset>
                            <legend style ="color:white">ADD Notice</legend>

                            <table>
                            <tr>
                                <th>UserId</th>
                                <td>{{$user->id}}</td>
                                <input type="hidden" name="id" value="{{$user->id}}">
                            </tr>
                            <tr>
                            <td style ="color:white">Subject:</td>
                            <td><input name="subject" type="text"/></td>
                            
                            </tr>
        
                            <tr>
                            <td style ="color:white">NOTICE:</td>
                            <td><input name="notice" type="text"/></td>
                            
                            </tr>
                    
    
                            </table><hr>
                            <input type="submit"    value="ADD">
                        </fieldset>
                        <br>
                    </form>

                    
                   <table border="2" style ="color:white;border-color:white;">
               
              
             <table border="1"> 
                    <h1 style ="color:white">Notice</h1>
                    <th style ="color:white">Id</th>
                    <th style ="color:white"> Subject</th>
                    <th style ="color:white">Notice</th>
                    <th style ="color:white">Action</th>
                    
                

     @foreach($notices as $notice)
        <tr style ="color:white">
        <td>{{$notice->notice_id}}</td>
        <td>{{$notice->subject}}</td>
        <td> {{$notice->notice}}</td>
        
        <td> <a  style ="color:white"href="/teacherhome/delete/{{$notice->notice_id}}"> Delete</a> </td>
        
    
        
    
        
         </tr>   
        @endforeach
              </table>  
        

        </table>
        
       
    </body>
</center>
</html>