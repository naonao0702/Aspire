@extends('layout.app')

@section('title', '章')


@section('contents')
<div class="table-position bool">
    <div class="chart">
      <canvas id="myPieChart"></canvas>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    </div>
    <h3 id="percent">進捗 : %</h3>
    <!-- <p><a href="/lesson-item-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て完了にする</a></p>
    <p><a href="/lesson-item-not-all/{{ $datas[0]->language_id }}/{{ $datas[0]->chapter_num }}" class="button" style="text-decoration: none;">全て未完了にする</a></p> -->

    <table>
        @foreach($datas as $data)

        <tr>
            <th>{{ $data->chapter_num }}章</th>
            <td>No. {{ $data->chapter_item_num }} .{{ $data->chapter_item }}</td>
            <!--<td>{{ $data->chapter_item }}</td>-->
            <td><a href="{{ $data->url }}" target="_blank" class="btn">受講する</a></td>
            <td><button class="role">完了</button></td>

            <!--@if($data->role == 'yet')-->
            <!--<td><a href="/lesson-item-complete/{{ $data->item_id }}" class="btn btnBool">完了</a></td>-->
            <!--@else-->
            <!--<td><a href="/lesson-item-not-complete/{{ $data->language_id }}/{{ $data->chapter_num }}/{{ $data->chapter_item_num }}" class="btn">未完了</a></td>-->
            <!--@endif-->
        </tr>

        @endforeach
    </table>
</div>
@endsection