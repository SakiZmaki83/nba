<!doctype html>
<html>
    <head>
       
        <title></title>

    </head>
    <body>
<ul>
    @foreach($teams as $team)
       <li><a href="{{ route('single-team',['id'=> $team->id]) }}"> {{ $team->name }} </a></li>
    @endforeach
</ul>       
    </body>
</html>
