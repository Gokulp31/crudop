<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Students</h1>
    <div>
        <div>
            Not an existing user?<a href="{{ route('student.create') }}">Click here</a>
        </div>
        <table border="1">
            <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>City</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($students as $student)

                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->city }}</td>
                        <td>{{ $student->contact }}</td>
                        <td>
                            <a href="{{route('student.edit',['student'=> $student])}}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('student.destroy', ['student'=> $student]) }}">
                                @csrf
                                @method('delete')
                                <input type = "submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
