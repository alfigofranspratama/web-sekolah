<?php
$id = $_GET['id'];

$q = mysqli_query($con, "SELECT * FROM tb_keanggotaan WHERE id_anggota = '$id'")->fetch_array();
?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Keanggotaan</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Edit Keanggotaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <form action="<?= $base_url; ?>action.php?aksi=ekeanggotaan&id=<?= $q['id_anggota']; ?>" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="namae" class="form-control" placeholder="Nama" value="<?= $q['nama']; ?>" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" placeholder="Jabatan" value="<?= $q['jabatan']; ?>" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="profil" class="form-label">Profil</label>
                                    <input type="file" name="foto" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row">
                                <div class="col-10 mb-3">
                                    <label for="img" class="form-label">Gambar Saat ini</label><br>
                                    <img class="img-thumbnail" src="<?= $base_url; ?>image/keanggotaan/<?= $q['profil']; ?>" alt="" width="50%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>