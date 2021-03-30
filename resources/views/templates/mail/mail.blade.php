<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container p-3">
        <h1 style="text-align: center">{{$test->subject}}</h1>
        <p>{{$request->content}}</p>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>