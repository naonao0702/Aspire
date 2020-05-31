@extends('layout.app')

@section('title', '章')


@section('contents')
<div class="table-posision">
    <h3>進捗 : {{ $proportion }}%</h3>
    <p><a href="/lesson-item-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て完了にする</a></p>
    <p><a href="/lesson-item-not-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て未完了にする</a></p>

    <table>
        @foreach($datas as $data)
        <tr>
            <th>{{ $data->chapter_num }}章</th>
            <td>No. {{ $data->chapter_item_num }}</td>
            <td>{{ $data->chapter_item }}</td>
            <td><a href="{{ $data->url }}" target="_blank" class="button" style="text-decoration:none;">受講する</a></td>

            <td><a href="/lesson-item-not-complete/{{ $data->language_id }}/{{ $data->chapter_num }}/{{ $data->chapter_item_num }}" class="button" style="text-decoration:none;">未完了</a></td>

            <td><a href="/lesson-item-complete/{{ $data->item_id }}" class="button" style="text-decoration:none;">完了</a></td>

        </tr>
        @endforeach
    </table>
</div>
@endsection