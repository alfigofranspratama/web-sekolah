<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Komite</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Komite</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<?php
$komite = mysqli_query($con, "SELECT * FROM tb_komite")->fetch_array();
?>
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <h4>Edit Komite</h4>
                <form action="<?= $base_url; ?>action.php?aksi=ekomite" method="post">
                    <input type="hidden" name="id" value="<?= $komite['id']; ?>">
                    <textarea name="komite" id="editor" cols="30" rows="10">
                        <?= $komite['komite']; ?>
                    </textarea>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>