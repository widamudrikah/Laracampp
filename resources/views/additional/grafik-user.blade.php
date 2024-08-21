<body>
<h1 class="text-center">Laravel 8 Highcharts Example - ItSolutionStuff.com</h1>
<div class="container">

<div id="container"></div>

</div>

</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
   
    Highcharts.chart('container', {
        title: {
            text: 'Data Users'
        },

        subtitle: {
            text: 'Source: itsolutionstuff.com.com'
        },

         xAxis: {
            categories: <?php echo json_encode($tgl); ?>,
            croshair: true
        },

        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },

        series: [{
            name: 'New Users',
            data: <?php  echo json_encode($orang); ?>
        }],
        
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>