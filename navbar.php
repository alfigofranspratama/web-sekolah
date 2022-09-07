<?php
$url = isset($_GET['page']) ? $_GET['page'] : 'beranda';

if ($url == 'beranda' || $url == 'post' || $url == 'allpost') {
?>
    <div class="container-fluid p-0">
        <nav class="navbar bawah navbar-expand-lg bg-utama navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="<?= $base_url; ?>beranda" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">BLUETECH<span class="text-white font-weight-normal">IT SCHOOL</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?= $base_url; ?>beranda" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= $base_url; ?>visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="<?= $base_url; ?>struktursekolah" class="dropdown-item">Struktur Sekolah</a>
                            <a href="<?= $base_url; ?>saranaprasarana" class="dropdown-item">Sarana Prasarana</a>
                            <a href="<?= $base_url; ?>kepalasekolah" class="dropdown-item">Kepala Sekolah</a>
                            <a href="<?= $base_url; ?>komite" class="dropdown-item">Komite Sekolah</a>
                            <a href="<?= $base_url; ?>kemitraan" class="dropdown-item">Kemitraan</a>
                            <a href="<?= $base_url; ?>pbm" class="dropdown-item">Proses Belajar Mengajar</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <?php
                            $jurusan = mysqli_query($con, "SELECT * FROM tb_jurusan");

                            while ($data = mysqli_fetch_array($jurusan)) {
                            ?>
                                <a href="<?= $base_url; ?>jurusan/<?= $data['id']; ?>" class="dropdown-item"><?= $data['jurusan']; ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manajemen</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="https://kurikulum.gtk.kemdikbud.go.id/" class="dropdown-item">Kurikulum</a>
                            <a href="<?= $base_url; ?>guru" class="dropdown-item">Tenaga Pendidik</a>
                        </div>
                    </div>
                    <a href="index.php?page=" class="nav-item nav-link">PPID</a>
                    <a href="index.php?page=" class="nav-item nav-link">PPDB 2022</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Cari Disini...">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php
} elseif ($url == 'visimisi' || $url == 'struktursekolah' || $url == 'saranaprasarana' || $url == 'kepalasekolah' || $url == 'komite' || $url == 'kemitraan' || $url == 'pbm') {
?>
    <div class="container-fluid p-0">
        <nav class="navbar bawah navbar-expand-lg bg-utama navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="<?= $base_url; ?>beranda" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">BLUETECH<span class="text-white font-weight-normal">IT SCHOOL</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?= $base_url; ?>beranda" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= $base_url; ?>visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="<?= $base_url; ?>struktursekolah" class="dropdown-item">Struktur Sekolah</a>
                            <a href="<?= $base_url; ?>saranaprasarana" class="dropdown-item">Sarana Prasarana</a>
                            <a href="<?= $base_url; ?>kepalasekolah" class="dropdown-item">Kepala Sekolah</a>
                            <a href="<?= $base_url; ?>komite" class="dropdown-item">Komite Sekolah</a>
                            <a href="<?= $base_url; ?>kemitraan" class="dropdown-item">Kemitraan</a>
                            <a href="<?= $base_url; ?>pbm" class="dropdown-item">Proses Belajar Mengajar</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <?php
                            $jurusan = mysqli_query($con, "SELECT * FROM tb_jurusan");

                            while ($data = mysqli_fetch_array($jurusan)) {
                            ?>
                                <a href="<?= $base_url; ?>jurusan/<?= $data['id']; ?>" class="dropdown-item"><?= $data['jurusan']; ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manajemen</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="https://kurikulum.gtk.kemdikbud.go.id/" class="dropdown-item">Kurikulum</a>
                            <a href="<?= $base_url; ?>guru" class="dropdown-item">Tenaga Pendidik</a>
                        </div>
                    </div>
                    <a href="index.php?page=" class="nav-item nav-link">PPID</a>
                    <a href="index.php?page=" class="nav-item nav-link">PPDB 2022</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Cari Disini...">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php
} elseif ($url == 'jurusan') {
?>
    <div class="container-fluid p-0">
        <nav class="navbar bawah navbar-expand-lg bg-utama navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="<?= $base_url; ?>beranda" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">BLUETECH<span class="text-white font-weight-normal">IT SCHOOL</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?= $base_url; ?>beranda" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= $base_url; ?>visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="<?= $base_url; ?>struktursekolah" class="dropdown-item">Struktur Sekolah</a>
                            <a href="<?= $base_url; ?>saranaprasarana" class="dropdown-item">Sarana Prasarana</a>
                            <a href="<?= $base_url; ?>kepalasekolah" class="dropdown-item">Kepala Sekolah</a>
                            <a href="<?= $base_url; ?>komite" class="dropdown-item">Komite Sekolah</a>
                            <a href="<?= $base_url; ?>kemitraan" class="dropdown-item">Kemitraan</a>
                            <a href="<?= $base_url; ?>pbm" class="dropdown-item">Proses Belajar Mengajar</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Jurusan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <?php
                            $jurusan = mysqli_query($con, "SELECT * FROM tb_jurusan");

                            while ($data = mysqli_fetch_array($jurusan)) {
                            ?>
                                <a href="<?= $base_url; ?>jurusan/<?= $data['id']; ?>" class="dropdown-item"><?= $data['jurusan']; ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manajemen</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="https://kurikulum.gtk.kemdikbud.go.id/" class="dropdown-item">Kurikulum</a>
                            <a href="<?= $base_url; ?>guru" class="dropdown-item">Tenaga Pendidik</a>
                        </div>
                    </div>
                    <a href="index.php?page=" class="nav-item nav-link">PPID</a>
                    <a href="index.php?page=" class="nav-item nav-link">PPDB 2022</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Cari Disini...">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php
} elseif ($url == 'guru') {
?>
    <div class="container-fluid p-0">
        <nav class="navbar bawah navbar-expand-lg bg-utama navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="<?= $base_url; ?>beranda" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">BLUETECH<span class="text-white font-weight-normal">IT SCHOOL</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?= $base_url; ?>beranda" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= $base_url; ?>visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="<?= $base_url; ?>struktursekolah" class="dropdown-item">Struktur Sekolah</a>
                            <a href="<?= $base_url; ?>saranaprasarana" class="dropdown-item">Sarana Prasarana</a>
                            <a href="<?= $base_url; ?>kepalasekolah" class="dropdown-item">Kepala Sekolah</a>
                            <a href="<?= $base_url; ?>komite" class="dropdown-item">Komite Sekolah</a>
                            <a href="<?= $base_url; ?>kemitraan" class="dropdown-item">Kemitraan</a>
                            <a href="<?= $base_url; ?>pbm" class="dropdown-item">Proses Belajar Mengajar</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <?php
                            $jurusan = mysqli_query($con, "SELECT * FROM tb_jurusan");

                            while ($data = mysqli_fetch_array($jurusan)) {
                            ?>
                                <a href="<?= $base_url; ?>jurusan/<?= $data['id']; ?>" class="dropdown-item"><?= $data['jurusan']; ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Manajemen</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="https://kurikulum.gtk.kemdikbud.go.id/" class="dropdown-item">Kurikulum</a>
                            <a href="<?= $base_url; ?>guru" class="dropdown-item">Tenaga Pendidik</a>
                        </div>
                    </div>
                    <a href="index.php?page=" class="nav-item nav-link">PPID</a>
                    <a href="index.php?page=" class="nav-item nav-link">PPDB 2022</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Cari Disini...">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php
}
?>