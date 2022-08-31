<?php 
$page = isset($_GET['page'])?$_GET['page']:'beranda';

if ($page == 'beranda') {
    include 'page/beranda.php';
} elseif ($page == 'allpost') {
    include 'page/allpost.php';
} elseif ($page == 'post') {
    include 'page/post.php';
} elseif ($page == 'struktursekolah') {
    include 'page/struktursekolah.php';
} elseif ($page == 'jurusan') {
    include 'page/jurusan.php';
} elseif ($page == 'visimisi') {
    include 'page/visimisi.php';
} elseif ($page == 'saranaprasarana') {
    include 'page/saranaprasarana.php';
} elseif ($page == 'kepalasekolah') {
    include 'page/kepalasekolah.php';
} elseif ($page == 'komite') {
    include 'page/komite.php';
} elseif ($page == 'kemitraan') {
    include 'page/kemitraan.php';
} elseif ($page == 'pbm') {
    include 'page/pbm.php';
} elseif ($page == 'guru') {
    include 'page/guru.php';
}
?>