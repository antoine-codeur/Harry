<?php
$characters = [
    [
        'name' => 'Harry Potter',
        'house' => 'Gryffindor',
        'image' => 'https://ik.imagekit.io/hpapi/harry.jpg'
    ],
    [
        'name' => 'Hermione Granger',
        'house' => 'Gryffindor',
        'image' => 'https://ik.imagekit.io/hpapi/hermione.jpeg'
    ],
    [
        'name' => 'Ron Weasley',
        'house' => 'Gryffindor',
        'image' => 'https://ik.imagekit.io/hpapi/ron.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnages de Harry Potter</title>
    <link rel="stylesheet" href="asset/style/style.css">
</head>
<body>
    <header>
        <h1>Personnages de Harry Potter</h1>
        <p>Découvrez les personnages emblématiques de l'univers de Harry Potter.</p>
    </header>
    <main>
        <div class="cards-container">
            <?php foreach ($characters as $character): ?>
                <?php 
                    $characterName = $character['name'];
                    $characterHouse = $character['house'];
                    $characterImage = $character['image'];
                    include('asset/template/character.php'); 
                ?>
            <?php endforeach; ?>
        </div>

    </main>
</body>
</html>
