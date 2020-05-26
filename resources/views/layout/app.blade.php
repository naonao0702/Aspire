<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
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
            <div class="main-content">@yield('contents')</div>
            <div class="side-bar-content">@yield('side-bar-contents')</div>
        </div>

        <div class="footer">フッターです</div>
    </div>

</body>

</html>