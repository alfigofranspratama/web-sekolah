<?php
session_start();
include '../settings/session.php';
include '../settings/koneksi.php';

$id = $_GET['id'];
$queryUsers = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
$dataUsers = mysqli_fetch_array($queryUsers);
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLengths = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLengths - 1)];
    }
    return $randomString;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $namaToko; ?> - Tambah Barang</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .file-upload-wrapper {
            font-size: .8rem;
            box-sizing: border-box;
            border-radius: 50%;
        }

        .file-upload-wrapper label {
            opacity: 0.7;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php
        if ($_SESSION['level'] == "pimpinan") {
            include '../pimpinan/sidebar.php';
        } else {
            include '../admin/sidebar.php';
        }
        ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <?php include 'user-information.php'; ?>
                    </ul>
                </nav>
                <div class="container-fluid justify-content-center align-items-center d-flex flex-column">
                    <div class="card o-hidden border-0 shadow-lg my-5" style="width: 600px;">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Tambahkan Barang Baru</h1>
                                        </div>
                                        <form method="post" class="user" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-4">
                                                    <input type="text" required name="kode_barang" class="form-control form-control-user" id="exampleFirstName" placeholder="Kode Barang">
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-4">
                                                    <input type="text" required name="nama_barang" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Barang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-4">
                                                    <div class="file-upload-wrapper">
                                                        <label for="formFileMultiple" class="form-label ml-3">Gambar Barang</label>
                                                        <input type="file" required name="foto" id="input-file-max-fs" class="form-control pb-4 pt-1" style="height: 2.5rem 2rem; text-align:center;" data-max-file-size="2M">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-4">
                                                    <input type="number" required name="jumlah_stok" class="form-control form-control-user" id="exampleFirstName" placeholder="Jumlah Stok">
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-4">
                                                    <input type="text" required name="satuan_barang" class="form-control form-control-user" id="exampleFirstName" placeholder="Satuan Barang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-4">
                                                    <input type="number" required name="harga_satuan" class="form-control form-control-user" id="exampleFirstName" placeholder="Harga Satuan">
                                                </div>
                                            </div>
                                            <hr>
                                            <input type="submit" name="tambahkan" value="Tambahkan" class="btn btn-facebook btn-user btn-block">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST['tambahkan'])) {
                            $kode_barang = htmlspecialchars($_POST['kode_barang']);
                            $nama_barang = htmlspecialchars($_POST['nama_barang']);
                            $jumlah_stok = htmlspecialchars($_POST['jumlah_stok']);
                            $satuan_barang = htmlspecialchars($_POST['satuan_barang']);
                            $harga_satuan = htmlspecialchars($_POST['harga_satuan']);

                            $ekstensi_diperbolehkan    = array('png', 'jpg');
                            $nama = $_FILES['foto']['name'];
                            $x = explode('.', $nama);
                            $ekstensi = strtolower(end($x));
                            $ukuran    = $_FILES['foto']['size'];
                            $file_tmp = $_FILES['foto']['tmp_name'];

                            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                                if ($ukuran < 1044070) {
                                    move_uploaded_file($file_tmp, '../img/barang/' . $nama);
                                    $query = mysqli_query($con, "INSERT INTO barang (kode_barang,nama_barang,gambar_barang,jumlah_stok,satuan,harga_jual_satuan) VALUES ('$kode_barang','$nama_barang','$nama','$jumlah_stok','$satuan_barang','$harga_satuan')");
                                    if ($query) {
                                        echo '<script>alert("Barang Berhasil di Tambahkan")</script>';
                        ?>
                                        <meta http-equiv="refresh" content="0; url=barang.php?id=<?= $id; ?>">
                        <?php
                                    } else {
                                        echo '<script>alert("Gagal Menambahkan barang")</script>';
                                    }
                                } else {
                                    echo '<script>alert("File Gambar Terlalu besar")</script>';
                                }
                            } else {
                                echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
                            }
                        }
                        ?>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <?php include 'logout.php'; ?>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../js/sb-admin-2.min.js"></script>
        <script src="../bootstrap5.2/js/bootstrap.bundle.min.js"></script>
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>