@extends('layout.app')

@section('title', '章')


@section('contents')
<div class="table-posision">
    <table>
        @foreach($datas as $data)
        <tr>
            <th>{{ $data->chapter_num }}章</th>
            <td>No. {{ $data->chapter_item_num }}</td>
            <td>{{ $data->chapter_item }}</td>
            <td><a href="{{ $data->url }}" target="_blank" class="button" style="text-decoration:none;">受講する</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection