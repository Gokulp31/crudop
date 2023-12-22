<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Edit a student</h1>
    <form method = "post" action = "{{ route('student.update',['student'=>$student]) }}">
        @csrf
        @method('put')
        <div>
            <label>Student Id</label>
            <input type = "number" name = "stu_id" value="{{ $student->id }}"/>
        </div>
        <div>
            <label>Name</label>
            <input type = "text" name = "name"value=" {{ $student->name}}"/>
        </div>
        <div>
            <label>City</label>
            <input type = "text" name = "city" value="{{ $student->city }}"/>
        </div>
        <div>
            <label>Contact</label>
            <input type = "number" name = "contact" value="{{ $student->contact }}"/>
        </div>
        <div>
            <input type = "Submit" value = "Update"/>
        </div>
    </form>
</body>
</html>
