<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Program Sederhana Menggunakan Form Input</h2>
    <form method="post">
        <div>
            <label>Nama</label> <br>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Tanggal Lahir</label> <br>
            <input type="date" name="tanggal_lahir">
        </div>
        <div style="margin-bottom: 1rem;">
            <label>Pekerjaan</label> <br>
                <select name="pekerjaan">
                <option value="teknisi">Teknisi</option>
                <option value="operator">Operator</option>
                <option value="engineer">Engineer</option>
            </select>
        </div>
        <input type="submit" value="Kirim">
    </form>
<?php
    // Tanggal Lahir
    function umur($tgl_lahir){
        // ubah ke format Ke Date Time
        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();
        
        $diff = $hari_ini->diff($lahir);
        
        // Display
        echo "Tanggal Lahir: ". date('d M Y', strtotime($tgl_lahir)) .'<br />';
        echo "Umur: ". $diff->y ." Tahun";
        echo " ". $diff->m ." Bulan";
        echo " ". $diff->d ." Hari";
    }

    // Pekerjaan
    function kerja($job){
        $job = $_POST['pekerjaan'];
        if ($job == 'teknisi') {
            echo 'Pekerjaan: ' . $_POST['pekerjaan'] .'<br />';
            echo 'Gaji Rp.5.500.000';
        } elseif ($job == 'operator') {
            echo 'Pekerjaan: ' . $_POST['pekerjaan'] .'<br />';
            echo 'Gaji Rp.4.800.000';
        } elseif ($job == 'engineer') {
            echo 'Pekerjaan: ' . $_POST['pekerjaan'] .'<br />';
            echo 'Gaji Rp.7.800.000';
        } else {
            echo "Belum Bekerja";
        }
    }
    
    echo 'Selamat Datang ' . $_POST['nama'] .'<br />';
    echo umur($_POST['tanggal_lahir']).'<br />';
    echo kerja($_POST['pekerjaan']);
?>
</body>
</html>