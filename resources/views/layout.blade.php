<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('styles')
    <style>
        .preloader-container {
            position: fixed;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-bar {
            height: 0%;
            width: 5px;
            background: #007bff;
            position: absolute;
            /*top: 50%;*/
            transform: translateY(50%);
        }
    </style>
</head>
<body>
<div class="preloader-container">
    <div class="progress-bar"></div>
</div>
<header>
    <div>
        <a href="{{ route('homes.index') }}">Дома</a>
        <a href="{{ route('apartments.index') }}">Квартиры</a>
        <a href="{{ route('clients.index') }}">Клиенты</a>
        <a href="{{ route('sales.index') }}">Продажи</a>
    </div>
</header>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stack('scripts')
<script type="text/javascript">window.addEventListener('load', function () {
        const progressbar = document.querySelector('.progress-bar');
        let height = 0;

        const interval = setInterval(() => {
            height += 1;
            progressbar.style.height = height + '%';

            if (height >= 100) {
                clearInterval(interval);
                // Прелоадер скрывается после окончания анимации прогресс бара
                document.querySelector('.preloader-container').style.display = 'none';
            }
        }, 10);
    });
</script>
</body>
</html>
