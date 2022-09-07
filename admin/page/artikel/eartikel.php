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
                                <form method="post" action="<?= $base_url; ?>action.php?aksi=eartikel&id_posts=<?= $data['id_posts']; ?>" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Artikel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail Saat ini</label>
                                        <div class="col-sm-10">
                                            <img src="<?= $base_url; ?>image/artikel/<?= $data['thumbnail']; ?>" class="img img-thumbnail" alt="">
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
                                        <label class="col-sm-2 col-form-label">Isi Artikel</label>
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