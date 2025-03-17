<?php

$json_text = file_get_contents("./dischi.json");

$dischi = json_decode($json_text, true);
if($_POST["titolo"] && $_POST["artista"] && $_POST["cover"] && $_POST["anno"] && $_POST["genere"]){

    $json_text = file_get_contents("./dischi.json");

    $dischi = json_decode($json_text, true);
    
    $titolo = $_POST["titolo"];
    $artista = $_POST["artista"];
    $cover = $_POST["cover"];
    $anno = $_POST["anno"];
    $genere = $_POST["genere"];
    $nuovoDisco = [
        "titolo" => $titolo,
        "artista" => $artista,
        "cover" => $cover,
        "anno" => $anno,
        "genere" => $genere
    ];
    $dischi[] = $nuovoDisco;
    file_put_contents("./dischi.json", json_encode($dischi, JSON_PRETTY_PRINT));

     header("Location: index.php");
} else {
    header("Location: index.php");
}

?>



