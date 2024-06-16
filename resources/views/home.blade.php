<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @php
    $names = ["sathi1"=>"ram","sathi2"=>"hari"];
    @endphp
    @include('pages.header', ['sathiharu'=>$names])
    <h2>this is body</h2>
    @include('pages.footer')
</body>

</html>