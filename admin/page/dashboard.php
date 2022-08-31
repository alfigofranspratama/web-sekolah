<?php
$berita = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='berita'")->num_rows;
$prestasi = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='prestasi'")->num_rows;
$artikel = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='artikel'")->num_rows;
$pengumuman = mysqli_query($con, "SELECT * FROM tb_pengumuman")->num_rows;
?>
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                    <p class="m-b-0">SMK NEGERI 4 PAYAKUMBUH</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Material statustic card start -->
                    <div class="col-lg-3 col-md-12">
                        <div class="card mat-clr-stat-card text-white green ">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-3 text-center bg-c-green">
                                        <i class="fa fa-newspaper-o mat-icon f-24" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9 cst-cont">
                                        <h5><?= $berita; ?></h5>
                                        <p class="m-b-0">Berita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card mat-clr-stat-card text-white blue">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-3 text-center bg-c-blue">
                                        <i class="fas fa-trophy mat-icon f-24"></i>
                                    </div>
                                    <div class="col-9 cst-cont">
                                        <h5><?= $prestasi; ?></h5>
                                        <p class="m-b-0">Prestasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card mat-clr-stat-card text-white yellow">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-3 text-center bg-c-yellow">
                                        <i class="fa fa-exclamation mat-icon f-24"></i>
                                    </div>
                                    <div class="col-9 cst-cont">
                                        <h5><?= $pengumuman; ?></h5>
                                        <p class="m-b-0">Pengumuman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card mat-clr-stat-card text-white red">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-3 text-center bg-c-red">
                                        <i class="fas fa-book mat-icon f-24"></i>
                                    </div>
                                    <div class="col-9 cst-cont">
                                        <h5><?= $artikel ?></h5>
                                        <p class="m-b-0">Artikel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Material statustic card end -->
                    <!-- order-visitor start -->


                    <!-- order-visitor end -->

                    <!--  sale analytics start -->
                    <div class="col-xl-6 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Komentar Terbaru</h5>
                                <div class="card-header-right">
                                    <a href="index.php?halaman=komentar"><i class="fa fa fa-wrench open-card-option"></i></a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0 without-header">
                                        <tbody>
                                            <?php
                                            $dKomen = mysqli_query($con, "SELECT * FROM `tb_komentar` ORDER BY `tb_komentar`.`tgl_komen` DESC LIMIT 3");

                                            foreach ($dKomen as $data) :
                                            ?>

                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="../img/noimage.png" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6><?= $data['nama_users']; ?></h6>
                                                                <p class="text-muted m-b-0"><?= $data['komentar']; ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $data = mysqli_query($con, "SELECT views FROM tb_posts");

                    $visit = 0;
                    foreach ($data as $x) {
                        $visit += $x['views'];
                    }

                    $datakomen = mysqli_query($con, "SELECT * FROM tb_komentar")->num_rows;
                    ?>
                    <div class="col-xl-6 col-md-12">
                        <div class="row">
                            <!-- sale card start -->
                            <div class="col-md-12">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block">
                                        <h6 class="m-b-0">Total Pengunjung</h6>
                                        <h4 class="m-t-15 m-b-15"><i class="fas fa-users m-r-15 text-c-red"></i><?= $visit; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block">
                                        <h6 class="m-b-0">Total Komentar</h6>
                                        <h4 class="m-t-15 m-b-15"><i class="fas fa-comments m-r-15 text-c-red"></i><?= $datakomen; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- sale card end -->
                        </div>
                    </div>
                    <!--  sale analytics end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>