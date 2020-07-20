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
			<!--	<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt=""> -->
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
			<li class="active"><a href="/riwayatperbulan"><em class="fa fa-dashboard">&nbsp;</em> Riwayat Perbulan</a></li>
			<li><a href="/grafik"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
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
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Januari 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapA as $p1)
							<tr>
								<td>{{ $p1->id }}</td>
								<td>{{ $p1->nik }}</td>
								<td>{{ $p1->nama }}</td>
								<td>{{ $p1->alamat }}</td>
								<td>{{ $p1->umur }}</td>
								<td>{{ $p1->jk }}</td>
								<td>{{ $p1->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapA = DB::table('penginap')
                    ->whereMonth('tanggal', '01')
                    ->count() }}
				</fieldset>
			</div>
	

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Februari 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapB as $p2)
							<tr>
								<td>{{ $p2->id }}</td>
								<td>{{ $p2->nik }}</td>
								<td>{{ $p2->nama }}</td>
								<td>{{ $p2->alamat }}</td>
								<td>{{ $p2->umur }}</td>
								<td>{{ $p2->jk }}</td>
								<td>{{ $p2->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapB = DB::table('penginap')
                    		->whereMonth('tanggal', '02')
                   			->count()}}
				</fieldset>
			</div>

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Maret 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapC as $p3)
							<tr>
								<td>{{ $p3->id }}</td>
								<td>{{ $p3->nik }}</td>
								<td>{{ $p3->nama }}</td>
								<td>{{ $p3->alamat }}</td>
								<td>{{ $p3->umur }}</td>
								<td>{{ $p3->jk }}</td>
								<td>{{ $p3->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapC = DB::table('penginap')
                    		->whereMonth('tanggal', '03')
                   			->count()}}
				</fieldset>
			</div>

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani April 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapD as $p4)
							<tr>
								<td>{{ $p4->id }}</td>
								<td>{{ $p4->nik }}</td>
								<td>{{ $p4->nama }}</td>
								<td>{{ $p4->alamat }}</td>
								<td>{{ $p4->umur }}</td>
								<td>{{ $p4->jk }}</td>
								<td>{{ $p4->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapD = DB::table('penginap')
                    		->whereMonth('tanggal', '04')
                   			->count()}}
				</fieldset>
			</div>

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Mei 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapE as $p5)
							<tr>
								<td>{{ $p5->id }}</td>
								<td>{{ $p5->nik }}</td>
								<td>{{ $p5->nama }}</td>
								<td>{{ $p5->alamat }}</td>
								<td>{{ $p5->umur }}</td>
								<td>{{ $p5->jk }}</td>
								<td>{{ $p5->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapE = DB::table('penginap')
                    		->whereMonth('tanggal', '05')
                   			->count()}}
				</fieldset>
			</div>

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Juni 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapF as $p6)
							<tr>
								<td>{{ $p6->id }}</td>
								<td>{{ $p6->nik }}</td>
								<td>{{ $p6->nama }}</td>
								<td>{{ $p6->alamat }}</td>
								<td>{{ $p6->umur }}</td>
								<td>{{ $p6->jk }}</td>
								<td>{{ $p6->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapF = DB::table('penginap')
                    		->whereMonth('tanggal', '06')
                   			->count()}}
				</fieldset>
			</div>

			<div class="row">
				</br>
				<fieldset>
          			<legend>Penginap Homestay Jogja Migunani Juli 2020</legend>
					  <table border='1'>
						<center>  <table border='5' width='900'> </center>
							<tr bgcolor='	#68c8de' align='right'>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Booking</th>
							</tr>
							@foreach($penginapG as $p7)
							<tr>
								<td>{{ $p7->id }}</td>
								<td>{{ $p7->nik }}</td>
								<td>{{ $p7->nama }}</td>
								<td>{{ $p7->alamat }}</td>
								<td>{{ $p7->umur }}</td>
								<td>{{ $p7->jk }}</td>
								<td>{{ $p7->tanggal}}</td>
							</tr>
							@endforeach
					</table>
					Total : {{$penginapG = DB::table('penginap')
                    		->whereMonth('tanggal', '07')
                   			->count()}}
				</fieldset>
			</div>

		</div>
		

		
		<!--/.row-->
<!-- 		<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div> -->
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>