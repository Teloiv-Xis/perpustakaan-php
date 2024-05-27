<?php

    include_once("./connect.php") ;

    if(isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO book VALUES 
    (NULL, '$nama', '$isbn', '$unit')");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Data Buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="nama">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="nama">Unit</label>
        <input type="text" id="Unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./buku.php">Kembali</a>
</body>
</html>