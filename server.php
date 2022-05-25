<?php
include __DIR__ . '/database.php';

// header('Content-Type: application/json');

// echo json_encode($albums);

$string= $_GET['genre'];

$filteredAlbums = [];

if ($string == "All") {
  echo json_encode($albums);
}
else {foreach ($albums as $album) {

  if ($album["genre"] == $string) {
    $filteredAlbums[] = $album;
}

}


echo json_encode($filteredAlbums);}


?>