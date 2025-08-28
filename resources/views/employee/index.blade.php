<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {

            /* flex-grow: 1; */
            color: white;
        }

        table {
            border: 1px solid #aaa;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
         border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            font-weight: bold;
            border-bottom: 2px solid #aaa;
            border-top: 2px solid #aaa;
            font-size: 16px;
            background: rgb(5, 87, 87);
            color: white;
        }

        .container {
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: rgb(5, 87, 87);

        }


        .buttons {
            color: rgb(5, 87, 87);
            text-decoration: none;
            background: white;
            padding: 10px 20px;
            border-radius: 20px;
            /* display: inline-block; */
        }
        .buttons span
        {
            font-weight: bold !important;
            font-size: 18px !important;
        }
        .session{
            color: white;
            font-size: 2
            0px;

        }
        .message{
            color: pink;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Employee detalis</h1>
        {{-- <button>add data</button> --}}
        {{-- @if(session('success'))
            <span class="session">{{ session('success') }}</span>
        @endif --}}
        @if(session('failure'))
            <span class="message">{{ session('failure') }}</span>
        @endif
        <a href="{{ route('employee.create') }}" class="buttons"> <span>+</span>
            Add Employee</a>
    </div>

    <table>

        <thead class="heading">
            <th>S_no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Phone No</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($empolyees as $empolyee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $empolyee->name }}</td>
                    <td>{{ $empolyee->email }}</td>
                    <td>{{ $empolyee->designation }}</td>
                    <td>{{ $empolyee->phone }}</td>
                    <td><button>Show</button>
                        <button>Update</button>
                        <button>Delete</button>

                    </td>
                </tr>
            @endforeach
        </tbody>



    </table>

    @if(session('success'))
    <script>
        alert('{{ session('success') }}')
    </script>
    @endif

</body>

</html>
