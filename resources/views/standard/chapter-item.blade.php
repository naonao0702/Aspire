@extends('layout.app')

@section('title', '章')


@section('contents')

<div class="table-posision">
    <div id="aspire">
        <chart-component proportion="{{ $proportion }}"></chart-component>
        <!--<chart-component></chart-component>-->
        <!--<example-component test="{{ $proportion }}"></example-component>-->
    </div>
    <h3>進捗 : {{ $proportion }}%</h3>
    <a href="/lesson-item-all-complete/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration:none;">全て完了</a>
    <a href="/lesson-item-all-not-complete/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration:none;">全て未完了</a>


    <!-- <p><a href="/lesson-item-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て完了にする</a></p>
    <p><a href="/lesson-item-not-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て未完了にする</a></p> -->

    <table>
        @foreach($datas as $data)

        <tr>
            <th>{{ $data->chapter_num }}章</th>
            <td>No. {{ $data->chapter_item_num }}</td>
            <td>{{ $data->chapter_item }}</td>
            <td><a href="{{ $data->url }}" target="_blank" class="button" style="text-decoration:none;">受講する</a></td>

            @if($data->role == 'yet')
            <td><a href="/lesson-item-complete/{{ $data->item_id }}" class="button" style="text-decoration:none;">完了</a></td>
            @else
            <td><a href="/lesson-item-not-complete/{{ $data->language_id }}/{{ $data->chapter_num }}/{{ $data->chapter_item_num }}" class="button" style="text-decoration:none;">未完了</a></td>
            @endif
        </tr>

        @endforeach
    </table>
</div>
@endsection