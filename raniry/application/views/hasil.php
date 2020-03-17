<?php defined('BASEPATH') OR exit('No direct script acess allowed');
if(!isset($nama)){
 echo 'nama tidak ditemukan';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pengecekan Data Mahasiswa</title>
  </head>
    <table border="1">
      <body>
      <tr>
        <td>Nama</td>
        <td>Nim</td>
        <td>Tanggal Lahit</td>
        <td>Alamat</td>
        <td>IPK</td>
      </tr>
      <tr>
        <td><?php echo $nama; ?></td>
        <td><?php echo $nim; ?></td>
        <td><?php echo $tgl; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $ipk; ?></td>
      </tr>
    </table>
  </body>
</html>
