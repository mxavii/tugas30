<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pendaftaran</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="form-style-10">
        <h1> Data Mahasiswa Baru<br><span> Tahun ajaran 2017/2018 </span></h1>
        <?php
        session_start();
        require __DIR__ . '/vendor/autoload.php';
        use App\Daftar;

        if (isset($_POST['daftar'])) {
              $mahasiswa = new Daftar($_POST['nama'], $_POST['tmp_lahir'], $_POST['tgl_lahir'],
                          $_POST['gender'], $_POST['agama'],$_POST['alamat'], $_POST['email'],
                          $_POST['telp'], $_POST['nisn'], $_POST['prodi'], $_POST['pass']);

              $mahasiswa->dataMahasiswa();
              $mahasiswa->setNisn();
            }

        ?>

        <table border="1" cellpadding="7" bgcolor="#ececec" align="center">
            <tr>
                <td><b>No</b></td>
                <td colspan="2" align="center"><b>Data calon mahasiswa</b></td>
            </tr>
            <?php if (!empty($_SESSION['mahasiswa'])) :?>
            <?php $no = 1  ?>
            <?php foreach ($_SESSION['mahasiswa'] as $key => $val) : ?>

            <tr>
                <td><?= $no++ ?></td>
                <td>Nama : <?= $val['nama']; ?><br>
                    Tempat & tanggal lahir : <?= $val['tmp_lahir']; ?>, <?= $val['tgl_lahir']; ?><br>
                    Jenis kelamin : <?= $val['gender']; ?><br>
                    Agama : <?= $val['agama']; ?><br>
                    Alamat : <?= $val['alamat']; ?>
                </td>
                <td>NISN : <?= $val['nisn']; ?><br>
                    No. telepon : <?= $val['telp']; ?><br>
                    Email : <?= $val['email']; ?><br>
                    Pilihan Prodi : <?= $val['prodi']; ?>
                </td>
            </tr>

            <?php endforeach; ?>

          <?php endif; ?>
        </table>
      </div>
  </body>
</html>

<?php
print_r($_SESSION);

// foreach ($_SESSION['$this->nisn'][0] as $key5 => $value) {
// 	echo $value['nama'];
// }
 ?>
