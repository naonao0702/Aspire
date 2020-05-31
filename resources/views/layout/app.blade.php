<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!--css-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header-container">
        <div class="header-wrapper">
            <div class="header-box-wrapper">
                <div class="header-content">
                    <div class="header-img">
                        <img src="{{ asset('images/freeks.png') }}" alt="ロゴ画像">
                    </div>
                    <div class="header-nav">
                        <a href="/lesson-list" class="header-button">レッスン一覧</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="main-content">
                        @yield('contents')
                </div>
                <div class="footer">フッターです</div>
            </div>
        </div>

        <!--<div class="footer">フッターです</div>-->
    </div>

</body>

</html>