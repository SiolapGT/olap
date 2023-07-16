<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Peserta</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h2>Tambah Data Peserta</h2>
        <form action="koneksi.php" method="POST">
          <div class="form-group">
            <label for="idPasien">ID Peserta</label>
            <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Peserta">
          </div>
          <div class="form-group">
            <label for="nmPasien">Nama Peserta</label>
            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Peserta">
          </div>
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="jk" value="perempuan">
              <label class="form-check-label">Perempuan</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="jk" value="laki-laki">
              <label class="form-check-label">Laki-laki</label>
            </div>
          </div>
          <label for="jk">Status</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="status" value="positif">
            <label class="form-check-label">positif</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="status" value="negatif">
            <label class="form-check-label">negatif</label>
          </div>
      </div>
      <div class="form-group mt-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"></textarea>
      </div>
      <div class="form-group mt-3">
        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
      </div>
      </form>
    </div>
  </div>
  </div>
</body>

</html>