@extends('layout.app')

@section('contents')
<!--<div class="lesson-list-header">-->

<!--</div>-->
<!--<div>-->
<!--    <progress id="myProgress" value="50" max="100">0%</progress>-->
<!--  </div>-->


<div>
    <div>
        <div class="lessons-language"> <!--100vh-->
            <div class="progress-rates"> <!--50%-->
                <div class="rate-items row">
                    <!--<div class="col-md-4">-->
                    <!--    <p>rate</p>-->
                    <!--</div>-->
                    <div class="col-md-8" id="aspire">
                        <!--<p>rate</p>-->
                        <sidebar-component></sidebar-component>
                    </div>
                    <div class="col-md-4">
                        <p>rate</p>
                    </div>
                </div>
            </div>
            <div class="languages"><!--50%-->
                <p>Lessons</p>
                <ul class="pl-0">
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
</div>



@endsection