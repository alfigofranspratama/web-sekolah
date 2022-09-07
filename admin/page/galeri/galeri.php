<!-- <div class="pcoded-content"> -->
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Galeri</h5>
                    <p class="m-b-0">Setting dan Tambah Galeri</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Material statustic card start -->
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-block">
                                <h4 class="sub-title">Post</h4>
                                <form method="post" action="<?= $base_url; ?>action.php?aksi=berita" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail Berita</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="foto" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tampilkan di Home</label>
                                        <div class="col-sm-10">
                                            <select name="tampilkan_home" class="form-control" id="" required>
                                                <option value="" selected disabled>---</option>
                                                <option value="0">Jangan Tampilkan</option>
                                                <option value="1">Tampilkan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Isi Berita</label>
                                        <div class="col-sm-10">
                                            <textarea name="isi_postingan" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->
                </div>
                <!-- Project statustic end -->
            </div>
        </div>
        <!-- Page-body end -->
    </div>
    <div id="styleSelector"> </div>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php
                foreach ($galeri as $data) :
                ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Galeri</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li>
                                                <i class="fa fa fa-wrench open-card-option"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-window-maximize full-card"></i>
                                            </li>
                                            <li>
                                                <a href="index.php?halaman=eprestasi&id_posts=<?= $data['id_posts']; ?>">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-minus minimize-card"></i>
                                            </li>
                                            <li>
                                                <!-- Button trigger modal -->
                                                <a type="button" data-toggle="modal" data-target="#exampleModalCenter<?= $data['id_posts']; ?>">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>
                                        <?= $data['isi_postingan']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter<?= $data['id_posts']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Yakin menghapus prestasi?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Prestasi ini akan dihapus secara permanen!!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="<?= $base_url; ?>action.php?aksi=hapusprestasi" method="post">
                                        <input type="hidden" name="id_posts" value="<?= $data['id_posts']; ?>">
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </form>
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
<div id="styleSelector"></div>