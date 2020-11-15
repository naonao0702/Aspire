@extends('layout.app')

@section('contents')

@php
    $count = count($chapter_datas);
    $result = floor(3 / $count * 100);
 @endphp

<div class="table-position">
    <p class="titleLanguageName">{{ $language_datas->language }}</p>
    <div class="chart">
      <canvas id="myPieChart"></canvas>
      <p>{{ $result }}%</p>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    </div>
    
    <table>
         
        @foreach($chapter_datas as $data)
                
        <tr>
            <th> {{ $data->chapter_num }} 章</th>
            <td><a href="/lesson-item/{{$data->language_id}}/{{$data->chapter_num}}" class="btn" style="text-decoration:none;">詳細</a></td>
        </tr>
        @endforeach
    </table>
</div>
<script>
      /* global Chart */
      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
          
        type: 'pie',
        data: {
        //   labels: ["A型",],
          labels: ['達成','未達'],
          datasets: [{
              backgroundColor: [
                  "rgba(186, 255, 186, 1)",
                  '#F3F1F1',
              ],
              
              data: ['{{ $result }}', 100 - '{{ $result }}']
          }]
        },
        options: {
          title: {
            display: false,
            text: '血液型 割合'
          }
        }
      });
      </script>


@endsection

@section('side-bar-contents')

@endsection