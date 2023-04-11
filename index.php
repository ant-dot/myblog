<?php require_once 'config/db.php'?>

<?php 
    $query = "SELECT * FROM posts ORDER BY created_at DESC";

    $results =  mysqli_query($conn, $query);

    $posts = mysqli_fetch_all($results, MYSQLI_ASSOC);

    mysqli_free_result($results);

    mysqli_close($conn);
?>

<?php include 'includes/header.php'?>

    <div class="container">
        <h1 class="text-center">All posts</h1>
        <?php foreach($posts as $post) : ?>
            <div class="well">
                <h3><?=$post['title']?></h3>
                <small>Created on: <?=$post['created_at']?> <i>by</i> <?=$post['author']?></small>
                <p><?=$post['body']?></p>
            </div>
            <a href="post_detail.php?id=<?=$post['id']?>&title=<?=$post['title']?>" class="btn btn-primary">Read More</a>
            <?php endforeach; ?>
    </div>


<?php include 'includes/footer.php'?>