
<script>
// ここでチャートの種類を選択して...
// import { Doughnut, mixins } from 'vue-chartjs';
import { Doughnut } from 'vue-chartjs';
// const { reactiveProp } = mixins;
// import { Doughnut } from 'vue-chartjs';
/**
 * Bar       : 棒グラフ
 * Line      : 折れ線グラフ
 * Doughnut  : ドーナツグラフ
 * Pie       : 円グラフ
 * Radar     : レーダーグラフ
 * Polararea : 極域グラフ
 * Bubble    : バブルグラフ
 * Scatter   : 散布図（mixinでは未対応とのこと）
 **/
export default {
  extends: Doughnut,
  // data() {
  //     return {
  //       progress: [],
  //       // $v : "kensuke",
  //     };
  //   },
  // mixins: [mixins.reactiveProp],
  // mixins: [reactiveProp],
  // props: ['proportion'],
  // mounted () {
  //   this.renderChart(this.chartData, this.proportion);
  // }
  // mounted () {
  //     this.renderChart(this.proportion);
  //   }
  props: {
      proportion: {
        type: String,
        require  : true,
          default: () => {
          return [];
        }
      }
  },
  // watch: {
  //   proportion() {
      
  //     console.log(newHoge);
  //     // this.progress = value.map(() => false);
  //     // console.log(this.progress);
    // },
  //   proportion: {
  //       handler: function (val, oldVal) {
  //         console.log('someObj changed');
  //       },
  //       deep: true
  //   }
  // },
  mounted () {
    var data1 = this.proportion;
    var data2 = 100 - data1;
    // データを流し込むだけ
    this.renderChart({
      labels: ['達成済','未達成'],
      datasets: [{
        label: 'sample',
        backgroundColor: ['#ddd', '#bbb'],
        borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
            ],
        data: [data1, data2],
      }]
    })
  }
}
</script>

<style>
    #aspire {
      width: 20%;
      height: 20%;
  }
</style>
