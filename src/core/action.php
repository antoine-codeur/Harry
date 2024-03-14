<?php
$jsonData = file_get_contents('../json/Hogwarts.json');
$characters = json_decode($jsonData, true);

$houseFilter = $_GET['house'] ?? 'all';
$genderFilter = $_GET['gender'] ?? 'all';
$sortOrder = $_GET['sort'] ?? 'nameAsc';

$filteredCharacters = array_filter($characters, function ($character) use ($houseFilter, $genderFilter) {
    $matchesHouse = $houseFilter === 'all' || (isset($character['house']) && $character['house'] === $houseFilter);
    $matchesGender = $genderFilter === 'all' || (isset($character['gender']) && $character['gender'] === $genderFilter);
    return $matchesHouse && $matchesGender;
});

usort($filteredCharacters, function($a, $b) use ($sortOrder) {
    switch ($sortOrder) {
        case 'nameAsc':
            return $a['name'] <=> $b['name'];
        case 'nameDesc':
            return $b['name'] <=> $a['name'];
        case 'dateOfBirthAsc':
            $aDate = empty($a['dateOfBirth']) || $a['dateOfBirth'] === 'Unknown' ? '9999-12-31' : DateTime::createFromFormat('d-m-Y', $a['dateOfBirth'])->format('Y-m-d');
            $bDate = empty($b['dateOfBirth']) || $b['dateOfBirth'] === 'Unknown' ? '9999-12-31' : DateTime::createFromFormat('d-m-Y', $b['dateOfBirth'])->format('Y-m-d');
            return $aDate <=> $bDate;
        case 'dateOfBirthDesc':
            $aDate = empty($a['dateOfBirth']) || $a['dateOfBirth'] === 'Unknown' ? '0000-01-01' : DateTime::createFromFormat('d-m-Y', $a['dateOfBirth'])->format('Y-m-d');
            $bDate = empty($b['dateOfBirth']) || $b['dateOfBirth'] === 'Unknown' ? '0000-01-01' : DateTime::createFromFormat('d-m-Y', $b['dateOfBirth'])->format('Y-m-d');
            return $bDate <=> $aDate;
        default:
            return 0;
    }
});

foreach ($filteredCharacters as $character) {
    $characterName = $character['name'];
    $characterHouse = $character['house'] ?? 'Unknown';
    $characterGender = $character['gender'] ?? 'Unknown';
    $characterImage = $character['image'] ?? 'default.jpg';
    $characterDateOfBirth = $character['dateOfBirth'] ?? 'Unknown';
    include('../../asset/template/character.php');
}
