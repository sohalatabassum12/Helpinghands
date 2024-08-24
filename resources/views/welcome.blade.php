<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach ($workers as $worker)
        <h2>name: {{$worker->user->name}}</h2>
        <h2>type: {{$worker->work_type}}</h2>
        @php
            $w = $worker->getMedia();
        @endphp

        <img src="{{$w[0]->getUrl('preview')}}" alt="">
    @endforeach
    
</body>
</html>