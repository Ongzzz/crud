<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <style>
            
            .success{

                width:100%;
                background-color:#006400;
                height:100px;
                text-align: center;
                color:white;
                font-weight:bold;
                font-size: 30px;
                padding-top: 50px;
            }

            .failed{

                width:100%;
                background-color:#CC0000;
                height:100px;
                text-align: center;
                color:white;
                font-weight:bold;
                font-size: 30px;
                padding-top: 50px;

            }

            table, th, td {

                margin-left:35%;
                border-collapse: collapse;
                border:1px solid black;
                padding:10px;
                text-align: center;
                background-color:#B0E0E6;
            }

            .create{
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 20px;
                cursor: pointer;
                text-decoration:none;
                font-weight:bold;
            }

            .clickable{
                color: black;
                padding: 5px;
                border: none;
                border-radius: 20px;
                cursor: pointer;
                text-decoration:none;
                font-weight:bold;
            }

        </style>

    </head>
    <body>

    @if(\Session::has('success'))
    <p><div class = "success"> {{\Session::get('success')}}</div></p>
    @endif 

    @if(\Session::has('failed'))
    <p><div class = "failed"> {{\Session::get('failed')}}</div></p>
    @endif
    
    <p><a class = "create" href ="{{ route('create') }}">Create new task</a></p>


    @if(!empty($tasks))
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach($tasks as $task)
        <tr>
            <td><a class ="clickable" href ="{{ route('show',$task['id']) }}">{{$task['title']}}</a></td>
            <td>{{$task['description']}}</td>
            <td>{{$task['due_date']}}</td>
            <td><a class = "clickable" href ="{{ route('edit',$task['id']) }}">Edit</a></td>
            <td><a class = "clickable" href ="{{ route('deleteTask', $task['id']) }}">Delete</a></td>
        

        </tr>
        @endforeach

       
       

    </table>
    @endif

    


    </body>
</html>
