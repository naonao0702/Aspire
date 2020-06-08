
<script>
// ここでチャートの種類を選択して...
// import { Doughnut, mixins } from 'vue-chartjs';
import { Doughnut } from 'vue-chartjs';
// const { reactiveProp } = mixins;
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
  // mixins: [Doughnut, mixins.reactiveData],
  extends: Doughnut,
  data() {
    return {
      color1: '#ddd',
      color2: '#ddd'
    };
  },
  props: {
      proportion: {
        type: String,
        require  : true,
          default: () => {
          return [];
        }
      }
  },
  methods: {
      changeColor: function() {
        console.log(this.proportion);
        if(this.proportion == 100 ){
          this.color1 = '#99CC66';
        }else if(this.proportion >= 80){
          this.color1 = '#FFCC33';
        }else if(this.proportion >= 50){
          this.color1 = '#CD5C5C';
        }else{
          this.color1 = '#6699CC';
        }
      }
  },
  mounted () {
    this.changeColor();
    var data1 = this.proportion;
    var data2 = 100 - data1;
    // データを流し込むだけ
    this.renderChart({
      labels: ['達成済','未達成'],
      datasets: [{
        label: 'sample',
        backgroundColor: [this.color1, this.color2],
        borderColor: [this.color1, this.color2],
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
