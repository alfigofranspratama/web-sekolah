<?php
$jrs = $_GET['jurusan'];

$jurusan = mysqli_query($con, "SELECT * FROM tb_jurusan WHERE id='$jrs'")->fetch_array();
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
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Jurusan</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;"><?= $jurusan['jurusan']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mb-2">
            <div class="container">
                <div class="col-12 bg-putih p-3">
                    <div class="p-3 mt-3 mb-3 border">
                        <div class="p-2" style="margin-bottom: -15px;">
                            <div class="d-flex justify-content-center flex-column align-items-center mb-3">
                                <h4 class="text-center mb-3" style=""><?= $jurusan['jurusan']; ?></h4>
                                <img src="admin/image/jurusan/<?= $jurusan['thumbnail']; ?>" width="500" class="text-center" height="300" style="object-fit:cover;" alt="">
                            </div>
                            <div class="p-2">
                                <?= $jurusan['informasi_detail']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $related = mysqli_query($con, "SELECT * FROM tb_jurusan LIMIT 4");
        ?>
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
                    <li class="breadcrumb-item">
                    </li>
                    <span style="color: #000;">Related :&nbsp;</span>
                    <?php
                    while ($data = mysqli_fetch_array($related)) {
                    ?>
                        <li class="breadcrumb-item">
                            <a href="<?= $base_url; ?>jurusan/<?= $data['id']; ?>" style="color: #000;"><?= $data['jurusan']; ?>,&nbsp;</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>