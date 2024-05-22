<?php
class Post {
    private $conn;
    private $id;

    public function __construct($id, $conn) {
        $this->id = $id;
        $this->conn = $conn;
    }

    public function displayPost() {
        $sqlSelectPost = "SELECT * FROM posts WHERE id = $this->id";
        $result = mysqli_query($this->conn, $sqlSelectPost);
        if ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="post w-100 bg-light p-5">
                <h1><?php echo $data['title']; ?></h1>
                <p><?php echo $data['date']; ?></p>
                <p><?php echo $data['content']; ?></p>
            </div>
            <?php
        } else {
            echo "Postingan Tidak Ditemukan";
        }
    }
}

$id = $_GET["id"];
if ($id) {
    include("../connect.php");
    $post = new Post($id, $conn);
    include("templates/header.php");
    $post->displayPost();
    include("templates/footer.php");
}
?>
