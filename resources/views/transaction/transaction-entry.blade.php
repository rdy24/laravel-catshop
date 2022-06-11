<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transaction Entry</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <a href="/">Home</a>
      <a href="/categories">Categories</a>
      <a href="/transaction">Transaction</a>
    </div>

    <div class="right_content">
      <div class="navbar">
        <img src="{{ asset('assets/logo.png') }}" alt="" />
        <button class="btn">
          <a href="">Logout</a>
        </button>
      </div>
      <div class="content">
        <h3>Input Transaction</h3>
        <div class="form-login">
          <form action="{{ url('/transaction/store') }}" method="post">
            @csrf
            <label for="nama">Nama</label>
            <input class="input" type="text" name="nama" id="nama" placeholder="Nama" />

            <label for="jenis">Jenis</label>
            <input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis" />

            <label for="harga">Harga</label>
            <input class="input" type="text" name="harga" id="harga" placeholder="Harga" />

            <label for="tanggal">Tanggal</label>
            <input class="input" type="date" name="tanggal" id="tanggal" style="margin-bottom: 20px" />

            <button type="submit" class="btn btn-simpan" name="simpan">
              Simpan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>