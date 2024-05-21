<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetMan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .btn-admin {
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>
<body>
    <header class="p-4 bg-black text-center">
        <h1><a href="index.php" class="text-light text-decoration-none">GadgetMan</a></h1>
    </header>
    <div class="post-list mt-5">
        <div class="container">
        <?php
            include("connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sqlSelect);
            while ($data = mysqli_fetch_array($result)){
            ?>
                <div class="row mb-4 p-5 bg-light">
                    <div class="col-sm-2">
                        <?php echo $data["date"]; ?>
                    </div>
                    <div class="col-sm-3">
                       <h4> <?php echo $data["title"]; ?> </h4>
                    </div>
                    <div class="col-sm-5">
                        <?php echo $data["content"]; ?>
                    </div>
                    <div class="col-sm-2">
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">BACA SELENGKAPNYA</a>
                    </div>
                </div>
            <?php
            }
        ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light text-decoration-none btn-admin">Panel Admin</a>
    </div>
</body>
</html>