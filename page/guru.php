<?php
$anggota = mysqli_query($con, "SELECT * FROM tb_keanggotaan");
?>
<div class="container-fluid mt-5">
    <div class="container">
        <!-- Keanggotaan -->
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>beranda" style="color: #000;"> <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Profil</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Tenaga Pendidik</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">Keanggotaan</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, numquam distinctio. Ullam id veritatis voluptatem dolorum quibusdam nisi exercitationem illum quam quia voluptate nihil eius pariatur, fugiat quasi aut ducimus neque, quae culpa amet molestias qui unde libero? Ut, facere!</p>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih">
                    <div class="row">
                        <?php
                        $batas = 8;
                        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                        $halamanAwal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $prev = -1;
                        $next = +1;

                        $data = mysqli_query($con, "SELECT * FROM tb_keanggotaan");
                        $jml = mysqli_num_rows($data);
                        $totHal = ceil($jml / $batas);

                        $dataGuru = mysqli_query($con, "SELECT * FROM tb_keanggotaan ORDER BY id_anggota DESC LIMIT $halamanAwal, $batas");

                        $no = $halamanAwal + 1;

                        while ($x = mysqli_fetch_array($dataGuru)) {
                        ?>
                            <div class="col-3 mt-4 mb-1">
                                <div class="position-relative overflow-hidden" style="height: 300px;">
                                    <img class="img-fluid h-100" src="admin/image/keanggotaan/<?= $x['profil']; ?>" style="object-fit: cover;">
                                    <div class="overlay">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $x['jabatan']; ?></a>
                                        </div>
                                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $x['nama']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link hitam" <?php if ($halaman > 1) {
                                                            echo "href='?page=guru&halaman=$prev'";
                                                        } ?> tabindex="-1">Previous</a>
                        </li>
                        <?php
                        for ($p = 1; $p <= $totHal; $p++) {
                        ?>
                            <li class="page-item"><a class="page-link hitam" href="?page=guru&halaman=<?= $p; ?>"><?= $p; ?></a></li>
                        <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link hitam" <?php if ($halaman < $totHal) {
                                                            echo "href='?page=guru&halaman=$next'";
                                                        } ?>>Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>