<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body dir="rtl">

    <div class="container">
        <div class="title text-center text-primary h4 mt-3">
            اضافه کردن نوتیفیکیشن جدید
        </div>
        <form action="{{route('admin.store')}}" method="post">
            @csrf
        <div class="form-group">
            <input class="form-control mt-5" placeholder="عنوان نوتیفیکیشن را وارد کنید.." type="text" name="title">
        </div>
        <div class="form-group">
            <input class="form-control mt-5" placeholder="بدنه نوتیفیکیشن را وارد کنید.." type="text" name="body">
        </div>
        <div class="form-group">
            <input class="form-control mt-5" placeholder="لینک نوتیفیکیشن را وارد کنید.." type="text" name="link">
        </div>
        <button type="submit" class="btn btn-success btn-block">ساخت نوتیفیکیشن</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
