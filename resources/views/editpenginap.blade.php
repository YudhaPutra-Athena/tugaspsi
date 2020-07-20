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
<title>Edit Penginap</title>
 
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
			<h3 class="login-heading mb-4">Edit Data Penginap</h3>
			@foreach($penginap as $p)
               <form action="/penginap/update" method="post">
				 {{ csrf_field() }}
				 
						<!-- id hidden input-->
						<div class="form-group">
							<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
						</div>

						<!-- Name input-->

						<div class="form-group">
							<label class="col-md-3 control-label" for="nik">NIK</label>
							<div class="col-md-9">
								<input type="number" required="required" name="nik" value="{{ $p->nik }}" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Nama</label>
							<div class="col-md-9">
								<input type="text" required="required" name="nama" value="{{ $p->nama }}" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="alamat">Alamat</label>
							<div class="col-md-9">
								<input type="text" required="required" name="alamat" value="{{ $p->alamat }}" class="form-control">
							</div>
						</div>
					
						<!-- Email input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="email">Umur</label>
							<div class="col-md-9">
								<input type="number" required="required" name="umur" value="{{ $p->umur }}" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="jk">Jenis Kelamin</label>
							<div class="col-md-9">
								<input type="text" required="required" name="jk" value="{{ $p->jk }}" class="form-control">
							</div>
						</div>
						
						<!-- Message body -->
						<div class="form-group">
							<label class="col-md-3 control-label" for="email">Tanggal</label>
							<div class="col-md-9">
								<input type="date" required="required" name="tanggal" value="{{ $p->tanggal }}" class="form-control">
							</div>
						</div>
						
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" value="Simpan Data" >Simpan </button>
			 	</form>
			  @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>