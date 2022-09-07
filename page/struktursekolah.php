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
                    <li class="breadcrumb-item"><a href="#!" style="color: #000;">Struktur Sekolah</a>
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
                <div class="col-12 bg-putih p-2">
                    <div class="bg-white border p-3" style="margin-top: -15px;">
                        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                            <?php
                            foreach ($anggota as $data) :
                            ?>
                                <div class="position-relative overflow-hidden" style="height: 300px;">
                                    <img class="img-fluid h-100" src="admin/image/keanggotaan/<?= $data['profil']; ?>" style="object-fit: cover;">
                                    <div class="overlay">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['jabatan'] ?></a>
                                        </div>
                                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $data['nama']; ?></a>
                                    </div>
                                </div>
                            <?php
                            endforeach
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visi Misi -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">Visi Misi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, numquam distinctio. Ullam id veritatis voluptatem dolorum quibusdam nisi exercitationem illum quam quia voluptate nihil eius pariatur, fugiat quasi aut ducimus neque, quae culpa amet molestias qui unde libero? Ut, facere!</p>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih p-2">
                    <div class="container p-5 border hitam">
                        <h4>PPID SMKN 4 PAYAKUMBUH</h4>

                        <h5 class="bold">VISI</h5>

                        <p>Terwujudnya Pelayanan Informasi yang Transparan dan Akuntabel Dalam Pelayanan Publik</p>

                        <p>di SMKN 4 Payakumbuh</p>

                        <h5 class="bold">MISI</h5>

                        <p>
                        <ol>
                            <li>
                                Meningkatkan pengelolaan dan pelayanan informasi yang berkualitas, benar dan bertanggung jawab sesuai undang-undang yang berlaku.
                            </li>
                            <li>Membangun dan mengembangkan sistem penyediaan dan layanan informasi.</li>
                            <li>Meningkatkan dan mengembangkan kompetensi dan kualitas SDM dalam bidang pelayanan informasi.</li>
                            <li>Mewujudkan keterbukaan informasi SMK Negeri 4 Payakumbuh dengan proses yang cepat, tepat, mudah dan sederhana.</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Struktur PPID -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="bg-putih p-2 text-center" style="margin-bottom: -15px;">
                    <h4 class="" style="">Struktur PPID</h4>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 bg-putih p-2">
                    <div class="container p-5 border hitam">
                        <iframe src="https://drive.google.com/file/d/1IR7X-aci6QF13j_y5h8JjQ8KpIePS4OG/preview" width="100%" height="500" allow="autoplay" style="object-fit: cover;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>