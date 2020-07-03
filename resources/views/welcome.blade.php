<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>StayManaged - Jogja Migunani</title>
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

</head>

<body>
  <div id="wrapper">
  @include('include.header')

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>Homestay Jogja Migunani</h2>
        <h3> Manajemen homestay lah</h3>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/penginap') }} " class="btn btn-primary">Check DashBoard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">

      </div>
    </section> -->
    <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>Tentang Alam dan Budaya, Yogyakarta</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-map-marker"></i>
            <h3>STRATEGIS</h3>
           <p class="text-justify"><strong>Yogyakarta</strong> adalah sebuah kabupaten di Daerah Istimewa Yogyakarta, Indonesia. Sleman dikenal sebagai asal buah salak pondoh. Bagian utara kabupaten ini merupakan pegunungan, dengan puncaknya Gunung Merapi di perbatasan dengan Jawa Tengah, salah satu gunung berapi aktif yang paling berbahaya di Pulau Jawa., sedangkan di bagian selatan merupakan dataran rendah yang subur. Untuk sampai di Sleman membutuhkan waktu sekitar 45 menit dari pusat kota, dengan akses jalan yang baik. Sleman juga merupakan perbatasan dengan Jawa Tengah, jadi sangat strategis untuk didatangi.</p> 
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-tree-conifer"></i>
            <h3>SUASANA</h3>
            <p class="text-justify"><strong>Yogyakarta </strong> sudah menjadi satu kesatuan yang agung. Dikenal sebagai kota yang "ngangeni" alias selalu membuat hati rindu untuk mengunjunginya lagi. Suasana Jogja yang khas, ramah dan penuh dengan kesederhanaan memang membuat siapapun betah tinggal di kota yang nyaman ini. Sleman, kabupaten kecil penuh pesona. Ramah-tamah penduduk, kearifan lokal adat istiadat, hingga suburnya tanah Merapi sudah tidak perlu diragukan lagi. Nikmati suasana Sleman dengan orang-orang terkasih, dan temukan keindahan Sleman oleh diri mu sendiri. Mari jelajahi, dan abadikan momen mu.  </p> 
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-camera"></i>
            <h3>EKSOTIS</h3>
            <p class="text-justify"><strong>Yogyakarta </strong> Tidak perlu diragukan lagi keindahannya. Dari wisata alam, kuliner, hingga sejarah memiliki ciri khas masing-masing. Untuk penikmat alam, bisa datang ke Kaliurang atau Cangkringan dengan eksotisnya merapi dan tanah yang subur. Untuk penjelajah sejarah, bisa datang ke Prambanan atau Kalasan untuk menjelajahi masa lalu. Wisata malam dengan mencicipi kuliner mewah hingga makanan lokal angkringan juga perlu untuk dicoba. Alam Merapi dan tanahnya yang Subur, hingga panorama candi penuh sejarah mampu mengukir kenangan dalam berwisata di Sleman. Lihat pesona Sleman lebih dekat, dan nikmati cantiknya. </p> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

    <!-- container news -->
  <div id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/home2c.jpeg">
          <div class="caption">
          <h3>Homestay Jogja Migunani</h3>
          <p class="text-justify">Untuk teman-teman yang ingin menjelajahi Tanah Merapi dan hawanya yang sejuk menenangkan, Lava Tour Merapi bisa menjadi solusi utamanya. Lihat pesona Merapi lebih dekat</p>
           
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/home1.jpeg">
          <div class="caption">
          <h3>Homestay Jogja Migunani </h3>
         <p class="text-justify">Ullen Sentalu, Museum cantik penuh sejarah. Banyak orang yang belum tahu museum ini, padahal museum ini memberikan sejarah dan pesona kearifan lokalnya dalam satu paket</p>  
           
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/home4c.jpeg">
          <div class="caption">
          <h3>Homestay Jogja Migunani </h3>
       <p class="text-justify">Bermalam di Prambanan dengan menikmati Sendratari Ramayana sudah tidak perlu diragukan lagi. Pertunjukkan yang memesona, serta suasana malam yang indah akan memberikan pengalaman</p> 
          
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/home3c.jpeg">
          <div class="caption">
          <h3>Homestay Jogja Migunani </h3>
         <p class="text-justify">Kopi Klothok, rumah jawa yang disulap menjadi restoran tradisional. Dari suasana, makanan, hingga lokasinya pun masih terkesan tradisional. Nikmati suasana desa di Klothok</p> 
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container news -->

   
   @include('include.footer')