<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Wisata 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center mt-5">Data Wisata</h1>
    <div class="container">
        <div id="wisata"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/10.3.2/highcharts.js"></script>
    <script>
        Highcharts.chart('wisata', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik harga data wisata Indonesia'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="http://ict-juara.herokuapp.com" ' +
            'target="_blank">http://ict-juara.herokuapp.com</a>'
    },
    xAxis: {
        categories: <?php echo $n; ?>,
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Harga tiket masuk'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Wisata',
        data: <?php echo $h; ?>

    }]
});
    </script>
  </body>
</html>