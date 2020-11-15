@extends('layout.app')

@section('contents')
<div class="items">
    @foreach($language_datas as $data)
        <div class="itemBox">
            
            <p class="languageName">{{ $data->language }}</p>
            <div class="boxInner">
            </div>
            <a href="/lesson-detail/{{$data->language_id}}" class="btn">受講する</a>
            <!--<input type="submit" class="btn" value="受講する" href="#" />-->
            <!--<button>受講する</button>-->
        </div>
    @endforeach
</div>


@endsection