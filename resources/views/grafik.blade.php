<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StayManaged</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/"><span>Stay</span>Managed</a>
				
					
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<!--<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">-->
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin {{ old('name', auth()->user()->name) }}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="/penginap"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/riwayatperbulan"><em class="fa fa-dashboard">&nbsp;</em> Riwayat Perbulan</a></li>
			<li class="active"><a href="/grafik"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
            <div class="row">
                <div class="col-lg-12">
                <h1 align="Center"> Analisis Data penginap 2020</h1>
            </div>
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
        valueSuffix: ' Orang'
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

<div class="row">
    <div class="col-lg-12">
        <figure class="highcharts-figure">
            <div id="grafik_jk"></div>
        </figure>
    </div>
</div>

<script src="assets/highcharts//highcharts.js"></script>
<script src="assets/highcharts/modules/exporting.js"></script>
<script src="assets/highcharts/modules/export-data.js"></script>
<script src="assets/highcharts/modules/accessibility.js"></script>

<script type="text/javascript">
// Make monochrome colors
var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('grafik_jk', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            { name: 'Perempuan', y:  {{$penginapjk1 = DB::table('penginap')
                   				    ->where('jk', 'PEREMPUAN')
                    			    ->count() }} },
            { name: 'Laki-laki', y:  {{$penginapjk2 = DB::table('penginap')
                    			    ->where('jk', 'LAKI-LAKI')
                    			    ->count() }} }
        ]
    }]
});
</script>

</body>
</html>
