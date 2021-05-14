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
