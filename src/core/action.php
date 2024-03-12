<?php
$jsonData = file_get_contents('../json/Hogwarts.json');
$characters = json_decode($jsonData, true);

foreach ($characters as $character) {
    $characterName = $character['name'];
    $characterHouse = $character['house'] ?? 'Unknown'; 
    $characterImage = $character['image'];
    include('../../asset/template/character.php');
}
