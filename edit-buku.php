<?php

    include_once("./connect.php") ;

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM book WHERE id=$id");
    $book = mysqli_fetch_assoc($query_get_data);
    
    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE book SET nama='$nama', 
        isbn='$isbn', unit=$unit WHERE id=$id");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Edit Buku</title>
</head>
<body>
    <h1>Form Edit Buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $book['nama']?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="nama">ISBN</label>
        <input value="<?php echo $book['isbn']?>" type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="nama">Unit</label>
        <input value="<?php echo $book['unit']?>" type="text" id="unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">UPDATE</button>
    </form>
    <br>
    <a href="./buku.php">Kembali</a>
</body>
</html>