<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="width: 100%" border="1">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Roll No</th>
                <th>Active</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>

                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->mother_name }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->is_active }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
