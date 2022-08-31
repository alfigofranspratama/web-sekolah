<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Kemitraan</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php?page=beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Kemitraan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<?php
$kemitraan = mysqli_query($con, "SELECT * FROM tb_kemitraan")->fetch_array();
?>
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <h4>Edit Kemitraan</h4>
                <form action="action.php?aksi=ekemitraan" method="post">
                    <input type="hidden" name="id" value="<?= $kemitraan['id']; ?>">
                    <textarea name="kemitraan" id="editor" cols="30" rows="10">
                        <?= $kemitraan['kemitraan']; ?>
                    </textarea>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>