@extends('layout')
@section('content')

			<h2>OUR COM</h2>
			<h5>Photo of me:</h5>
			<div class="fakeimg">
				<img src="https://i.pinimg.com/originals/cd/a3/66/cda36696d58bc09659bf1d26f6695189.png"width="300">
                <img src="https://i7.unansea.com/image/a318ae5b701f0ea0.jpg"width="300">
<img src="https://stan.kz/download/uploads/news_full1594385970bab24a4261b3ed3ce26591afe73800a8.jpg"width="300">
		<img src="https://tolqyn.kz/uploads/posts/2020-12/1606810201_image-1.jpg">
    <img src="http://stan.kz/wp-content/uploads/2016/09/skachannye-fayly.jpg"width="300">
  <img src="https://diabetes-education.net/wp-content/img/kakie-frukti-polezni-diabetikam.jpg">
			</div>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body>
  <canvas id="myChart" width="300" height="100"></canvas>
  <script type="text/javascript">
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx,{
      "type":"line",
      "data":{
        "labels":["December","January","February","March","April","May","June"],
        "datasets":[{"label":"Our number of consumers","data":[650,590,800,810,960,1000,1200],"fill":false,"borderColor":"rgb(155, 254, 144)","lineTension":0.8}]
      },"options":{}
    });


  </script>

</body>
</html>
<canvas id="myChart1" width="300" height="100"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart1");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2017" , "2018" , "2019", "2020","2021"],
            datasets: [
               { label: 'Our number of workers',
               data: [5000,6000,10000,12000,15000],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgb(124, 130, 255 )',
               'rgba(124, 255, 197 )',
               'rgba( 234, 144, 254)',
               'rgba(254, 219, 144 )',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>
<canvas id="myChart2" width="300" height="100"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart2");
   var myChart = new Chart(ctx, {
      type: 'doughnut',
      data:{
        labels:["beauty and health","Home, comfort","Goods for kids","Products from Korea"],
        datasets:[
        {
          label:'Top products',
          data:[10,20,30,25],
          backgroundColor:[
          'rgba(126, 170, 132,1)',
          'rgba(244, 244, 173,1)',
          'rgba(244, 105, 173,1)',
          'rgba(18, 4, 173,1)',
          ],
        }
        ]
      },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
			@stop
