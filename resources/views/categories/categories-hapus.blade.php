<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories Hapus</title>
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
        <h3>Hapus Categories</h3>
        <div class="form-login">
          <h4>Ingin Menghapus Data ?</h4>
          <form action="{{ url('/categories/destroy/' . $category->id_categories ) }}" method="post">
            @csrf
            @method('DELETE')
          </form>
          <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/categories/destroy/' . $category->id_categories ) }}>
              Yes
            </a>
          </button>
          <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/categories">
              No
            </a>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>