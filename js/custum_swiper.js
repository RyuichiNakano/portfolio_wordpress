//  $(function(){
 
//         var drawGraph = function(data){
//             var ctx = document.getElementById('graph').getContext('2d');
//           // データ1
//             var data1 = {
//                 label:'今日 (%)',
//                 data:data[1],
//                 backgroundColor: "rgba(250, 50, 50, 0.3)",
//                 borderColor: "rgba(200, 50, 50, 0.3)",
//                 pointHoverBackgroundColor: "rgba(200, 50, 50, 0.3)",
//                 pointHoverBorderColor: "rgba(200, 50, 50, 0.3)",
//             };
//           // データ2
//             var data2 = {
//                 label:'昨日 (%)',
//                 data:data[2],
//                 backgroundColor: "rgba(50, 50, 250, 0.3)",
//                 borderColor: "rgba(50, 50, 200, 0.3)",
//                 pointHoverBackgroundColor: "rgba(50, 50, 200, 0.3)",
//                 pointHoverBorderColor: "rgba(50, 50, 200, 0.3)",
//             }
//           // ラベル(横軸)
//             var label = data[0];
 
//           // データの設定
//             var config = {
//                 type: 'radar', // グラフの種類（レーダーチャートを指定）
//                 data: { labels: label, datasets: [data1, data2]},
 
//                 // オプション設定
//                 options: {
//                     //凡例の設定
//                     legend: {
//                       position: 'left',
//                     },
//                     // レスポンシブ指定
//                     responsive: true,
//                     //スケールの設定
//                     scale: {
//                         pointLabels: {
//                             fontSize: 15,
//                         },
//                         ticks: {
//                             // 目盛り値のカスタマイズ
//                             stepSize: 10,
//                             // 最小値の値を0指定
//                             beginAtZero:true,
//                             min: 0,
//                             // 最大値を指定
//                             max: 100,
//                         }
//                     }
//                 }
//             }
 
//           var myChartGraph = new Chart(ctx, config);
 
//         };
 
//         // ラベルの設定
//         var data = [['１群', '２群', '３群', '４群', '５群','６群'],
//                     [44, 30, 43, 11, 70, 20],
//                     [50, 30, 11, 89, 36, 55]]
//         drawGraph(data);
//     })