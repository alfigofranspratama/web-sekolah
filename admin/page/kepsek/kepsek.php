<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Kepala Sekolah</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Kepala Sekolah</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<?php
$kepsek = mysqli_query($con, "SELECT * FROM tb_kepsek")->fetch_array();
?>
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <h4>Edit Sambutan Kepala Sekolah</h4>
                <form action="<?= $base_url; ?>action.php?aksi=ekepsek" method="post">
                    <input type="hidden" name="id" value="<?= $kepsek['id']; ?>">
                    <textarea name="kepsek" id="editor" cols="30" rows="10">
                        <?= $kepsek['sambutan']; ?>
                    </textarea>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>