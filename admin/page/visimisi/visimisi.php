<style>
    .switch-field input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }

    .switch-field label {
        background-color: #e4e4e4;
        color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        line-height: 1;
        text-align: center;
        padding: 8px 16px;
        margin-right: -1px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
        transition: all 0.1s ease-in-out;
    }

    .switch-field label:hover {
        cursor: pointer;
    }

    .switch-field input:checked+label {
        background-color: #a5dc86;
        box-shadow: none;
    }

    .switch-field label:first-of-type {
        border-radius: 4px 0 0 4px;
    }

    .switch-field label:last-of-type {
        border-radius: 0 4px 4px 0;
    }
</style>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Visi Misi</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Visi Misi</a>
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
                            <div class="card-header">
                                <h5>Tambah Visi Misi</h5>
                            </div>
                            <div class="card-block">
                                <form method="post" action="<?= $base_url; ?>action.php?aksi=visimisi">
                                    <textarea name="visimisi" id="" style="height: 80px;" cols="30" class="form-control" placeholder="Visi Misi" rows="10"></textarea>
                                    <select name="tipe" id="" class="form-control" required>
                                        <option value="">---</option>
                                        <option value="visi">Visi</option>
                                        <option value="misi">Misi</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-2">Tambahkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h5>Pengumuman Yang Terdaftar</h5>
                    </div> -->
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Visi Misi</th>
                                        <th>Tipe</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $visimisi = mysqli_query($con, "SELECT * FROM tb_visimisi");
                                    $no = 1;
                                    if ($visimisi->num_rows > 0) {
                                        foreach ($visimisi as $data) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $data['visimisi']; ?></td>
                                                <td><?= $data['tipe']; ?></td>
                                                <td>
                                                    <form action="<?= $base_url; ?>action.php?aksi=hapusvisimisi" method="post">
                                                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                        <button type="submit" class="btn btn-danger" style="font-size: 12px;"><i class="fas fa-trash fa-1x"></i></button>
                                                    </form>
                                                </td>
                                        <?php
                                        }
                                    }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Basic table card end -->
            </div>
            <!-- Background Utilities table end -->
        </div>
        <!-- Page-body end -->
    </div>
</div>
<!-- Main-body end -->

<div id="styleSelector">