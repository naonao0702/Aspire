<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--css-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chart.css') }}" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        <h1>ロゴ</h1>
        <nav>
          <ul>
            <li><a href="/">Myページ</a></li>
            <li><a href="/lesson-list">レッスン一覧</a></li>
            <li><a href="/">レッスン一覧</a></li>
            <li><a href="/">レッスン一覧</a></li>
          </ul>
        </nav>
  　</div>
    <div class="content-wrapper">
        @yield('contents')
    </div>
　　<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>