<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <a href="{{ route('create') }}">Create</a>
    <ul>
        @forelse ($infos as $info)
         <li>{{ $info->name }}  {{ $info->file_uri }}</li>   
        @empty
            <li>No data</li>
        @endforelse

    </ul>
</body>
</html>