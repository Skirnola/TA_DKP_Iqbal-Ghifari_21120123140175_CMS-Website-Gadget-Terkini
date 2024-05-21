<?php
if (isset($_POST["create"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $sqliInsert = "INSERT INTO posts(date, title, summary, content) VALUES ('$date', '$title', '$summary', '$content')";
    if (mysqli_query($conn, $sqliInsert)){
        session_start();
        $_SESSION["create"] = "Postingan Berhasil Ditambahkan";
        header("Location:index.php");
    }else{
        die("Data Tidak Ada");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = $id";
    if (mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Postingan Berhasil Diperbarui";
        header("Location:index.php");
    }else{
        die("Data Tidak Diperbarui");
    }
}
?>