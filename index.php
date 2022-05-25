<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->


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
  <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP-Ajax-Dischi</title>
</head>
<body>
<header class="d-flex justify-content-space-between align-items-center">
    <div class="logo">
      <img
        src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png"
        alt="logo"
        class="img-fluid"
      />
    </div>
  </header>
    
    <section class="container ">

           <div  class="album-container row py-3 d-flex justify-content-center" >
           <?php foreach($albums as $value){ ?>
           <div class="col-3 card justify-content-center align-items-center">
        <img class="img-fluid" src="<?php echo $value['poster']  ?>" alt="album">
        <div class="title-card"><?php echo $value['title'] ?></div>
        <div class="text-card"><?php echo $value['author'] ?></div>
        <div class="text-card"><?php echo $value['genre'] ?></div>
        <div class="text-card"><?php echo $value['year'] ?></div>
        </div>
        <?php } ?>
       
         </div>
         
 </section>
    




    <!-- <section class="container">
    <div><FilterComp :discs="albumList" @startFilter="filterDiscs" /></div>
    <div class="album-container row py-3 d-flex justify-content-center">
      <div
        v-for="(item, index) in filteredDiscs"
        :key="index"
        class="col-3 card justify-content-center align-items-center"
      >
        <img class="img-fluid" :src="item.poster" :alt="item.title" />
        <div class="title-card">{{ item.title }}</div>
        <div class="text-card">{{ item.author }}</div>
        <div class="text-card">{{ item.genre }}</div>
        <div class="text-card">{{ item.year }}</div>
      </div>
    </div>
  </section> -->

  
</body>
</html>