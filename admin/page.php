<?php 
$page = isset($_GET['halaman'])?$_GET['halaman']:'dashboard';

if ($page == 'dashboard') {
    include 'page/dashboard.php';
} elseif ($page == 'tberita') {
    include 'page/berita/add-berita.php';
} elseif ($page == 'vberita') {
    include 'page/berita/berita.php';
} elseif ($page == 'eberita') {
    include 'page/berita/eberita.php';
} elseif ($page == 'tprestasi') {
    include 'page/prestasi/add-prestasi.php';
} elseif ($page == 'vprestasi') {
    include 'page/prestasi/prestasi.php';
} elseif ($page == 'eprestasi') {
    include 'page/prestasi/eprestasi.php';
} elseif ($page == 'vpengumuman') {
    include 'page/pengumuman/pengumuman.php';
} elseif ($page == 'vgaleri') {
    include 'page/galeri/galeri.php';
} elseif ($page == 'vartikel') {
    include 'page/artikel/artikel.php';
} elseif ($page == 'tartikel') {
    include 'page/artikel/tartikel.php';
} elseif ($page == 'eartikel') {
    include 'page/artikel/eartikel.php';
} elseif ($page == 'vjurusan') {
    include 'page/jurusan/jurusan.php';
} elseif ($page == 'tjurusan') {
    include 'page/jurusan/tjurusan.php';
} elseif ($page == 'ejurusan') {
    include 'page/jurusan/ejurusan.php';
} elseif ($page == 'visimisi') {
    include 'page/visimisi/visimisi.php';
} elseif ($page == 'komentar') {
    include 'page/komentar/komentar.php';
} elseif ($page == 'sapras') {
    include 'page/sapras/sapras.php';
} elseif ($page == 'keanggotaan') {
    include 'page/keanggotaan/keanggotaan.php';
} elseif ($page == 'tkeanggotaan') {
    include 'page/keanggotaan/tkeanggotaan.php';
} elseif ($page == 'ekeanggotaan') {
    include 'page/keanggotaan/ekeanggotaan.php';
} elseif ($page == 'kemitraan') {
    include 'page/kemitraan/kemitraan.php';
} elseif ($page == 'kepsek') {
    include 'page/kepsek/kepsek.php';
} elseif ($page == 'komite') {
    include 'page/komite/komite.php';
} elseif ($page == 'pbm') {
    include 'page/pbm/pbm.php';
}
?>