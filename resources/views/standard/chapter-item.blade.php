@extends('layout.app')

@section('title', '章')


@section('contents')
<div class="table-posision">
    <h3>進捗 : {{ $proportion }}%</h3>
    <table>
        @foreach($datas as $data)
        <tr>
            <th>{{ $data->chapter_num }}章</th>
            <td>No. {{ $data->chapter_item_num }}</td>
            <td>{{ $data->chapter_item }}</td>
            <td><a href="{{ $data->url }}" target="_blank" class="button" style="text-decoration:none;">受講する</a></td>
            @if($data->is_complete == 1)
            <td><a href="/lesson-item-complete/{{ $data->item_id }}" class="button" style="text-decoration:none;">未完了</a></td>
            @else
            <td><a href="/lesson-item-complete/{{ $data->item_id }}" class="button" style="text-decoration:none;">完了</a></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection