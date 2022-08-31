<!-- <div class="pcoded-content"> -->
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Keanggotaan</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Keanggotaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <!-- Material statustic card start -->
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><a href="index.php?halaman=tkeanggotaan">Tambah Keanggotaan</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <?php
                    $keanggotaan = mysqli_query($con, "SELECT * FROM tb_keanggotaan");
                    foreach ($keanggotaan as $data) :
                    ?>
                        <!-- Button trigger modal -->
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="image/keanggotaan/<?= $data['profil']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><?= $data['nama']; ?></p>
                                    <p class="card-text text-danger"><?= $data['jabatan']; ?></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?= $data['id_anggota']; ?>">
                                        <i class="fas fa-gear"></i> Option
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter<?= $data['id_anggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit / Hapus</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="action.php?aksi=hpsanggota&id=<?= $data['id_anggota']; ?>" method="post">
                                                    <a href="index.php?halaman=ekeanggotaan&id=<?= $data['id_anggota']; ?>" class="btn btn-primary">Edit</a>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</div>
<div id="styleSelector"></div>