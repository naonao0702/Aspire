<script>
import { HorizontalBar } from 'vue-chartjs';
// import 'chartjs-plugin-colorschemes';
export default {
//   name: 'BarChart',
  extends: HorizontalBar,
  data(){
    return {
        chartdata:{
            labels: ['PHP','Java','python','swift'],
            datasets: [{
                label: ['PHP'],
                // borderColor: '#f9fbfe',
                backgroundColor: ['#99CCFF', '#CC9966', '#006400', '#FF6928'],
                data: [50, 10, 20, 30]
            }]
        },
        options:{
            responsive: true,
            maintainAspectRatio: false,
            scales: {
              yAxes: [{
                  gridLines:{
                    lineWidth:0,
                    zeroLineWidth : 0
                  },
              }],
              xAxes: [{
                  ticks: {
                      min: 0,        // 軸の最小値
                      max: 100,       // 軸の最大値
                      stepSize: 10,    // 目盛り・補助線の間隔
                      display: false
                  },
                  gridLines:{
                    lineWidth:0,
                    zeroLineWidth : 0
                  },
              }]
            }
        },
    };
  },
//   props: ['data', 'options'],
  mounted () {
    this.renderChart(this.chartdata, this.options);
    // this.renderChart({
    //   labels: ['data-1','data-2','data-3'],
    //   datasets: [{
    //     label: 'sample',
    //     backgroundColor: ['#ddd', '#bbb', "#999S"],
    //     data: [300, 400, 150],
    //   }]
    // });
  },
};
</script>