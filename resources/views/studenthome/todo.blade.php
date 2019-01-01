
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
        <a style ="color:white" href="/studenthome">Back</a><br/>
        <table border="0" height="70%" width="80%" cellpadding="20" align="center">
            <tr>
                
            <tr height="200%">
                <td colspan="7">
                    <form method="POST">
                        @csrf
                        <fieldset>
                            <legend style ="color:white">ADD Todo</legend>
                            <table>
                               <td>{{$user->id}}</td>
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <tr>
                            <td style ="color:white">Work    TODO:</td>
                            <td><input name="work" type="text"/></td>
                            <td><div style="color:red">
                            @if($errors->any())
                
                            {{$errors->first('work')}} <br>
                
                            @endif
                            </tr>
                            <tr>
                            <td style ="color:white">Last    Date:</td>
                            <td><input name="date" type="text" id="date"/></td>
                            <td><div style="color:red">
                            @if($errors->any())
                
                            {{$errors->first('date')}} <br>
                
                            @endif
                            </tr>
                            <tr>
                            <td style ="color:white">Details:</td>
                            <td ><input name="tDetails" type="text"/></td>
                            <td><div style="color:red">
                            @if($errors->any())
                
                            {{$errors->first('tDetails')}} <br>
                
                            @endif
                            </tr>
                            </table><hr>
                            <input type="submit"    value="ADD">
                        </fieldset>
                        <br>
                    </form>

                    
                        <h2 style ="color:white">TODO LIST</h2>

        </table>
         <table border="1">

         <tr style ="color:white">
        <td>id</td>
        <td>name</td>
        <td>reminder</td>
        <td>details</td>
       

            @foreach($todos as $todo)
        <tr style ="color:white">
        <td>{{$todo->id}}</td>
        <td>{{$todo->name}}</td>
        <td> {{$todo->reminder}}</td>
        <td> {{$todo->details}}</td>
        
        
        
        @endforeach
                        
                    </td>
                </tr>
            
        </table>

       
    </body>
</center>
</html>