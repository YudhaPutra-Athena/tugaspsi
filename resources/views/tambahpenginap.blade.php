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
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Tambahkan Data Penginap</h3>
               <form action="/penginap/store" method="post">
 
                 {{ csrf_field() }}
 
                <div class="form-label-group">
                  <input type="text" name="nama" required="required">
                  <label for="Nama">Nama</label>
    
                </div> 
 
                <div class="form-label-group">
                  <input type="number" name="umur" required="required">
                  <label for="umur">Umur</label>

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