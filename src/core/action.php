<?php
$jsonData = file_get_contents('../json/Hogwarts.json');
$characters = json_decode($jsonData, true);

$houseFilter = isset($_GET['house']) ? $_GET['house'] : 'all';

$filteredCharacters = [];
if ($houseFilter !== 'all') {
    foreach ($characters as $character) {
    
        if (isset($character['house']) && $character['house'] === $houseFilter) {
            $filteredCharacters[] = $character;
        }
    }
} else {
    $filteredCharacters = $characters;
}

foreach ($filteredCharacters as $character) {
    $characterName = $character['name'];
    $characterHouse = $character['house'] ?? 'Unknown'; 
    $characterImage = $character['image'];
    include('../../asset/template/character.php');

}