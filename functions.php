<?php
function getDischi(){
    $json_text = file_get_contents("./dischi.json");
    return json_decode($json_text, true);
};