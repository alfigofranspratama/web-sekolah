<?php
include '../koneksi.php';
$action = $_GET['aksi'];

if ($action == 'login') {
    session_start();
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);

    $cek = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$username' AND password='$password'");

    if ($cek->num_rows > 0) {
        $data = mysqli_fetch_array($cek);
        $_SESSION['username'] = $data['username'];
        $_SESSION['login'] = TRUE;
        header("location:index.php?halaman=dashboard");
    } else {
        echo "<script>alert('Username atau Password salah!!')</script>";
?>
        <meta http-equiv="refresh" content="0; url=login.php">
        <?php
    }
} elseif ($action == 'berita') {
    session_start();
    // $_SESSION
    $judul = htmlspecialchars($_POST['judul']);
    // $thumbnail = $_POST['foto'];
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "berita";
    $isi_postingan = $_POST['isi_postingan'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $xx = $rand . "_" . $nama;
            move_uploaded_file($file_tmp, 'image/berita/' . $xx);
            $post = mysqli_query($con, "INSERT INTO tb_posts VALUES (NULL, '$judul','$xx','$post_oleh','$tanggal_post','$tipe_postingan','$isi_postingan','$tampilkan_home',0)");
            if ($post) {
                echo '<script>alert("Berita Berhasil di Tambahkan")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vberita">';
        ?>
        <?php
            } else {
                echo '<script>alert("Gagal Menambahkan berita")</script>';
            }
        } else {
            echo '<script>alert("File Gambar Terlalu besar")</script>';
        }
    } else {
        echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
    }
} elseif ($action == 'hapusberita') {
    $id_posts = $_POST['id_posts'];

    $delete = mysqli_query($con, "DELETE FROM tb_posts WHERE id_posts='$id_posts'");

    if ($delete) {
        echo '<script>alert("Berita Berhasil di Hapus")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vberita">';
        ?>
        <?php
    }
} elseif ($action == 'eberita') {
    session_start();
    $id_posts = $_GET['id_posts'];
    $judul = htmlspecialchars($_POST['judul']);
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "berita";
    $isi_postingan = $_POST['isi_postingan'];
    // $views = $_POST['views'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    // var_dump($nama); die;

    if (!empty($nama)) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $xx = $rand . "_" . $nama;
                move_uploaded_file($file_tmp, 'image/berita/' . $xx);
                $editg = mysqli_query($con, "UPDATE tb_posts SET judul='$judul', thumbnail='$xx' ,isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
                if ($editg) {
                    echo '<script>alert("Berita Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vberita">';
        ?>
            <?php
                } else {
                    echo '<script>alert("Gagal Edit berita")</script>';
                }
            } else {
                echo '<script>alert("File Gambar Terlalu besar")</script>';
            }
        } else {
            echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
        }
    } else {
        $edit = mysqli_query($con, "UPDATE tb_posts SET judul='$judul',isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
        if ($edit) {
            echo '<script>alert("Berita Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vberita">';
            ?>
            <?php
        }
    }
} elseif ($action == 'prestasi') {
    session_start();
    // $_SESSION
    $judul = htmlspecialchars($_POST['judul']);
    // $thumbnail = $_POST['foto'];
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "prestasi";
    $isi_postingan = $_POST['isi_postingan'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $xx = $rand . "_" . $nama;
            move_uploaded_file($file_tmp, 'image/prestasi/' . $xx);
            $post = mysqli_query($con, "INSERT INTO tb_posts VALUES (NULL, '$judul','$xx','$post_oleh','$tanggal_post','$tipe_postingan','$isi_postingan','$tampilkan_home',0)");
            if ($post) {
                echo '<script>alert("Prestasi Berhasil di Tambahkan")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vprestasi">';
            ?>
                <?php
            } else {
                echo '<script>alert("Gagal Menambahkan Prestasi")</script>';
            }
        } else {
            echo '<script>alert("File Gambar Terlalu besar")</script>';
        }
    } else {
        echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
    }
} elseif ($action == 'eprestasi') {
    session_start();
    $id_posts = $_GET['id_posts'];
    $judul = htmlspecialchars($_POST['judul']);
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "prestasi";
    $isi_postingan = $_POST['isi_postingan'];
    // $views = $_POST['views'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    // var_dump($nama); die;

    if (!empty($nama)) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $xx = $rand . "_" . $nama;
                move_uploaded_file($file_tmp, 'image/prestasi/' . $xx);
                $editg = mysqli_query($con, "UPDATE tb_posts SET judul='$judul', thumbnail='$xx' ,isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
                if ($editg) {
                    echo '<script>alert("Prestasi Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vprestasi">';
                ?>
            <?php
                } else {
                    echo '<script>alert("Gagal Edit Prestasi")</script>';
                }
            } else {
                echo '<script>alert("File Gambar Terlalu besar")</script>';
            }
        } else {
            echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
        }
    } else {
        $edit = mysqli_query($con, "UPDATE tb_posts SET judul='$judul',isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
        if ($edit) {
            echo '<script>alert("Prestasi Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vprestasi">';
            ?>
            <?php
        }
    }
} elseif ($action == 'hapusprestasi') {
    $id_posts = $_POST['id_posts'];

    $delete = mysqli_query($con, "DELETE FROM tb_posts WHERE id_posts='$id_posts'");

    if ($delete) {
        echo '<script>alert("Prestasi Berhasil di Hapus")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vprestasi">';
    }
} elseif ($action == 'pengumuman') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $aksi = mysqli_query($con, "UPDATE tb_pengumuman SET status='$status' WHERE id_pengumuman='$id'");

    if ($aksi) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?halaman=vpengumuman">';
    }
} elseif ($action == 'tpengumuman') {
    $a = $_POST['a'];

    $b = mysqli_query($con, "INSERT INTO tb_pengumuman VALUES (NULL,'$a','1')");

    if ($b) {
        echo '<script>alert("Berhasil menambah pengumuman")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vpengumuman">';
    }
} elseif ($action == 'dpengumuman') {
    $id = $_POST['id'];

    $del = mysqli_query($con, "DELETE FROM tb_pengumuman WHERE id_pengumuman='$id'");

    if ($del) {
        echo "<script>alert('sukses menghapus pengumuman')</script>" . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vpengumuman">';
    }
} elseif ($action == 'artikel') {
    session_start();
    // $_SESSION
    $judul = htmlspecialchars($_POST['judul']);
    // $thumbnail = $_POST['foto'];
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "artikel";
    $isi_postingan = $_POST['isi_postingan'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $xx = $rand . "_" . $nama;
            move_uploaded_file($file_tmp, 'image/artikel/' . $xx);
            $post = mysqli_query($con, "INSERT INTO tb_posts VALUES (NULL, '$judul','$xx','$post_oleh','$tanggal_post','$tipe_postingan','$isi_postingan','$tampilkan_home',0)");
            if ($post) {
                echo '<script>alert("Artikel Berhasil di Tambahkan")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vartikel">';
            ?>
                <?php
            } else {
                echo '<script>alert("Gagal Menambahkan artikel")</script>';
            }
        } else {
            echo '<script>alert("File Gambar Terlalu besar")</script>';
        }
    } else {
        echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
    }
} elseif ($action == 'eartikel') {
    session_start();
    $id_posts = $_GET['id_posts'];
    $judul = htmlspecialchars($_POST['judul']);
    $post_oleh = $_SESSION['username'];
    $tanggal_post = date("Y-m-d");
    $tipe_postingan = "artikel";
    $isi_postingan = $_POST['isi_postingan'];
    // $views = $_POST['views'];
    $tampilkan_home = $_POST['tampilkan_home'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    // var_dump($nama); die;

    if (!empty($nama)) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $xx = $rand . "_" . $nama;
                move_uploaded_file($file_tmp, 'image/artikel/' . $xx);
                $editg = mysqli_query($con, "UPDATE tb_posts SET judul='$judul', thumbnail='$xx' ,isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
                if ($editg) {
                    echo '<script>alert("Artikel Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vartikel">';
                ?>
            <?php
                } else {
                    echo '<script>alert("Gagal Edit artikel")</script>';
                }
            } else {
                echo '<script>alert("File Gambar Terlalu besar")</script>';
            }
        } else {
            echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
        }
    } else {
        $edit = mysqli_query($con, "UPDATE tb_posts SET judul='$judul',isi_postingan='$isi_postingan', tampilkan_home='$tampilkan_home' WHERE id_posts='$id_posts'");
        if ($edit) {
            echo '<script>alert("Artikel Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vartikel">';
            ?>
        <?php
        }
    }
} elseif ($action == 'jurusan') {
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $detail = $_POST['detail'];

    $insert = mysqli_query($con, "INSERT INTO tb_jurusan VALUES (NULL,'$jurusan','$detail','default.jpg')");

    if ($insert) {
        echo '<script>alert("Berhasil menambahkan jurusan")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vjurusan">';
    }
} elseif ($action == 'djurusan') {
    $id = $_POST['id'];

    $delete = mysqli_query($con, "DELETE FROM tb_jurusan WHERE id='$id'");

    if ($delete) {
        echo "<script>alert('Sukses Menghapus Jurusan')</script>" . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vjurusan">';
    }
} elseif ($action == 'ejurusan') {
    $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $detail = $_POST['detail'];

    $update = mysqli_query($con, "UPDATE tb_jurusan SET jurusan='$jurusan', informasi_detail='$detail' WHERE id='$id'");

    if ($update) {
        echo "<script>alert('Berhasil edit jurusan')</script>" . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vjurusan">';
    }
} elseif ($action == 'hapusposts') {
    $id_posts = $_POST['id_posts'];

    $delete = mysqli_query($con, "DELETE FROM tb_posts WHERE id_posts='$id_posts'");

    if ($delete) {
        echo '<script>alert("Artikel Berhasil di Hapus")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=vartikel">';
    }
} elseif ($action == 'visimisi') {
    $visimisi = $_POST['visimisi'];
    $tipe = $_POST['tipe'];

    $insert = mysqli_query($con, "INSERT INTO tb_visimisi VALUES (NULL, '$visimisi', '$tipe')");

    if ($insert) {
        ?>
        <script>
            alert('Sukses Menambah Visi / Misi')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=visimisi">
    <?php
    }
} elseif ($action == 'hapusvisimisi') {
    $id = $_POST['id'];

    $hapus = mysqli_query($con, "DELETE FROM tb_visimisi WHERE id='$id'");

    if ($hapus) {
    ?>
        <script>
            alert('Sukses Menghapus Visi / Misi')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=visimisi">
    <?php
    }
} elseif ($action == 'hapuskomentar') {
    $id = $_POST['id'];

    $delete = mysqli_query($con, "DELETE FROM tb_komentar WHERE id_komentar='$id'");

    if ($delete) {
    ?>
        <script>
            alert('komentar berhasil di hapus')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=komentar">
    <?php
    }
} elseif ($action == 'esapras') {
    $id = $_POST['id'];
    $sapras = $_POST['sapras'];
    $edit = mysqli_query($con, "UPDATE tb_sapras SET sapras='$sapras' WHERE id='$id'");

    if ($edit) {
    ?>
        <script>
            alert('Sarana Prasarana Berhasil di Edit')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=sapras">
    <?php
    }
} elseif ($action == 'tkeanggotaan') {
    $namae = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $xx = $rand . "_" . $nama;
            move_uploaded_file($file_tmp, 'image/keanggotaan/' . $xx);
            $post = mysqli_query($con, "INSERT INTO tb_keanggotaan VALUES (NULL, '$namae','$jabatan','$xx')");
            if ($post) {
                echo '<script>alert("Anggota Berhasil di Tambahkan")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=keanggotaan">';
            } else {
                echo '<script>alert("Gagal Menambahkan artikel")</script>';
            }
        } else {
            echo '<script>alert("File Gambar Terlalu besar")</script>';
        }
    } else {
        echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
    }
} elseif ($action == 'hpsanggota') {
    $id = $_GET['id'];

    $del = mysqli_query($con, "DELETE FROM tb_keanggotaan WHERE id_anggota = '$id'");

    if ($del) {
    ?>
        <script>
            alert('Berhasil menghapus anggota.')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=keanggotaan">
        <?php
    }
} elseif ($action == 'ekeanggotaan') {
    $id = $_GET['id'];
    $namae = $_POST['namae'];
    $jabatan = $_POST['jabatan'];

    $rand = rand();
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (!empty($nama)) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $xx = $rand . "_" . $nama;
                move_uploaded_file($file_tmp, 'image/keanggotaan/' . $xx);
                $editg = mysqli_query($con, "UPDATE tb_keanggotaan SET nama='$namae', jabatan='$jabatan', profil='$xx' WHERE id_anggota = '$id'");
                if ($editg) {
                    echo '<script>alert("Anggota Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=keanggotaan">';
        ?>
            <?php
                } else {
                    echo '<script>alert("Gagal Edit Keanggotaan")</script>';
                }
            } else {
                echo '<script>alert("File Gambar Terlalu besar")</script>';
            }
        } else {
            echo '<script>alert("Ekstensi gambar tidak diperbolehkan")</script>';
        }
    } else {
        $edit = mysqli_query($con, "UPDATE tb_keanggotaan SET nama='$namae', jabatan='$jabatan' WHERE id_anggota = '$id'");
        if ($edit) {
            echo '<script>alert("Keanggotaan Berhasil di Edit")</script>' . '<meta http-equiv="refresh" content="0; url=index.php?halaman=keanggotaan">';
            ?>
<?php
        }
    }
}  elseif ($action == 'ekemitraan') {
    $id = $_POST['id'];
    $kemitraan = $_POST['kemitraan'];
    $edit = mysqli_query($con, "UPDATE tb_kemitraan SET kemitraan='$kemitraan' WHERE id='$id'");

    if ($edit) {
    ?>
        <script>
            alert('Kemitraan Berhasil di Edit')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=kemitraan">
    <?php
    }
} elseif ($action == 'ekepsek') {
    $id = $_POST['id'];
    $kepsek = $_POST['kepsek'];
    $edit = mysqli_query($con, "UPDATE tb_kepsek SET sambutan='$kepsek' WHERE id='$id'");

    if ($edit) {
    ?>
        <script>
            alert('Kepsek Berhasil di Edit')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=kepsek">
    <?php
    }
} elseif ($action == 'ekomite') {
    $id = $_POST['id'];
    $komite = $_POST['komite'];
    $edit = mysqli_query($con, "UPDATE tb_komite SET komite='$komite' WHERE id='$id'");

    if ($edit) {
    ?>
        <script>
            alert('Komite Berhasil di Edit')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=komite">
    <?php
    }
} elseif ($action == 'epbm') {
    $id = $_POST['id'];
    $pbm = $_POST['pbm'];
    $edit = mysqli_query($con, "UPDATE tb_pbm SET pbm='$pbm' WHERE id='$id'");

    if ($edit) {
    ?>
        <script>
            alert('PBM Berhasil di Edit')
        </script>
        <meta http-equiv="refresh" content="0; url=index.php?halaman=pbm">
    <?php
    }
}
