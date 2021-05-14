# Praktikum 7: PHP Dasar
# Mata Kuliah Pemrograman WEB
```
Nama  : Abdul Majid
NIM   : 311810693
Kelas : TI.19.C.1
Universitas Pelita Bangsa
```
## Persiapan
Membuat folder di htdocs xampp.

## PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```
![1](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/1.PNG)

## Variable PHP
Menambahkan variable pada program.
```PHP
<?php
    $nim = "311810693";
    $nama = 'Abdul Majid';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";    
?>
```
![2](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/2.PNG)

## Predefine Variable $_GET
Membuat file latihan2.php, lalu menambahkan varibale $_GET.
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Predefine Variable</h1>
    <?php
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>
```
lalu mengakses filenya di browser, dan menambahkan nilai nama=Adul%Majid pada alamatnya seperti berikut.
http://localhost/lab7Web/latihan2.php?nama=Abdul%20Majid
![3](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/3.PNG)

## Form Input
```PHP
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Selamat Datang ' . $_POST['nama'];
    ?>
```
![4](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/4.PNG)

## Operator
```PHP
    <h2>Operator</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
```
![5](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/5.PNG)

## Kondisi IF
```PHP
    <h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
    ?>
```
![6](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/6.PNG)

## Kondisi Switch
```PHP
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>
```
![7](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/7.PNG)

## Perulangan for
```PHP
    <h2>Perulangan for</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
```
![8](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/8.PNG)

## Perulangan while
```PHP
    <h2>Perulangan while</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
        }
    ?>
```
![9](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/9.PNG)

## Perulangan dowhile
```PHP
    <h2>Perulangan dowhile</h2>
    <?php
       echo "Perulangan 1 sampai 10 <br />";
       $i=1;
       do {
       echo "Perulangan ke: " . $i . '<br />';
       $i++;
       } while ($i<=10);
    ?>
```
![10](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/10.PNG)

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

### Jawab
Membuat file form.php lalu menambahkan kode berikut.
```PHP
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
```
![tugas](https://github.com/abdulmajid96/Lab7Web/blob/main/SS/tugas.PNG)