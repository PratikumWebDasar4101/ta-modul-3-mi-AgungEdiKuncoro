<?php
	require("ta3config.php");
?>
<h2>Isi Data Diri</h2>
<form method="post" enctype="multipart/form-data">
    <pre>
        NIM            : <input type="text" name="nim" id="nim"><br>
        Nama           : <input type="text" name="nama" id="nama"><br>
        Fakultas       : <select name="fakultas" id="fakultas">
                            <option value="FIT">Fakultas Ilmu Terapan</option>
                            <option value="FEB">Fakultas Ekonomi Bisnis</option>
                            <option value="FKB">Fakultas Komunikasi Bisnis</option>
                            <option value="FIK">Fakultas Industri Kreatif</option>
                            <option value="FRI">Fakultas Rekayasa Industri</option>
                            <option value="FTE">Fakultas Teknik Elektro</option>
                            <option value="FIF">Fakultas Informatika</option>
                        </select><br>
        Jenis Kelamin  : <input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki
                         <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan <br>  
        Foto Profil    : <input type="file" name="foto"><input type="submit" name="submit" value="Submit">
        
    </pre>
</form>
<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $fakultas = $_POST['fakultas'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $nama_foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $dir = "foto/";
        $photo_bank = $dir.$nama_foto;
        $upload_foto = move_uploaded_file($tmp_foto, $photo_bank);
        if(!$upload_foto)
			die("Gagal menambahkan foto");
			$query = $koneksi -> prepare("INSERT INTO data_telyutizen VALUES('$nim','$nama','$fakultas','$jeniskelamin','$photo_bank') "); 
			$query -> execute();
 			if ($query) {
				header("Location: ta3view.php");
			}
			else {
				die("Gagal menambahkan data");
			}
    }
?>