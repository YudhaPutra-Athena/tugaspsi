<div class="row">
    <div class="col-lg-12">
        <h1> Analisis <small> Data penginap 2020 </small></h1>
        <ol class="Breadcrumb">
            <li class="active"> Grafik Penginap</li>
        <ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <figure class="highcharts-figure">
            <div id="grafik_penginap"></div>
        </figure>
    </div>
</div>



<script src="assets/highcharts//highcharts.js"></script>
<script src="assets/highcharts/modules/exporting.js"></script>
<script src="assets/highcharts/modules/export-data.js"></script>
<script src="assets/highcharts/modules/accessibility.js"></script>

<script type="text/javascript">
    Highcharts.chart('grafik_penginap', {
        chart: {
        type: 'area'
    },
    title: {
        text: 'Homestay Jogja Migunani - StayManaged'
    },
    subtitle: {
        text: 'Jumlah Penginap Tahun 2020'
    },
    xAxis: {
        categories: ['1750', '1800', '1850', '1900', '1950', '1999', '2050'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        },
        labels: {
            formatter: function() {
                return this.value / 1000;
            }
         }
    },
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
             }
         }
     },
    series: [{
        name: 'Asia',
        data: [502, 635, 809, 947, 1402, 3634, 5268]
    }]
});
</script>
