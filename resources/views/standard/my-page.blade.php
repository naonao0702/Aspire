@extends('layout.app')



@section('contents')

<div class="head-user">
    <div class="my-page-top">
        <p>お帰りなさい {{ $user->name }} さん</p>
    </div>

    <div class="my-page">
        <p>受講中カリキュラム</p>
    </div>

    <div class="my-page-bottom"></div>
</div>
@endsection

@section('side-bar-contents')

@endsection