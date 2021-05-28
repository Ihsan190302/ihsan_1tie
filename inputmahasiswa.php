<h1>DATA MAHASISWA</h1>
<form action="../controller/prosesmahasiswa.php?aksi=tambah" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Program Pendidikan</td>
        <td>
        <select name="program">
             <option value="">Pilih Program Pendidikan</option>
             <option value="PROGRAM REGULER D-III & D-IV">PROGRAM REGULER D-III & D-IV</option>
             <option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>
             <option value="PROGRAM NON REGULER SLTA KE D-III">PROGRAM NON REGULER SLTA KE D-III</option>
             <option value="PROGRAM ALIH JEJANG D-II KE D-IV">PROGRAM ALIH JEJANG D-II KE D-IV</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>          
          