<?php
    require("ta3config.php");
?>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informasi Data diri</h2>
    <table border="1" align="center" style="text-align: center; border-spacing: 0px;">
        <tr>
            <th>Nama</th> 
            <th>NIM</th>
            <th>Fakultas</th>
            <th>Jenis Kelamin</th>
            <th>Gambar</th>
        </tr>
            <?php
                $query = $koneksi -> prepare("SELECT * FROM data_telyutizen");
                $query -> execute();
                while ($data = $query -> fetch(PDO::FETCH_ASSOC)){
            ?>
        <tr>
            <td><?php echo $data['Nama'];?></td>
            <td><?php echo $data['NIM'];?></td>
            <td><?php echo $data['Fakultas'];?></td>
            <td><?php echo $data['Jenis_Kelamin'];?></td>
            <td><img src="<?php echo $data['Foto'];?>" width="10%"></td>
        </tr>
            <?php
                }
            ?>
    </table>
<center><h3><b><a href="ta3form.php">Input Data Diri</a><b><h3></center>