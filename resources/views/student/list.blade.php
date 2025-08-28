<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid #eee;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div>
        <table >
            <thead>

                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>class</th>
                    <th>phone_no</th>
                    <th>mother_name</th>
                    <th>father_name</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($records as $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->class }}</td>
                        <td>{{ $list->phone_no }}</td>
                        <td>{{ $list->mother_name }}</td>
                        <td>{{ $list->father_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
