<!-- <html>
  <head> 
  Tambah Data Penginap 
  </head>

  <body>
    <br>
      <a href="/penginap" class="btn btn-primary"> Kembali</a>
	      <br/>
	      <br/>
          <fieldset>
            <legend> <h3>Tambah Data Penginap Jogja Migunani 2020 </h3> </legend>
		          <tr bgcolor='	#808080' align='center'>
	              <form action="/penginap/store" method="post">
		            {{ csrf_field() }}
		              Nama : <input type="text" name="nama" required="required"> <br/>
		              Umur : <input type="number" name="umur" required="required"> <br/>
		              <input type="submit" value="Simpan Data">
	              </form>
	          </tr>
        </fieldset>
  </body>
</html>
  -->

<!DOCTYPE html>
<html>
<head>
<title>Tambah Penginap</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

 
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Tambahkan Data Penginap</h3>
               <form action="/penginap/store" method="post">
 
				 {{ csrf_field() }}

         <div class="form-group">
					  <label class="col-md-3 control-label" for="nik">NIK</label>
						  <div class="col-md-9">
							  <input type="number" required="required" name="nik" class="form-control">
					  	</div>
				</div>
				 
				 <div class="form-group">
					  <label class="col-md-3 control-label" for="nama">Nama</label>
						  <div class="col-md-9">
							  <input type="text" required="required" name="nama" class="form-control">
					  	</div>
				</div>

        <div class="form-group">
					  <label class="col-md-3 control-label" for="alamat">Alamat</label>
						  <div class="col-md-9">
							  <input type="text" required="required" name="alamat" class="form-control">
					  	</div>
				</div>
 
        <div class="form-group">
					  <label class="col-md-3 control-label" for="umur">Umur</label>
						  <div class="col-md-9">
							  <input type="number" required="required" name="umur" class="form-control">
						  </div>
				</div>

        <div class="form-group">
					  <label class="col-md-3 control-label" for="jk">Jenis Kelamin</label>
            <div class="col-md-9">
							  <input type="text" required="required" name="jk" class="form-control">
					  	</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label" for="tanggal">Tanggal</label>
						<div class="col-md-9">
							<input type="date" required="required" name="tanggal" class="form-control">
						</div>
				</div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>