<?php
$id = $_GET["id"];
if($id){
include("../connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
        $_SESSION["delete"] = "Postingan Berhasil Dihapus";
    header("Location:index.php");
}else{
    die("Data Tidak Terhapus. Ada Kesalahan");
}
}else{
    echo "Postingan Tidak Ditemukan";
}
?>