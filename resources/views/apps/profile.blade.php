<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <img src="{{ Vite::asset('resources/images/profile/deru.jpeg') }}" class="figure-profile img-fluid" alt="figure profile">
          <div class="card-body">
            <h5 class="card-title">M.DERU ANGGORO D.A.</h5>
            <p class="card-text">MAHASISWA SISTEM INFORMASI.</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Usia: 20 tahun</li>
              <li class="list-group-item">Hobi: Gamers</li>
              <li class="list-group-item">Alamat: Surabaya, Indonesia</li>
            </ul>
            <a href="/" class="btn btn-primary mt-3">Kembali ke Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>