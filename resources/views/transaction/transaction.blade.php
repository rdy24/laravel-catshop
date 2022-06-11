<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transaction</title>
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
        <h3>Trasaction</h3>
        <button type="button" class="btn btn-tambah">
          <a href="/transaction/tambah">Tambah Data</a>
        </button>
        <table class="table-data">
          <thead>
            <tr>
              <th style="width: 20%">Nama</th>
              <th>Jenis Kucing</th>
              <th style="width: 20%">Harga</th>
              <th style="width: 20%">Tanggal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactions as $transaction)
            <tr>
              <td>{{ $transaction->nama }}</td>
              <td>{{ $transaction->jenis }}</td>
              <td>Rp. {{ number_format($transaction->harga) }}</td>
              <td>{{ $transaction->tanggal }}</td>
              <td>
                <a href="/transaction/edit/{{ $transaction->id_transaction }}">Edit</a>
                <a href="/transaction/hapus/{{ $transaction->id_transaction }}">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>