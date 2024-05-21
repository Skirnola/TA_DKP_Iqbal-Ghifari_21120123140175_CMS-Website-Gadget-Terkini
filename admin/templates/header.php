<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetMan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="GadgetMan d-flex justify-content-between">
        <div class="sidebar bg-black vh-100">
            <h1 class="bg-secondary p-4"><a href="./index.php" class="text-light text-decoration-none">GadgetMan</a></h1>
            <div class="menus p-4 mt-4">
                <div class="menu">
                    <a href="create.php" class="text-light text-light text-decoration-none"><strong>Tambah Post Baru</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../index.php" class="text-light text-light text-decoration-none"><strong>Halaman Utama</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php"class="btn btn-info">Logout</a>
                </div>
            </div>
        </div>
        