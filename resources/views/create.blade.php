<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD-Create</title>

    <style>
        
        input{
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            }
        
        input[type=submit]:hover {
            background-color: #45a049;
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
    <form action = "{{ route('saveNewTask') }}" method="post">
    @csrf

    <label for ="Title">Title</label>
    <input type = "text" name="title" placeholder="Title" required><br/>

    <label for ="Description">Description</label>
    <input type = "text" name="description" placeholder="Description"><br/>

    <label for ="Due Date">Due Date</label>
    <input type = "datetime-local" name="due_date" placeholder="Due Date" required><br/>

    <input type = "submit" value = "Add a task">

    </form>
</div>

</body>
</html>