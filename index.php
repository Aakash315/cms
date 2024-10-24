<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="p-4 bg-dark text-center">
        <h1><a href="index.php" class="text-light text-decoration-none">Simple Blog</a></h1>
    </header>
    <div class="post-list">
        <div class="container">
            <?php
                include("connect.php");
                $sqlSelect= "SELECT * FROM posts";
                $result = mysqli_query($conn , $sqlSelect);
                while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="row mb-4 p-5 bg-light">
                        <div class="col-sm-2">
                            <?php echo $data["date"]; ?>
                        </div>
                        <div class="col-sm-2">
                            <h2><?php echo $data["title"]; ?></h2>
                        </div>
                        <div class="col-sm-5">
                            <?php echo $data["content"]; ?>
                        </div>
                        <div class="col-sm-2">
                            <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light">Admin Panel</a>
    </div>
</body>
</html>