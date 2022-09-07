<?php
$tipe = $_GET['type'];
$prestasi = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='$tipe'");
?>

<!-- Prestasi With Sidebar Start -->
<div class="container-fluid mt-5">
    <div class="container">
        <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
            <li class="breadcrumb-item">
                <a href="<?= $base_url; ?>beranda" style="color: #000;"> <i class="fa fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#!" style="color: #000;">All Posts</a>
            </li>
            <li class="breadcrumb-item"><a href="#!" style="color: #000;"><?= $tipe; ?></a>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title bg-utama">
                            <h4 class="m-0 text-uppercase putih font-weight-bold"><?= $tipe; ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-putih atas-kosong">
                    <div class="row">
                        <?php
                        foreach ($prestasi as $data) {
                        ?>
                            <div class="col-lg-4">
                                <div class="position-relative mb-3">
                                    <img class="img-161 w-100" src="<?= $base_url; ?>admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                            <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?= $base_url; ?>aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 25); ?>...</a>
                                        <p class="m-0"><?= substr($data['isi_postingan'], 0, 45); ?>...</p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sambutan Start -->
                <div class="mb-3 bg-white bwh">
                    <div class="section-title mb-0 bg-utama">
                        <h4 class="m-0 putih text-uppercase font-weight-bold">Sambutan Kepsek</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <img class="img-kepsek" src="<?= $base_url; ?>img/kepsek.jpg" style="object-fit: cover;" width="100%">
                        </div>
                        <div class="mt-3">
                            <h5>
                                <a href="" class="d-block text-secondary text-uppercase font-weight-bold">Sambutan Kepala Sekolah</a>
                            </h5>
                            <h6>
                                <a href="" class="d-block text-secondary text-uppercase font-weight-bold">SMK NEGERI 4 PAYAKUMBUH</a>
                            </h6>
                            <h6>
                                <a href="" class="d-block text-secondary text-uppercase font-weight-bold">Drs. AIZUR HEDI, MM</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Sambutan End -->
                <!-- Popular News Start -->
                <?php
                $popular = mysqli_query($con, "SELECT * FROM tb_posts ORDER BY views DESC LIMIT 3")
                ?>
                <div class="mb-3 bg-white bwh">
                    <div class="section-title bg-utama mb-0">
                        <h4 class="m-0 text-uppercase putih font-weight-bold">Popular Posts</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php
                        foreach ($popular as $data) :
                        ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="" height="110px" width="110px" src="<?= $base_url; ?>admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" alt="" style="object-fit: cover;">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                        <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?= $base_url; ?>aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 25); ?>...</a>
                                    <span style="font-size: 12px;"><i class="fas fa-eye"></i> <?= $data['views']; ?> Views</span>
                                </div>
                            </div>
                        <?php
                        endforeach
                        ?>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
</div>