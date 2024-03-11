<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">
        <img src="https://png.pngtree.com/png-vector/20220623/ourlarge/pngtree-online-profile-photo-male-circle-png-image_5320473.png" alt="" width="45" height="45" class="d-inline-block align-text-top">
      </a>
      <div class="brand">Cerita Foto</div>
      <ul class="navbar-nav ms-3 me-3 mb-lg-0 inihome">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-lg-0 inicreate">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="/create">Upload</a>
        </li>
      </ul>
      <ul class="navbar-nav me-3 ms-2 mb-lg-0 inicrt">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="/create"><i class="fa-solid fa-plus fa-lg" style="color: #000000;"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto ms-3 mx-auto mb-lg-0">
        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2 inisearch1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success inisearch" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ms-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profile">
            <img src="https://png.pngtree.com/png-vector/20220623/ourlarge/pngtree-online-profile-photo-male-circle-png-image_5320473.png" alt="user" width="45" height="45" class="d-inline-block align-text-top rounded-circle">
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <script src="js/onclick.js"></script>
  <script src="https://kit.fontawesome.com/a3864c1aa4.js" crossorigin="anonymous"></script>


 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cerita Foto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 16px;
      padding: 16px;
      justify-content: center;
    }

    .grid-container img {
      display: block;
      width: 100%;
      height: auto;
      border-radius: 8px 8px 0 0;
    }

    .grid-container p {
      padding: 12px;
      margin: 0;
      background-color: #fff;
      border-radius: 0 0 8px 8px;
    }

    .grid-item {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .grid-item img {
      display: block;
      width: 100%;
      height: auto;
      border-radius: 8px 8px 0 0;
    }

    .grid-item p {
      padding: 12px;
      margin: 0;
      background-color: #fff;
      border-radius: 0 0 8px 8px;
    }
  </style>
</head>
<body>
  <div class="grid-container">
    <div class="grid-item">
      <a href="/detail">
        <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1628091934/blog/evsrh06pdoms9sg7hkza.webp">
      </a>
    </div>
    
      <div class="grid-item">
        <a href="/detail">
          <img src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/Danau-Toba-edited.jpg">
       </a>
    </div>

      <div class="grid-container">
        <a href="/detail">
        <img src="https://cdn1.katadata.co.id/media/images/temp/2021/10/09/Pulau_Padar_di_Nusa_Tenggara_Timur-2021_10_09-07_36_59_7ce96f9409318de79d7af0829561c341.jpg">
        </a>
    </div>

      <div class="grid-item">
        <a href="/detail">
      <img src="https://cdn1.katadata.co.id/media/images/temp/2021/10/09/Air_terjun_Tumpak_Sewu_di_Jawa_Timur-2021_10_09-07_41_59_fb0609707efe3f37902cc8d3aca86c9a.jpg" class="card-img-top">
       </a>
    </div>

    <div class="grid-container">
        <a href="/detail">
      <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_680/v1628088623/blog/bmungfvbpgwmsmpczqou.jpg">
        </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://cdn1.katadata.co.id/media/images/temp/2021/10/09/Pantai_Kelingking_di_Nusa_Penida_Bali-2021_10_09-07_38_45_92236e23febd089264066f49fe348885.jpg">
      </a>
  </div>

  <div class="grid-container">
    <a href="/detail">
    <img src="https://cdn1.katadata.co.id/media/images/temp/2021/10/09/Pemandangan_alam_di_kawasan_Gunung_Rinjani_Lombok_Nusa_Tenggara_Barat-2021_10_09-07_42_38_43d9f58af9980a4f99d6dc9228437b9b.jpg">
      </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1628088922/blog/xqmmf77kfj1mm3smsgxx.webp">
      </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://www.gardaoto.com/wp-content/uploads/2022/09/10-Pemandangan-Alam-Paling-Indah-yang-Wajib-Kalian-Datangi.jpg">
      </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://asset.kompas.com/data/photo/buku/637cf1dc7a66d.jpg">
      </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://asset.kompas.com/data/photo/buku/637cf29bac8d1.jpg">
      </a>
  </div>

  <div class="grid-item">
    <a href="/detail">
    <img src="https://blog.tiket.com/wp-content/uploads/Image-Blog_Karimunjawa-1.jpg">
      </a>
  </div>
</body>
</html>