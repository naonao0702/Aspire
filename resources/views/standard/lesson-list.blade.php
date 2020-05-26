@extends('layout.app')

@section('contents')
<div class="lesson-list-header">

</div>

<div class="lesson-list-container">
    @foreach($language_datas as $data)
    <a href="/lesson-detail/{{$data->language_id}}" style="text-decoration:none;">
        <div class="item">
            <h3> {{ $data->language }}</h3>
            <p> {{ $data->language }} について</p>
        </div>
    </a>
    @endforeach
</div>


@endsection