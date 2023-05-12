<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index') }}">Back to index</a> <br />
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="file" name="file" placeholder="File">
        <input type="submit" value="Send">
    </form>
</body>
</html>