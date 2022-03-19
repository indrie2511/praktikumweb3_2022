<!DOCTYPE html>
<html>
<body>

<form methode="GET" action="form_nilai.php">
Nama : <input type="text" name="nama" value="" size="30"/></br/>
Mata kuliah :
    <select name="matkul">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEBI">Pemrograman Web</option>
    </select><br/>
Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"/><br/>
Nilai Tugas Praktikum : 
            <input type="text" name="nilai_tugas" value="" size="6"/><br/> 
            <input type="submit" value="simpan" name="proes"/>
</form>
<?php
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas =$_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    
        echo '<br/>nama : '.$nama_siswa;
        echo '<br/mata kuliah : '.$mata_kuliah;
        echo '<br/>nilai uts : '.$nilai_uts;
        echo '<br/>nilai uas : '.$nilai_uas;
        echo '<br/>nilai tugas praktikum : '.$nilai_tugas;
?>
</html>
</body>

