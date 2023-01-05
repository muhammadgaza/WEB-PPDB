<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="">
    <div class="bg-no-repeat" style="background-image: url('img/bg1.jpeg');">
    <nav class="navbar navbar-expand-lg bg-body rounded-5 shadow-lg ms-5 me-5 mt-5 sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>PPDB SMK Wikrama</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5 me-5" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      {{-- CONTENT --}}

      <h1 class="ms-5" style="margin-top: 220px;">PPDB TP 2023-2024
        <br>
        SMK Wikrama Bogor
      </h1>
      <h5 class="ms-5">Ayo!segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFATARN PPDB</b> dbawah ini
        <br>
        <b>Ilmu yang Amaliah, Amal yang ilmiah, Akhlakul karimah.</b>
      </h5>

    <a class="btn btn-warning btn-lg btn-demo ms-5 mt-5" href="{{ route('registrasi') }}"><b>PENDAFATARN PPDB</b></a>
    
      <div class="bg-primary p-2 text-dark ms-5 me-5 rounded " style="margin-top: 190px;">
        <div class="container text-center">
            <div class="row mt-5 mb-5">
              <div class="col">
                <h1>MOTTO</h1>
                <h4>Ilmu yang Amaliah, Amal yang ilmiah, Akhlakul karimah.</h4>
              </div>
              <div class="col">
                <h1>AFRIMASI</h1>
                <h4>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</h4>
              </div>
              <div class="col">
                <h1>ATITUDE</h1>
                <h4>Aku ada lingkunganku
                    bahagia</h4>
              </div>
            </div>
          </div>
      </div>
    </div>

    <h1 class="mt-5 ms-5">jurusan</h1>


      

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>