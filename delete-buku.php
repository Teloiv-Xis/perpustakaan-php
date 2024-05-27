<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM book WHERE id=$id");

    header("Location: buku.php");

   