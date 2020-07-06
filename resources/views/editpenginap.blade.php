<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Your page description here" />
  		<meta name="author" content="" />

  		<!-- css utama -->
  		<link href="css/bootstrap.css" rel="stylesheet" />
  		<link href="css/bootstrap-responsive.css" rel="stylesheet" />
  		<link href="css/prettyPhoto.css" rel="stylesheet" />
  		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  		<link href="css/style.css" rel="stylesheet">

  		<!-- css file asset iconic -->
  		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  		<link rel="stylesheet" href="assets/css/styles.css"> 

  		<!-- Theme skin -->
  		<link id="t-colors" href="color/default.css" rel="stylesheet" />

  		<!-- Fav and touch icons -->
  		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  		<link rel="shortcut icon" href="ico/favicon.png" />
  
  		<title>StayManaged - Jogja Migunani</title>

	</head>
	
	<body>
  		@include('include.header')
			<a href="/penginap" class="btn btn-primary"> Kembali</a>
			<fieldset>
         		<legend> <h3>Edit Data Penginap Jogja Migunani 2020 </h3> </legend>
							<tr bgcolor='	#808080' align='center'>
								@foreach($penginap as $p)
									<form action="/penginap/update" method="post">
									{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
											Nama : <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
											Umur : <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/>
											Tanggal : <input type="date" required="required" name="tanggal" value="{{ $p->tanggal }}"> <br/>
										<input type="submit" value="Simpan Data">
									</form>
								@endforeach
							</tr>
			</fieldset>
	</body>
</html>