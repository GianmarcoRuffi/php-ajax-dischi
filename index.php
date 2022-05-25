<?php
include __DIR__.'/database.php';
?>

<!-- Html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP-Ajax-Dischi</title>
</head>
<body>
    <main>
        <?php foreach($albums as $value){ ?>
        <div class="container ">
            <img src="<?php echo $value['poster']  ?>" alt="album">
            <p id="title"> <?php echo $value['title'] ?></p>
            <p><?php echo $value['author'] ?></p>
            <p><?php echo $value['year'] ?></p>
        </div>
        <?php } ?>
    </main>
</body>
</html>