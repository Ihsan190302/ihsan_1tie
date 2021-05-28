<?php
  include'../model/databasemahasiswa.php';
  $db= new database();
?>
<h1>DATA MAHASISWA</h1>
<a href="../view/inputmahasiswa.php">Input Data</a>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Program Pendidikan</th>
    <th>Email</th>
    <th>Opsi</th>
  </tr>
<?php
    $no=1;
    foreach($db->tampil_data() as $x){
?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $x['nama']; ?></td>
      <td><?php echo $x['program']; ?></td>
      <td><?php echo $x['email']; ?></td>
      <td>
        <a href="../view/editmahasiswa.php?id=<?php echo $x['id'];?>&aksi=edit"> Edit</a> <a>||</a>
        <a href="../controller/prosesmahasiswa.php?id=<?php echo $x['id'];?>&aksi=hapus"> Hapus</a>
      </td>
    </tr>
<?php
    }
?>