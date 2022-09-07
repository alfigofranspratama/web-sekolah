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
                    <h5 class="m-b-10">Komentar</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url; ?>beranda"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Komentar</a>
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
                                        <th>Users</th>
                                        <th>Komentar</th>
                                        <th>Pada Postingan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $komentar = mysqli_query($con, "SELECT * FROM tb_komentar");
                                    $no = 1;
                                    if ($komentar->num_rows > 0) {
                                        foreach ($komentar as $data) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $data['nama_users']; ?></td>
                                                <td><?= $data['komentar']; ?></td>
                                                <td><a href="<?= $base_url; ?>../post/<?= $data['id_posts']; ?>" target="_blank">Klik disini</a></td>
                                                <td>
                                                    <form action="<?= $base_url; ?>action.php?aksi=hapuskomentar" method="post">
                                                        <input type="hidden" name="id" value="<?= $data['id_komentar']; ?>">
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