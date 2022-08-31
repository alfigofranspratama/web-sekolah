<?php
$sapras = mysqli_query($con, "SELECT * FROM tb_sapras")->fetch_array();
?>
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb" style="font-size: 12px; background-color: white; color: #000;">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda" style="color: #000;"> <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Profil</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Sarana Prasarana</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Visi Misi -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">SARANA PRASARANA SMK NEGERI 4 PAYAKUMBUH</h4>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih p-2">
                    <div class="container p-5 border hitam">
                        <?= $sapras['sapras']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>