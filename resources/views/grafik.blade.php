<div class="row">
    <div class="col-lg-12">
        <h1 align="Center"> Analisis Data penginap 2020</h1>
    </div>
</div>

<!-- Script -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<div class="row">
    <div class="col-lg-12">
        <a href="/penginap" class="btn btn-primary">Kembali</a>
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
        split: false,
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
        data: [ {{$penginapA = DB::table('penginap')
                            ->whereMonth('tanggal', '01')
                            ->count() }},
                {{$penginapB = DB::table('penginap')
                            ->whereMonth('tanggal', '02')
                   			->count()}},
                {{$penginapC = DB::table('penginap')
                            ->whereMonth('tanggal', '03')
                   			->count()}},
                {{$penginapD = DB::table('penginap')
                            ->whereMonth('tanggal', '04')
                   			->count()}},
                {{$penginapE = DB::table('penginap')
                            ->whereMonth('tanggal', '05')
                   			->count()}},
                {{$penginapF = DB::table('penginap')
                            ->whereMonth('tanggal', '06')
                   			->count()}},
                {{$penginapG = DB::table('penginap')
                            ->whereMonth('tanggal', '07')
                   			->count()}}
                            ]
    }]
});
</script>
