<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
        <br />
        @csrf
        <input type="text" placeholder="Name">
        <input type="file" placeholder="File">
        <input type="submit" value="send">
    </form>
</body>
</html>