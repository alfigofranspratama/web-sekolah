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
                                <h5>Tambah Postingan</h5>
                                <span>Tambah Postingan<code>Artikel</code></span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Post</h4>
                                <form method="post" action="<?= $base_url; ?>action.php?aksi=artikel" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Artikel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail Artikel</label>
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
                                        <label class="col-sm-2 col-form-label">Isi Artikel</label>
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