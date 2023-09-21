<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        
        @foreach($data as $eachdata)
        <p>{{$eachdata["title"]}}</p>
        <p>{{$eachdata["description"]}}</p>
        <br />
        @endforeach
    </body>
</html>