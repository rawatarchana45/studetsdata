<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <table >
        <tr style="1px soild">
            <th>name</th>
            <th>class</th>
            <th>phone_no</th>
            <th>mother_name</th>
            <th>father_name</th>
            <th>school</th>
        </tr>

        @foreach($datas as $data)
        <tr>
           <td>{{ $data->name }}</td>
           <td>{{ $data->class }}</td>
           <td>{{ $data->phone_no }}</td>
           <td>{{ $data->mother_name }}</td>
           <td>{{ $data->father_name }}</td>
           <td>{{ $data->school }}</td>
        </tr>
        @endforeach

      </table>
</body>
</html>
