<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-primary  bg-opacity-50" style="overflow-x: hidden">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('registrasi') }}" method="POST">
      @csrf
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h1 class="text-center mt-5">Registrasi Murid Baru</h1>
          <div class="row text-99 " style="margin-left: 250px;">
              <div class="col-md-6 card p-5 ms-5 mt-5 border border-3  shadow-lg" style="width: 700px; margin-left: 90px;">
              <div class="card-content">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="col-xs-2 ">
                          <label for="ex1"><b>NISN</b></label>
                          <input class="form-control" id="ex1" type="text" name="NISN" >
                        </div>
                      </div>
                      <div class="col">
                        <label for="ex1"><b>Jenis Kelamin</b></label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jenis_kelamin">
                          <option selected>Jenis Kelamin</option>
                          <option value="1">Laki-laki</option>
                          <option value="2">Perempuan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label lass="form-label"><b>Nama</b></label>
                        <input type="name" class="form-control" name="nama">
                      </div>
                      <label for="ex1"><b>Asal Sekolah</b></label>
                        <select class="form-select form-select-lg mb-3 ms-2 me-3" aria-label=".form-select-lg example" name="asal_sekolah">
                          <option selected>Asal Sekolah</option>
                          <option value="SMP 1 Ciawi">SMP 1 Ciawi</option>
                          <option value="SMP 1 Bogor">SMP 1 Bogor</option>
                        </select>
                        <div class="mb-3">
                          <label lass="form-label"><b>Email</b></label>
                          <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3 mt2">
                          <label lass="form-label"><b>Nomor Handphone</b></label>
                          <input type="number`" class="form-control" name="phone_number">
                        </div>
                        <div class="mb-3 mt2">
                          <label lass="form-label"><b>Nomor Handphone Ayah</b></label>
                          <input type="number" class="form-control"name="phone_number_ayah">
                        </div>
                        <div class="mb-3 mt2">
                          <label lass="form-label"><b>Nomor Handphone Ibu</b></label>
                          <input type="number" class="form-control" name="phone_number_ibu">
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>

                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>