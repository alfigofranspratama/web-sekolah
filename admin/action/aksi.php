<?php
session_start();
require "../../../../admin/sistem/conn.php";
if ($_SESSION['users']) {
    $login = $_SESSION['users'];
}
function upload()
{
    $namaFile = $_FILES['images']['name'];
    $ukuranFile = $_FILES['images']['size'];
    $error = $_FILES['images']['error'];
    $tmpName = $_FILES['images']['tmp_name'];
    if ($error === 4) {
        echo "<div class='alert alert-danger' role='alert' style='position:fixed; z-index:9999999; top:0;'>
        Pilih gambar terlebih dahulu!!!
        </div>";
        return false;
    }
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<div class='alert alert-danger' role='alert'  style='position:fixed; z-index:9999999; top:0;'>
        Yang anda pilih bukan gambar! ekstensiGambarValid 'jpg, png, jpeg'
        </div>";
        return false;
    }
    if ($ukuranFile > 1000000) {
        echo "<div class='alert alert-danger' role='alert' style='position:fixed; z-index:9999999; top:0;'>
        ukuran images terlalu besar!
        maximum ukuranFile '1mb'
        </div>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, '../../../../admin/images-post/' . $namaFileBaru);
    return $namaFileBaru;
}
$aksi = $_GET['aksi'];
$user = mysqli_query($conn, "SELECT * FROM multi_user WHERE id = '$login'")->fetch_array();
if ($aksi == 'posting') {
    if (isset($_POST['posting'])) {
        echo $title = $_POST['title'];
        echo $demo = $_POST['demo'];
        echo $source = $_POST['source'];
        echo $deskripsi = $_POST['deskripsi'];
        echo $author = $user['username'];
        date_default_timezone_set('Asia/Jakarta');
        echo $date = date("F j, Y, g:i a");
        echo $kategori = $_POST['kategori'];
        echo $images = upload();
        if (!$images) {
            return false;
        } else {
            $query = mysqli_query($conn, "INSERT INTO postingan VALUES('', '$title', '$demo', '$source', '$images', '$deskripsi', '$author', '$date', '$kategori')");
            if ($query) {
                echo "<script>alert('Post success!')</script>" . '<meta http-equiv="refresh" content="0; url=../../../index.php">';
            } else {
                echo "
            <div class='container' style='position:fixed; z-index:999999; top:0;' id='alert'>
            <div class='alert alert-danger d-flex justify-content-around' role='alert'>
                <p>post Not success!</p>        
                <button type='button' onclick='closeAlert();' class='btn-close'  aria-label='Close'></button>
            </div>
            </div>
            ";
            }
        }
    }
}
