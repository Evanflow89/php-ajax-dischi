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
    <!-- ##### Bootstrap CDN ############### -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP Api</title>
</head>
<body>
<div class="container mb-4">
      <div class="row d-flex justify-content-center">
      <?php foreach ($database as $album) { ?>
<div class="album col-lg-2 text-center pb-3">
    <img class="img-fluid p-3" src="<?php echo $album['poster'];?>" alt="<?php echo $album['title'];?>">
    <h2><?php echo $album['title']; ?></h2>
    <div><?php echo $album['author']; ?></div>
    <span><?php echo $album['year']; ?></span>
      </div>
            <?php } ?>
          
    </div>
</div>

    <script src="js/main.js"></script>
</body>
</html>