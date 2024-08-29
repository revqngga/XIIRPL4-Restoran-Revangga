<?php date_default_timezone_set('asia/jakarta'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- gmbar banner -->
        <div class="row">
            <img src="img/web.jpg" class="d-block w-100" alt="...">
        </div>

        <!-- ril navbarr -->
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-secondary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/mcd-logo.png" alt="Logo" width="35" height="29" class="d-inline-block align-text-top">
                        McDonald</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promo</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu Reguler</a></li>
                                    <li><a class="dropdown-item" href="#">Menu Promo</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Menu Lainnya</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- text -->
        <div class="row">
            <div class="col">
                <h2 class="m-5 text-center">Silahkan Pilih Menu Paket Dibawah Ini</h2>
            </div>
        </div>
        <?php
        $menuPaket = [
            [
                'kode'          => 'P1',
                'nama_paket'    => 'Paket Meal Ayam McD',
                'makanan'       => 'Ayam Goreng',
                'makananpk'     => 'Nasi Hangat',
                'minuman'       => 'Susu UHT',
                'harga_paket'   => 'Rp. 65.000',
                'harga'         => 40000,
                'gambar'        => '1.png',
            ],
            [
                'kode'          => 'P2',
                'nama_paket'    => 'PaNas 2 With Rice',
                'makanan'       => '2pcs Ayam Goreng',
                'makananpk'     => 'Nasi Hangat',
                'minuman'       => 'Fruit Tea Lemon',
                'harga_paket'   => 'Rp. 60.000',
                'harga'         => 60000,
                'gambar'        => '2.png',
            ],
            [
                'kode'          => 'P3',
                'nama_paket'    => 'Paket Keluarga & Mainan',
                'makanan'       => '3pcs Ayam Crispy',
                'makananpk'     => '2 Medium Rice',
                'minuman'       => '3 Fruit Tea',
                'harga_paket'   => 'Rp. 120.000',
                'harga'         => 90000,
                'gambar'        => '3.png',
            ],
            [
                'kode'          => 'P4',
                'nama_paket'    => 'Paket Beef Burger Deluxe',
                'makanan'       => 'Kentang Goreng',
                'makananpk'     => 'Burger Deluxe',
                'minuman'       => 'Soft Drink',
                'harga_paket'   => 'Rp. 55.000',
                'harga'         => 55000,
                'gambar'        => '4.png',
            ],
        ];
        ?>
        <div class="row justify-content-center">
            <?php foreach ($menuPaket as $data) { ?>
                <div class="col justify-content-center text-center">
                    <div class="card">
                        <img src="img/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama_paket'] ?></h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['kode'] ?>">
                                Lihat Deskripsi Paket
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['nama_paket'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="text-align: left;">
                                            <?php
                                            echo '<b>Deskripsi</b><br>';
                                            echo $data['makanan'] . '<br>';
                                            echo $data['makananpk'] . '<br>';
                                            echo $data['minuman'] . '<br><br>';
                                            echo "<b>Harga : " . number_format($data['harga']) . '<br></b>';
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- form input -->
        <div class="d-grid gap-2 mt-5 mb-5">
            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModa5" data-bs-whatever="@mdo">Order Sekarang</button>
        </div>
        <!-- modal -->
        <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabe5" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Sekarang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form inputan nya -->
                        <form action="" method="post">
                            <!-- nama -->
                            <div class="mb-3">
                                <label for="nama" class="col-form-label">Nama :</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda" required="required">
                            </div>
                            <!-- menu -->
                            <div class="mb-3">
                                <label for="paket" class="col-form-label">Menu Paket :</label>
                                <select class="form-select bg-body-secondary" name="paket" id="paket" required="required">
                                    <?php foreach ($menuPaket as $data) { ?>
                                        <option value="<?php echo $data['kode'] ?>">
                                            <?php echo $data['nama_paket'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- Jumlah orderan -->
                            <div class="mb-3">
                                <label for="jumlah_pesanan" class="col-form-label">Jumlah Pesanan :</label>
                                <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="Masukan Jumlah Pesanan" required="required">
                            </div>
                            <!-- button close dan submit -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="tombol" class="btn btn-danger">Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- carousell imaege -->
        <div class="row ">
            <div id="carouselExampleAutoplayingFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mcd1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mcd2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplayingFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplayingFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- proses hasil form -->
        <?php
        if (isset($_POST['tombol'])) {
            $nama = $_POST['nama'];
            $paket_kode = $_POST['paket'];
            $jumlah_pesanan = $_POST['jumlah_pesanan'];


            $selectedPaket = null;
            foreach ($menuPaket as $data) {
                if ($data['kode'] == $paket_kode) {
                    $selectedPaket = $data;
                    break;
                }
            }

            if ($selectedPaket) {
                $total = $jumlah_pesanan * $selectedPaket['harga'];
        ?>
                <div class="row justify-content-center">
                        <div class="col">
                            <div class="card m-5">
                                <div class="card-body justify-content-center">
                                    <div class="row">
                                        <div class="col-xl-5 col-md-12 col-sm-12">
                                <img src="img/<?php echo $selectedPaket['gambar'] ?>" style="width: 470px;" alt="">
                                        </div>
                                        <div class="col-xl-7 col-md-12 col-sm-12">
                                        
                                        
                                        <table class="table border=0">
                                            <tr>
                                                <td><b>Atas Nama</b></td>
                                                <td> : </td>
                                                <td><b><?=  htmlspecialchars($nama) ?></b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Waktu Transaksi</b></td>
                                                <td> : </td>
                                                <td><b><?= date("d M Y H:i:s") ?></b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Menu Paket Yang Dipesan</b></td>
                                                <td> : </td>
                                                <td><b><?= htmlspecialchars($selectedPaket['nama_paket']) ?></b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Jumlah Pesanan</b></td>
                                                <td> : </td>
                                                <td><b><?= htmlspecialchars($jumlah_pesanan) ?></b></td>
                                            </tr>
                                            
                                        </table>
                                    <?php
                                    echo '<b>Detail Pesanan :</b><br>';
                                    echo htmlspecialchars($selectedPaket['makanan']) . '<br>';
                                    echo htmlspecialchars($selectedPaket['makananpk']) . '<br>';
                                    echo htmlspecialchars($selectedPaket['minuman']) . '<br><br>';
                                    echo 'Harga : ' . number_format($selectedPaket['harga']) . '<br>';
                                    echo '<b>Total Harga : ' . number_format($total) . '</b><br>';
                                    ?>
                                <?php
                                    }
                                    }
                                ?>      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>