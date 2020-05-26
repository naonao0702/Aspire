@extends('layout.app')

@section('contents')

<div class="table-posision">
    <table>
        @foreach($chapter_datas as $data)
        <tr>
            <th>Test</th>
            <td> {{ $data->chapter_num }} 章</td>
            <td><a href="/lesson-item/{{$data->language_id}}/{{$data->chapter_num}}" class="button" style="text-decoration:none;">詳細</a></td>
        </tr>
        @endforeach
    </table>
</div>


@endsection

@section('side-bar-contents')

@endsection