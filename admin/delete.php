<?php
function deletePost($conn, $id) {
    $sqlDelete = "DELETE FROM posts WHERE id = $id";
    if(mysqli_query($conn, $sqlDelete)){
        return true;
    } else {
        return false;
    }
}

$id = $_GET["id"];
if($id){
    include("../connect.php");
    if(deletePost($conn, $id)) {
        session_start();
        $_SESSION["delete"] = "Postingan Berhasil Dihapus";
        header("Location:index.php");
    } else {
        die("Data Tidak Terhapus. Ada Kesalahan");
    }
} else {
    echo "Postingan Tidak Ditemukan";
}

<div><div></div></div>
?>
