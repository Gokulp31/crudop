<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> create a student user</h1>
    <form method = "post" action = "{{ route('student.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Student Id</label>
            <input type = "number" name = "stu_id"/>
        </div>
        <div>
            <label>Name</label>
            <input type = "text" name = "name"/>
        </div>
        <div>
            <label>City</label>
            <input type = "text" name = "city"/>
        </div>
        <div>
            <label>Contact</label>
            <input type = "number" name = "contact"/>
        </div>
        <div>
            <input type = "Submit" value = "Create a new Student"/>
        </div>
    </form>
</body>
</html>
