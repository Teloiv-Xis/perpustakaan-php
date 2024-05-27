<?php

    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
    <tr>
        <td>Nama</td>
        <td>ISBN</td>
        <td>Unit</td>
        <td>ACTION</td>
    </tr>

    <?php foreach($query as $book) {?>
        <tr>
            <td><?php echo $book["nama"]  ?></td>
            <td><?php echo $book["isbn"]  ?></td>
            <td><?php echo $book["unit"]  ?></td>
            <td>
                <a href=<?php echo "edit-buku.php?id=" . $book["id"] ?>>EDIT</a>
                <a href=<?php echo "delete-buku.php?id=" . $book["id"] ?>>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
    </table>

    <br>
    <a href="./tambah-buku.php">Tambah data buku</a>
    <br>
    <a href="./index.php">Kembali</a>
</body>
</html>