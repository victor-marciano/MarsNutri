<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Auth::check() ? Auth::user() : "Faça seu login" }}

    <form action="{{ url('/logout') }}" method="post">
        <button type="submit">Logout</button>
    </form>
   
</body>
</html>