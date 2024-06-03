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
            $id = $_GET['id'];
            if ($id){
                include("connect.php");
                $sqlSelect = "SELECT * FROM posts WHERE id = $id";
                $result = mysqli_query($conn, $sqlSelect);
                while ($data = mysqli_fetch_array($result)){
                ?>
                    <div class="post bg-light p-4 mt-5">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['date']; ?></p>
                        <p><?php echo $data['content']; ?></p>
                    </div>
                <?php
                }
            }else{
                echo "Postingan Tidak Ditemukan";
            }
        ?>
        </div>
    </div>
</body>
</html>
