@extends('layout.app')

@section('contents')
<!--<div class="lesson-list-header">-->

<!--</div>-->
<!--<div>-->
<!--    <progress id="myProgress" value="50" max="100">0%</progress>-->
<!--  </div>-->


<div>
    <div>
        <div class="lessons-language">
            <ul class="languages">
                @foreach($language_datas as $data)
                    <?php $logo = mb_strtolower($data->language); ?>
                    <li class="lessons">
                        <div class="image-item">
                            <img src="{{ asset("images/$logo.svg") }}" alt="ロゴ画像">
                            <a href="/lesson-detail/{{$data->language_id}}" class="btn4">{{ $data->language }}</a>
                        </div>
                    </li>
                 @endforeach
            </ul>
        </div>
    </div>
</div>



@endsection