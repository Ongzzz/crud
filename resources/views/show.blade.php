<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD-Read</title>

    <style>
        
        input{
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            position:fixed;
            margin-top:15%;
            margin-left:38%;
            }

    </style>
</head>

<body>


<div>

    <label for ="Title">Title</label>
    <input type = "text" name="title" value="{{$task->title}}" readonly><br/>

    <label for ="Description">Description</label>
    <input type = "text" name="description" value="{{$task->description}}" readonly><br/>

    <label for ="Due Date">Due Date</label>
    <input type = "datetime-local" name="due_date" value="{{$task->due_date}}" readonly><br/>

</div>

</body>
</html>