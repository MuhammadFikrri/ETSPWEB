<!DOCTYPE html>
<html>
<head>
    <title> Profile - Hotelku </title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
            body {
                font-family: 'Nunito';
            }
    </style>
<head>
<body style="margin: 5% 20% 5% 20%">
    <h1> Profile </h1>

    @foreach($user as $u)
    <p>Name : {{ $u->name }} </p>
    <p>Email : {{ $u->email }} </p>
    @endforeach

    
</body>

</html>
