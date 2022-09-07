<?php
$sambutan = mysqli_query($con, "SELECT * FROM tb_kepsek")->fetch_array();
?>
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>beranda" style="color: #000;"> <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Profil</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Kepala Sekolah</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Visi Misi -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">KEPALA SEKOLAH SMK NEGERI 4 PAYAKUMBUH</h4>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih p-2">
                    <div class="container p-5 border hitam">
                        <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                            <img src="img/kepsek.jpg" alt="" height="400">
                        </div>
                        <?= $sambutan['sambutan']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>