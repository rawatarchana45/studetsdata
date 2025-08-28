<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex
        }
        .container input{
            height: 30px;
            font-size: 20px;

        }
        .container button{
            height: 40px;
            width: 10%;
            margin-top: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body class="container">
     <form action="{{ route('addnewforms')}}" method="POST">
        @csrf
        <h1>Add a new page</h1>
        <input type="text" name="name" placeholder="name"

         value="{{ old('name') }}"  >

        @error('name')
        <span>{{ $message }}</span>
        @enderror
        <input type="text" name="class" placeholder="class"
         value="{{ old('name') }}">

        @error('class')
         <span>{{$message }}</span>
        @enderror
        <input type="text" name="phone_no" placeholder="phone_no"
          value="{{ old('name') }}"
        >

        @error('phone_no')
         <span>{{ $message }}</span>
        @enderror
        <input type="text" name="address" placeholder="address"
         value="{{ old('name') }}"
        >

        @error('address')
         <span>{{ $message }}</span>
        @enderror
        <button>submit</button>

     </form>
</body>
</html>
