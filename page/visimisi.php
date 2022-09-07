<?php
$visi = mysqli_query($con, "SELECT * FROM tb_visimisi WHERE tipe='visi'");
$misi = mysqli_query($con, "SELECT * FROM tb_visimisi WHERE tipe='misi'");
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
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Visi Misi</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Visi Misi -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">VISI MISI SMK NEGERI 4 PAYAKUMBUH</h4>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih p-2">
                    <div class="container p-5 border hitam">
                        <h5 class="bold">VISI</h5>
                        <?php
                        foreach ($visi as $data) :
                        ?>
                            <p>
                                <?= $data['visimisi'] ?>
                            </p>
                        <?php
                        endforeach
                        ?>

                        <h5 class="bold">MISI</h5>

                        <p>
                        <ol>
                            <?php
                            foreach ($misi as $data) :
                            ?>
                                <li>
                                    <?= $data['visimisi']; ?>
                                </li>
                            <?php
                            endforeach
                            ?>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>