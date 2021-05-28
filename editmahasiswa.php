<?php
    include '../model/databasemahasiswa.php';
    $db = new database();
?>


<h1>DATA MAHASISWA</h1>
<form action="../controller/prosesmahasiswa.php?aksi=update" method="post">
<?php
    foreach($db->edit($_GET['id']) as $d){
?>
<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="hidden" name="id" value="<?php echo $d['id']?>">
            <input type="text" name="nama" value="<?php echo $d['nama']?>">
        </td>
    </tr>
    <tr>
        <td>Program Pendidikan</td>
        <td>
            <input type="text" name="program" value="<?php echo $d['program']?>">
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input type="text" name="email" value="<?php echo $d['email']?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Simpan">
        </td>
    </tr>
</table>              
<?php 
}
?>
