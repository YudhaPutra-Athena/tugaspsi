<html>
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
 