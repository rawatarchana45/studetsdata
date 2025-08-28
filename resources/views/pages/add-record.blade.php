<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center " style="height: 100vh">

    <form action="{{ route('record.add') }}" method="POST" class="form">
        @csrf
        <h1>Add New Record</h1>
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="text" name="name" class="form-control mb-3" placeholder="enter book name"
            value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" name="rank_no" class="form-control mb-3" placeholder="rank no"
            value="{{ old('rank_no') }}">
        @error('rank_no')
            <span class="text-danger">{{ $message }}</span>

        @enderror
        <button type="submit" class="btn btn-primary w-100">Add</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
