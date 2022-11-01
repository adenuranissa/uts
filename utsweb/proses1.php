<?php
    if (isset($_POST['input'])){
        $nama = $_POST['nama'];
        //echo "nama :<b>$nama</b>";
        $posisi = $_POST['posisi'];
        //echo "</br>posisi:<b>$posisi</b>";
        $alamat = $_POST['alamat'];
        //echo "</br>alamat:<b>$alamat</b>";
        $umur = $_POST['umur'];
        //echo "</br>umur:<b>$umur</b>";
        $kontak = $_POST['kontak'];
        //echo "</br>kontak:<b>$kontak</b>";
        echo "<table width=50% border=1>
        <tr>
        <td>Nama</td>
        <td>$nama</td>
        </tr>
        
        <tr>
        <td>Posisi</td>
        <td>$posisi</td>
        </tr>
        
        <tr>
        <td>Alamat</td>
        <td>$alamat</td>
        </tr>
        
        <tr>
        <td>Umur</td>
        <td>$umur</td>
        </tr>
        
        <tr>
        <td>Kontak</td>
        <td>$kontak</td>
        </tr>
        </table>";

        }    
        ?>