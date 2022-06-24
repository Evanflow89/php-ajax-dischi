<?php
include __DIR__ . '/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>PHP Api</title>
</head>
<body>
<div class="container">
    <div class="card">
      <ul><?php foreach ($database as $album) { ?>
<li>
    <img src="" alt="">
    <img src="<?php echo $album['poster'];?>" alt="<?php echo $album['title'];?>">
 <p><?php echo $album['title']; ?> </p>
<p><?php echo $album['author']; ?></p></li>
            <?php } ?>
            </ul>  
    </div>
</div>


    <script src="js/main.js"></script>
</body>
</html>