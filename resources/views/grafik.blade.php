<div class="row">
    <div class="col-lg-12">
        <h1 align="Center"> Analisis Data penginap 2020</h1>
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
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
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
                return this.value;
            }
         }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Orang'
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
        name: 'Jumlah Penginap',
        data: [100, 125, 60, 75, 89, 35, 40]
    }]
});
</script>
