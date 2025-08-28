<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form input{
            display: flex;
            margin: 10px;
            height: 40px;
            width: 20%;
            font-size: 20px
        }
        button{
            width: 10%;
            height: 40px;
            font-size: 20px;
            margin: 10px 20px;
        }
    </style>
</head>

<body>
    <form action="{{ route('getadd') }}" method="POST">
        @csrf
        <h1>this is  my new page</h1>
        <input type="text"  name="name" placeholder="name" value="{{ old ('name') }}">
        @error('name')
        <span>{{ $message }}</span>

        @enderror
        <input type="text" name="class"placeholder="class"  value="{{ old ('class') }}">
         @error('class')
        <span>{{ $message }}</span>

        @enderror
        <input type="text" name="phone_no" placeholder="phone_no" value="{{ old('phone_no') }}">
         @error('phone_no')
        <span>{{ $message}}</span>

        @enderror
        <input type="text" name="address" placeholder="address" value="{{ old('address') }}">
         @error('address')
        <span>{{ $message }}</span>

        @enderror
        <input type="text" name="rank_no" placeholder="rank_no" value="{{ old('rank_no') }}">
         @error('rank_no')
        <span>{{ $message }}</span>

        @enderror
        <input type="text"  name="school_name"placeholder="school_name" value="{{ old('school_name') }}">
         @error('school_name')
        <span>{{ $message }}</span>

        @enderror

        <button>submit</button>
    </form>
</body>

</html>
