<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <table border="1">
        <thead>Tbale of 5</thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>5 * {{ $i }}</td>
                    <td>{{ 5 * $i }}</td>
                </tr>
            @endfor
        </tbody>
    </table> --}}

    {{-- <div>
        <table border="1">
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Designation</th>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($students); $i++)
                    @php

                        $student = $students[$i];
                    @endphp
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['designation'] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <table border="1">
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Designation</th>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['designation'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div>
        <table>
            <th>name</th>
            <th>class</th>
            <th>age</th>
            <th>addresh</th>


            @foreach ($studentdata as $data)
                <tr>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['class'] }}</td>
                    <td>{{ $data['age'] }}</td>
                    <td>{{ $data['address'] }}</td>

                </tr>
            @endforeach

            @foreach ($studentdata[0] as $key => $value)
                <tr>
                    <td>
                        {{ $value }}
                    </td>


                </tr>
            @endforeach

        </table>
        @foreach ($studentdata as $datatype)
            @if ($datatype['age'] >= 18)
                <span>you are eligible</span>
                <br>

                else
                <span>you are not eligible</span>
                <br>
            @endif
        @endforeach

    </div> --}}

    {{-- <table border="1">
         <div>
        <th>name</th>
        <th>class</th>

        @foreach ($datas as $pages)
            <tr>
                <td>{{ $pages['name'] }}</td>
                <td>{{ $pages['class'] }}</td>
            </tr>
        @endforeach
    </div>
    </table> --}}

    <table>
        <thead>
            <th>name</th>
            <th>class</th>

        </thead>
        <tbody>
            @forelse ($datas as $item)
                <tr>
                    <td>{{ $item['name'] }}{{ $loop->last }}</td>
                    <td>{{ $item['class'] }}</td>
                    {{-- <td>{{ $item['age'] }}</td>  --}}
                </tr>
            @empty
                <tr>
                    <td colspan="4">No data available</td>
                </tr>

            @endforelse
        </tbody>
    </table>


</body>

</html>
