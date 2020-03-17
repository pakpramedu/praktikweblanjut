<?php defined('BASEPATH') OR exit('No direct script acess allowed'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pengecekan Data Mahasiswa</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>"assets/css/custom.min.css> -->
  </head>
  <body>
    <?php echo form_open('Welcome/cek'); ?>
    <table>
      <tr>
        <td>Nama</td>
        <td>: <input type="text" name="nama" value=""></td>
      </tr>
      <?php echo form_error('nama'); ?>
      <tr>
        <td>Nim</td>
        <td>: <input type="text" name="nim" value=""></td>
      </tr>
      <?php echo form_error('nim'); ?>
    </table>
    <input type="submit" name="lm" value="Lihat Mahasiswa">
    <?php echo form_close(); ?>
  </body>
</html>
