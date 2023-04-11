<?php require_once 'config/db.php'?>
<?php 

    // get id of podt using get method
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM posts WHERE id='$id'";

    $result =  mysqli_query($conn, $query);

    $post = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn);
?>

<?php include 'includes/header.php'?>

    <div class="container">
        <h1><?=$post['title']?></h1>
        <small>Created on: <?=$post['created_at']?> by <?=$post['author']?></small>
        <p><?=$post['body']?>.</p>
        <hr>
        <form action="" method="post">
            
        </form>
    </div>

<?php include 'includes/footer.php'?>