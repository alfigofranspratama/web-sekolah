<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Keanggotaan</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Tambah Keanggotaan</a>
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
                <form action="action.php?aksi=tkeanggotaan" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" placeholder="Jabatan" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="profil" class="form-label">Profil</label>
                            <input type="file" name="foto" class="form-control" id="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>