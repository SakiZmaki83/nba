<!doctype html>
<html>
    <head>
       
        <title></title>

    </head>
    <body>
<ul>
    @foreach($players as $player)
       <li><a href="{{ route('single-player',['id'=> $player->id]) }}"> {{ $player->first_name }} </a></li>
    @endforeach
</ul>       
    </body>
</html>
