<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal</title>
</head>

<body>
    <ol>
        @foreach ($royal as $ro)
        <li>{{$ro}}</li>
        @endforeach
    </ol>
</body>

</html>