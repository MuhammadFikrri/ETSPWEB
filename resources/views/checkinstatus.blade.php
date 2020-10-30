<!DOCTYPE html>
<html>
<head>
    <title> Check in status - Hotelku </title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
            body {
                font-family: 'Nunito';
            }
    </style>
<head>
<body style="margin: 5% 20% 5% 20%">
    <h1> Check in status </h1>
    
    @if($status->isEmpty())
    @foreach($user as $u)
    <p>Name : {{ $u->name }} </p>
    <p>Status : Not Checked In</p>
    @endforeach
    @else
    @foreach($user as $u)
    @foreach($status as $s)
    <p>Name : {{ $u->name }} </p>
    <p>Status : Checked In</p>
    <p>Room : {{ $s->kmr_IDKamar }}</p>
    @endforeach
    @endforeach
    @endif
    
</body>

</html>
