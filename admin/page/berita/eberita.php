<!-- <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Postingan</h5>
                    <p class="m-b-0">Tambah Postingan Kabar</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Tambah Postingan Kabar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
Page-header end -->
<?php
$id = $_GET['id_posts'];
$data = mysqli_query($con, "SELECT * FROM tb_posts WHERE id_posts='$id'")->fetch_array();
?>
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
                            <div class="card-header">
                                <h5>Edit Postingan</h5>
                                <span>Edit Postingan<code><?= $data['judul']; ?></code></span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Post</h4>
                                <form method="post" action="action.php?aksi=eberita&id_posts=<?= $data['id_posts']; ?>" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail Saat ini</label>
                                        <div class="col-sm-10">
                                            <img src="image/berita/<?= $data['thumbnail']; ?>" class="img img-thumbnail" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail Baru</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="foto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tampilkan di Homepage</label>
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
                                            <textarea name="isi_postingan" class="form-control" id="editor" cols="30" rows="10"><?= $data['isi_postingan']; ?></textarea required>
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