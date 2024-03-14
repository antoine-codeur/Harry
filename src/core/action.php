<?php
$jsonData = file_get_contents('../json/Hogwarts.json');
$characters = json_decode($jsonData, true);

$houseFilter = $_GET['house'] ?? 'all';
$genderFilter = $_GET['gender'] ?? 'all';

$filteredCharacters = array_filter($characters, function ($character) use ($houseFilter, $genderFilter) {
    $matchesHouse = $houseFilter === 'all' || (isset($character['house']) && $character['house'] === $houseFilter);
    $matchesGender = $genderFilter === 'all' || (isset($character['gender']) && $character['gender'] === $genderFilter);
    return $matchesHouse && $matchesGender;
});

foreach ($filteredCharacters as $character) {
    $characterName = $character['name'];
    $characterHouse = $character['house'] ?? 'Unknown';
    $characterGender = $character['gender'] ?? 'Unknown';
    $characterImage = $character['image'] ?? 'default.jpg'; // Assurez-vous de gérer les cas où l'image n'existe pas
    include('../../asset/template/character.php');
}
