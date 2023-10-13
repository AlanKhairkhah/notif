<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>

    <script>
        Push.create("{{$notifs->title}}" , {
            body:"{{$notifs->body}}",
            timeout:5000,
            requiredInteraction:true,
            onClick()
            {
                location.href = "{{$notifs->link}}";
            }
        });


    </script>
</body>
</html>
