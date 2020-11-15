@extends('layout.app')



@section('contents')
<div class="myPageWrapper">
    <div class="myPageUser">
        <p class="pageCallBack">お帰りなさい {{ $user->name }} さん</p>
    </div>
    <div class="headUserWrapper">
        <div class="head-user">
            <div class="my-page-top">
                <p>最近の学習状況</p>
            </div>
            <div class="my-page-bottom"></div>
        </div>
        <div class="head-user">
            <div class="my-page-top">
                <p>受講中カリキュラム</p>
            </div>
            <div class="my-page-bottom"></div>
        </div>
    </div>
</div>
@endsection

@section('side-bar-contents')

@endsection