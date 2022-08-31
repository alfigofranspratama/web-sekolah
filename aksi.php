<?php 
include 'koneksi.php';
$aksi = $_GET['aksi'];

if ($aksi == 'view') {
    $id = $_GET['id-posts'];
    $cek = mysqli_query($con, "SELECT views FROM tb_posts WHERE id_posts='$id'")->fetch_array();
    $sekarang = $cek['views'];
    $tambah = $sekarang + 1;
    $views = mysqli_query($con, "UPDATE tb_posts SET views='$tambah' WHERE id_posts='$id'");

    if ($views) {
        ?> 
        <meta http-equiv="refresh" content="0; url=index.php?page=post&id-post=<?= $id; ?>">
        <?php
    }
} elseif ($aksi == 'komen') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $komen = $_POST['komentar'];
    $tgl = date("Y-m-d");

    $komen = mysqli_query($con, "INSERT INTO tb_komentar VALUES (NULL, '$nama', '$komen', '$id', '$tgl')");

    if ($komen) {
        ?> 
        <script>alert('Berhasil menambahkan komentar')</script>
        <meta http-equiv="refresh" content="0; url=index.php?page=post&id-post=<?= $id; ?>">
        
        <?php
    }
}
?>