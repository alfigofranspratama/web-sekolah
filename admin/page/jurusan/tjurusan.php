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
                                <h5>Tambah Jurusan</h5>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Post</h4>
                                <form method="post" action="<?= $base_url; ?>action.php?aksi=jurusan" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jurusan" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Detail</label>
                                        <div class="col-sm-10">
                                            <textarea name="detail" class="form-control" id="editor" cols="30" rows="10"></textarea>
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