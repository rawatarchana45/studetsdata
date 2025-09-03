<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .form-group input {
            height: 30px;
            background: whitesmoke;
            width: 100%;
            /* font-size: 20px; */
            border: none;
            display: flex;
            padding: 10px;
            border-radius: 10px;
            margin-top: 5px;
        }

        .form-group label {
            margin-bottom: 5px !important;
        }

        .form {
            width: 30%;
        }

        h1 {
            text-align: center;
            font-size: 40px;
        }

        .form-group {
            margin-bottom: 10px;
            padding: 5px 5px;

        }

        .form {
            width: 40%;
            border-radius: 10px;
            padding: 10px 20px;
            background-color: rgb(9, 143, 167);


        }

        textarea {
            resize: none;
            width: 100%;

        }

        button[type="submit"] {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            background: #333;
            color: white;
            border: none;
        }
    </style>
</head>

<body>
    <form action="{{ route('employee.update',$employee->id) }}" method="POST" class="form">
        @method('put')
        @csrf

        <div class="form-group">
            <h1>Create Employee </h1>
            {{-- <div class="form-group"> --}}
            <label for="name">Employee Name:</label>
            <input type="text" name="name" placeholder="name" value="{{ $employee->name ?? old('value') }}">

            @error('name')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" minlength="18" maxlength="50" name="age" placeholder="Age"
                value="{{ $employee->age ?? old('age') }}">

            @error('age')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror

        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email" value="{{ $employee->email ?? old('email') }}">
            @error('email')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" placeholder="phone" value="{{ $employee->phone ?? old('phone') }}">
            @error('phone')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" name="designation" placeholder="designation"
                value="{{ $employee->designation ?? old('designation') }}">
            @error('designation')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" name="salary" placeholder="salary" value="{{ $employee->salary ?? old('salary') }}">
            @error('salary')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="joining_date">Joining Date:</label>
            <input type="date" name="joining_date" value="{{ old('joining_date') }}">
            @error('joining_date')
                <span style="color: rgb(142, 28, 28)">{{ $employee->joining_date ?? $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="" cols="30" rows="10">
            {{ $employee->address ?? old('address') }}
            </textarea>
            @error('address')
                <span style="color: rgb(142, 28, 28)">{{ $message }}</span>
            @enderror
            {{-- <input type="text" name="address" placeholder="address"> --}}
        </div>
        <button type="submit">Update Employee</button>

    </form>
    @if (session('failure'))
        <script>
            alert({{ session('failure') }})

                <
                /div>
        </script>

        @endsession
    @endif

</body>

</html>
