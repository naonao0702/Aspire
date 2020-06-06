@extends('layout.top')



@section('contents')

<div class="top-aspire">
    <!--<div class="my-page-top">-->
    <!--    <p>お帰りなさい {{ $user->name }} さん</p>-->
    <!--</div>-->

    <!--<div class="my-page">-->
    <!--    <p>受講中カリキュラム</p>-->
    <!--</div>-->

    <!--<div class="my-page-bottom"></div>-->
    <div class="header-bgimg">
        <div class="header-title">
            <h1>Aspire</h1>
            <h2>「驚き」を次の「当たり前」に</h2>
        </div>

        <a href="/lesson-list" class="top-button small">レッスン一覧</a>
    </div>
</div>
@endsection

@section('side-bar-contents')

@endsection