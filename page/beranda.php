<?php
// NEWS
$news = mysqli_query($con, "SELECT * FROM tb_posts LIMIT 3");
$newsChild = mysqli_query($con, "SELECT * FROM tb_posts ORDER BY id_posts DESC LIMIT 4");
// KABAR
$kabar = mysqli_query($con, "SELECT * FROM tb_posts WHERE tampilkan_home='1'");
// LATEST
$latest = mysqli_query($con, "SELECT * FROM tb_posts ORDER BY tanggal_post DESC LIMIT 4");
// MAIN
$prestasi = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='prestasi' LIMIT 4");
$berita = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='berita' AND tampilkan_home='1' LIMIT 2");
$artikel = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='artikel' AND tampilkan_home='1' LIMIT 4");
$galeri = mysqli_query($con, "SELECT thumbnail, tipe_postingan FROM tb_posts LIMIT 4");
$pengumuman = mysqli_query($con, "SELECT * FROM tb_pengumuman WHERE status='1'");
?>
<!-- Main News Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <?php
                while ($data = mysqli_fetch_array($news)) {
                ?>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                <a class="text-white" href=""><?= tanggal_indo($data['tanggal_post']); ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= $data['judul']; ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                <?php
                foreach ($newsChild as $data) :
                ?>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail'] ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                    <a class="text-white" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= $data['judul']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->

<!-- Pengumuman News Start -->
<div class="container-fluid bg-utama py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-utama">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Pengumuman</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px;">
                        <?php
                        foreach ($pengumuman as $data) {
                        ?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href=""><?= $data['pengumuman']; ?></a></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pengumuman News End -->

<!-- Kabar Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title bg-utama">
            <h4 class="m-0 text-uppercase putih font-weight-bold">Kabar smk negeri 4 payakumbuh</h4>
        </div>
        <div class="bg-white border p-3" style="margin-top: -15px;">
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php
                foreach ($kabar as $data) :
                ?>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail'] ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan'] ?></a>
                                <a class="text-white" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 20); ?>...</a>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Kabar Slider End -->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <!-- Start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Latest With Sidebar Start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title bg-utama" width="100%">
                                    <h4 class="m-0 putih text-uppercase font-weight-bold">Latest Posts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row bg-white mb-3 pt-3" style="margin-top: -15px;">
                                <?php
                                foreach ($latest as $data) {
                                ?>
                                    <div class="col-lg-6">
                                        <div class="position-relative mb-3">
                                            <img class="img-161 w-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                            <div class="bg-white border border-top-0 p-4">
                                                <div class="mb-2">
                                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                                    <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                                </div>
                                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 25); ?>...</a>
                                                <p class="m-0"><?= substr($data['isi_postingan'], 0, 45); ?>...</p>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Latest With Sidebar End -->

                        <!-- Prestasi With Sidebar Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title bg-utama">
                                    <h4 class="m-0 text-uppercase putih font-weight-bold">PRESTASI</h4>
                                    <a class="putih font-weight-medium text-decoration-none" href="index.php?page=allpost&type=prestasi">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row bg-white mb-3 pt-3" style="margin-top: -15px;">
                                <?php
                                foreach ($prestasi as $data) {
                                ?>
                                    <div class="col-lg-6">
                                        <div class="position-relative mb-3">
                                            <img class="img-161 w-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                            <div class="bg-white border border-top-0 p-4">
                                                <div class="mb-2">
                                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                                    <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                                </div>
                                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 25); ?>...</a>
                                                <p class="m-0"><?= substr($data['isi_postingan'], 0, 45); ?>...</p>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Prestasi With Sidebar End -->
                        <!-- Berita -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title bg-utama">
                                    <h4 class="m-0 text-uppercase putih font-weight-bold">BERITA</h4>
                                    <a class="putih font-weight-medium text-decoration-none" href="index.php?page=allpost&type=berita">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row bg-white mb-3 pt-3" style="margin-top: -15px;">
                                <?php
                                foreach ($berita as $data) {
                                ?>
                                    <div class="col-lg-6">
                                        <div class="position-relative mb-3">
                                            <img class="img-161 w-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                            <div class="bg-white border border-top-0 p-4">
                                                <div class="mb-2">
                                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                                    <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                                </div>
                                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 24); ?>...</a>
                                                <p class="m-0"><?= substr($data['isi_postingan'], 0, 45); ?>...</p>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- End Berita -->
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
                            <img class="img-kepsek" src="img/kepsek.jpg" style="object-fit: cover;" width="100%">
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
                                <img class="" height="110px" width="110px" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" alt="" style="object-fit: cover;">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                        <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 25); ?>...</a>
                                    <span style="font-size: 12px;"><i class="fas fa-eye"></i> <?= $data['views']; ?> Views</span>
                                </div>
                            </div>
                        <?php
                        endforeach
                        ?>
                    </div>
                </div>
                <!-- Social Follow Start -->
                <div class="mb-3 bg-white bwh">
                    <div class="section-title bg-utama mb-0">
                        <h4 class="m-0 text-uppercase putih font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">@SMKN_4_PYK</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">@SMKN_4_PYK</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">@SMKN_4PYK</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">@SMKN4PYK</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">SMKN4PYK</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">SMKNEGERI4PYK</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->
                <!-- Kategori Start -->
                <div class="mb-3 bg-white bwh">
                    <div class="section-title bg-utama mb-0">
                        <h4 class="m-0 text-uppercase putih font-weight-bold">Kategori</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Berita</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Galeri</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Artikel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Prestasi</a>
                        </div>
                    </div>
                </div>
                <!-- Kategori End -->
                <!-- Popular News End -->
                <!-- IT logo -->
                <div class="mb-3 bg-white bwh">
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <img width="100%" src="img/it.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- IT end -->
            </div>
        </div>
        <!-- Artikel With Sidebar Start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title bg-utama">
                            <h4 class="m-0 text-uppercase putih font-weight-bold">Artikel</h4>
                            <a class="putih font-weight-medium text-decoration-none" href="index.php?page=allpost&type=artikel">View All</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row bg-white mb-3 pt-3" style="margin-top: -15px;">
                        <?php
                        foreach ($artikel as $data) {
                        ?>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-161 w-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['tipe_postingan']; ?></a>
                                            <a class="text-body" href=""><small><?= tanggal_indo($data['tanggal_post']); ?></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>"><?= substr($data['judul'], 0, 24); ?>...</a>
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
        </div>
        <!-- Artikel With Sidebar End -->
        <!-- Galeri With Sidebar Start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bg-utama">
                    <h4 class="m-0 text-uppercase putih font-weight-bold">GALERI</h4>
                    <a class="putih font-weight-medium text-decoration-none" href="index.php?page=allgalery">View All</a>
                </div>

                <div class="container">
                    <div class="row bg-white mb-3 pt-3" style="margin-top: -15px;">
                        <?php
                        foreach ($galeri as $data) {
                        ?>
                            <div class="col-lg-3">
                                <div class="position-relative mb-3">
                                    <img class="img-161 w-100" src="admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Galeri  With Sidebar End -->
        </div>
    </div>
</div>