<?php

include 'koneksi.php';
include 'base_url.php';

function tanggal_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}

function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return "<b>" . $hari_ini . "</b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK NEGERI 4 PAYAKUMBUH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= $base_url; ?>img/logoweb.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- PopUp WA -->
    <script type="text/javascript" src="<?= $base_url; ?>popup/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?= $base_url; ?>popup/floating-wpp.min.js"></script>
    <link rel="stylesheet" href="<?= $base_url; ?>popup/floating-wpp.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= $base_url; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= $base_url; ?>css/style.css" rel="stylesheet">
</head>
<style>
    .hover:hover {
        color: #3d3d3d;
    }

    .atas {
        border-top: 5px solid #FFCC00;
        margin: 0px;
        padding: 0px;
    }

    .scontainer-fluid {
        background-color: rgb(247, 247, 237);
    }

    .share>* {
        display: inline;
        margin-bottom: 8px;
        margin-right: 5px;
    }

    .share>button {
        margin-top: -8px;
    }

    .bawah {
        border-bottom: 10px solid #FFCC00;
        margin: 0px;
        padding: 0px;
    }

    .bwh {
        border-bottom: 3px solid #3183d4;
    }

    button.admin {
        line-height: 5px;
        /* color: #065d98; */
        margin-top: 3px;
        margin-left: 3px;
        width: 20%;
        text-align: left;
    }

    .bawah-biru {
        border-bottom: 5px solid #FFCC00;
    }

    .dropdown-menu.rounded-0.m-0>a:hover {
        background-color: #065d98;
        color: #fff;
    }

    .bg-utama {
        background-color: #065d98;
    }

    .bg-kedua {
        background-color: #3183d4;
    }

    .bg-abu {
        background-color: #ddd;
    }

    .bg-putih {
        background-color: #fff;
    }

    .hitam {
        color: #000;
    }

    .textnyo>* {
        line-height: -1.5rem !important;
    }

    .img-161 {
        max-width: 100%;
        height: 161px;
        object-fit: cover;
    }

    .atas-kosong {
        margin-top: -18px;
        padding-top: 10px;
    }

    .putih {
        color: #fff !important;
    }
</style>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-utama px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-utama p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#"><?= hari_ini() . " " . tanggal_indo(date("Y-m-d")); ?></a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">LMS</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">OPAC</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">Dapodik</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">Kelulusan Siswa</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">Buku Tamu</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link putih small" href="#">Portal Teknologi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih small" href="#">E-Kinerja</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link putih" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-abu">
            <div class="col-lg-12 text-center text-lg-right">
                <a href="<?= $base_url; ?>"><img class="img-fluid" src="<?= $base_url; ?>img/header-smkn4pyk.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <?php
    include 'navbar.php';
    ?>

    <?php
    include 'page.php';
    ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-utama pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-5 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">CONTACT</h5>
                <p class="font-weight-medium putih"><i class="fa fa-map-marker-alt mr-2"></i><a class="putih" href="https://goo.gl/maps/Et4nciiqNBbeJD5s6">Jl. Koto Kociak, Kel.Padang Sikabu, Kec. Lamposi Tigo Nagori, Padang Sikabu, Kec. Lamposi Tigo Nagori, Kota Payakumbuh, Sumatera Barat 26219</a></p>
                <p class="font-weight-medium putih"><i class="fa fa-phone-alt mr-2"></i>+62812-9238-9150</p>
                <p class="font-weight-medium putih"><i class="fa fa-envelope mr-2"></i>alfigofranspratamaa@gmail.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular Posts</h5>
                <?php
                $pp = mysqli_query($con, "SELECT * FROM tb_posts ORDER BY views DESC LIMIT 3");

                foreach ($pp as $data) :
                ?>
                    <div class="mb-3">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                            <a class="text-body putih" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                        </div>
                        <a class="small text-body putih text-uppercase font-weight-medium" href=""><?= substr($data['judul'], 0, 50); ?>...</a>
                    </div>
                <?php
                endforeach
                ?>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="" class="btn btn-sm btn-secondary m-1">Berita</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Galeri</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Artikel</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Prestasi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5 bg-kedua">
        <p class="m-0 text-center putih">&copy; <a href="#" class="hitam hover">SMK NEGERI 4 PAYAKUMBUH.</a> All Rights Reserved.
    </p>
</div>
<!-- Footer End -->
<div id="wa"></div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url; ?>lib/easing/easing.min.js"></script>
    <script src="<?= $base_url; ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= $base_url; ?>js/main.js"></script>
    <script type="text/javascript">
        $('#wa').floatingWhatsApp({
            phone: '6281292389150',
            headerTitle: 'WhatsApp SMKN 4 PYK',
            popupMessage: 'Selamat Datang, ada yang bisa kami bantu?',
            showPopup: true
        });
    </script>
</body>

</html>