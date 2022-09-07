<?php
$id = $_GET['id-post'];
$post = mysqli_query($con, "SELECT * FROM tb_posts WHERE id_posts='$id'")->fetch_array();
$tipe = $post['tipe_postingan'];
$relate = mysqli_query($con, "SELECT * FROM tb_posts WHERE tipe_postingan='$tipe' LIMIT 3");
?>
<style>
    .garis_vertikal {
        border-right: 1px #ddd solid;
    }
</style>
<!-- Prestasi With Sidebar Start -->
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-12 bg-putih">
                    <div class="row">
                        <div class="container bwh">
                            <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
                                <li class="breadcrumb-item">
                                    <a href="<?= $base_url; ?>beranda" style="color: #000;"> <i class="fa fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!" style="color: #000;"><?= $post['tipe_postingan']; ?></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!" style="color: #000;"><?= $post['judul']; ?></a>
                                </li>
                            </ul>
                            <hr style="margin-top: -20px;">
                            <div class="container">
                                <div class="container row">
                                    <div class="col-12">
                                        <div class="judul">
                                            <h4 class="m-0 text-uppercase font-weight-bold"><?= $post['judul']; ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <h6><i class="far fa-clock"></i> <?= tanggal_indo($post['tanggal_post']); ?>&nbsp; <i class="far fa-folder"></i> <?= $post['tipe_postingan']; ?>&nbsp; <i class="fas fa-eye"></i> <?= $post['views']; ?> Views</h6>
                                    </div>
                                </div>
                                <hr style="margin-top: -5px;">
                                <div class="row">
                                    <div class="col-8 garis_vertikal">
                                        <p class="m-0"><?= $post['isi_postingan']; ?></p>
                                        <p><img src="<?= $base_url; ?>admin/image/<?= $post['tipe_postingan']; ?>/<?= $post['thumbnail']; ?>" width="100%" alt=""></p>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="m-0 text-uppercase font-weight-bold">RELATE POSTS</h4>
                                        <?php
                                        foreach ($relate as $data) {
                                        ?>
                                            <div class="position-relative mb-2">
                                                <img width="100%" src="<?= $base_url; ?>admin/image/<?= $data['tipe_postingan']; ?>/<?= $data['thumbnail']; ?>" style="object-fit: cover;">
                                                <div class="bg-white border border-top-0 p-1">
                                                    <p><a href="<?= $base_url; ?>aksi.php?aksi=view&id-posts=<?= $data['id_posts']; ?>" style="color: #000; font-size: 12px;"><?= $data['judul']; ?></a></p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scontainer-fluid" style="width: 100%;">
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-12">
                                    <!-- <div class="p-3 bwh" style="color: #000; background-color:#ddd;"> -->
                                    <div class="share bwh">
                                        <h4 class="bg-utama" style="color: #fff; padding-left: 10px; padding-right: 10px; font-weight:bold;letter-spacing:-2px; padding-bottom:8px; padding-top:15px;">SHARE</h4>
                                        <button style="font-size: 12px;" class="btn btn-info"><i class="fab fa-twitter-square"></i> Twitter</button>
                                        <button style="font-size: 12px;" class="btn btn-danger"><i class="fab fa-pinterest-square"></i> Pinterest</button>
                                        <button class="btn bg-utama" style="font-size: 12px; color: #fff;"><i class="fab fa-facebook-square"></i> Facebook</button>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5 mb-3">
                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-12 ">
                                        <h6 class="m-0 text-uppercase font-weight-bold">ABOUT ADMIN</h6>
                                        <div class="bg-white border p-1" style="border-bottom: 3px solid #3183d4!important;">
                                            <img src="<?= $base_url; ?>img/admin.jpeg" style="float: left;" alt="" width="20%">
                                            <button class="admin btn btn-dark"><i class="fab fa-twitter-square"></i> Twitter</button>
                                            <button class="admin btn btn-dark"><i class="fab fa-pinterest-square"></i> Pinterest</button><br>
                                            <button class="admin btn btn-dark"><i class="fab fa-facebook-square"></i> Facebook</button>
                                            <button class="admin btn btn-dark"><i class="fab fa-github-square"></i> GitHub</button><br>
                                            <button class="admin btn btn-dark"><i class="fab fa-instagram-square"></i> Instagram</button><br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $komen = mysqli_query($con, "SELECT * FROM tb_komentar WHERE id_posts='$id'");
                        ?>
                        <div class="container mt-5 mb-3">
                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-12 ">
                                        <h6 class="m-0 text-uppercase font-weight-bold">Tambahkan Komentar</h6>
                                        <div class="komen bg-white border p-1" style="border-bottom: 3px solid #3183d4!important;">
                                            <form action="<?= $base_url; ?>aksi.php?aksi=komen" method="post">
                                                <input type="hidden" name="id" value="<?= $id; ?>">
                                                <div class="nama mt-3">
                                                    <img src="<?= $base_url; ?>img/noimage.png" height="100" class="mr-3" alt="" style="float: left;">
                                                    <label for="nama" style="font-size: 12px;" class="form-label">* Masukkan Nama</label>
                                                    <input type="text" name="nama" class="form-control" style="width: 400px;" required>
                                                    <label style="font-size: 12px;" for="komentar" class="form-label mt-2">* Komentar</label>
                                                    <textarea name="komentar" id="" cols="30" class="form-control" rows="10" style="height: 100px;" placeholder="Masukkan Komentar"></textarea>
                                                    <button type="submit" class="mt-3 btn bg-utama" style="color: #fff;">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5 mb-3">
                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-12 ">
                                        <h6 class="m-0 text-uppercase font-weight-bold"><?= $komen->num_rows; ?> Komentar</h6>
                                        <div class="komen bg-white border p-1" style="border-bottom: 3px solid #3183d4!important;">
                                            <?php
                                            if ($komen->num_rows > 0) {
                                                foreach ($komen as $data) :
                                            ?>
                                                    <div class="mb-4">
                                                        <img src="<?= $base_url; ?>img/noimage.png" height="100" class="mr-3" alt="" style="float: left;">
                                                        <div class="card">
                                                            <h5 class="card-header"><?= $data['nama_users']; ?></h5>
                                                            <div class="card-body">
                                                                <p class="card-text"><?= $data['komentar']; ?></p>
                                                            </div>
                                                            <a href="#" class="btn"></a>
                                                        </div>
                                                    </div>
                                            <?php
                                                endforeach;
                                            } else {
                                                echo "Belum ada komentar.";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <!-- Kategori Start -->
                <div class="mb-3">
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
            </div>
        </div>
    </div>
</div>