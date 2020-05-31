@extends('layout.app')

@section('contents')
<!--<div class="lesson-list-header">-->

<!--</div>-->

<div class="lesson-list-container row">
    <div class="col-md-8">
        @foreach($language_datas as $data)
        <div class="language-item">
            <div class="item">
                <div class="row">
                    <div class="col-md-2 image-item">
                        <?php $logo = mb_strtolower($data->language);?>
                        <!--<img src="{{ asset('images/java.svg') }}" alt="ロゴ画像">-->
                        <img src="{{ asset("images/$logo.svg") }}" alt="ロゴ画像">
                    </div>
                    <div class="col-md-10">
                        <a href="/lesson-detail/{{$data->language_id}}" style="text-decoration:none;">
                            <h3> {{ $data->language }}</h3>
                            <p> {{ $data->language }} について</p>
                            <p> {{ $data->language }} について</p>
                            <p> {{ $data->language }} について</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-4 sidemenu">
        
    </div>

</div>



@endsection