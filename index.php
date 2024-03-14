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
        <p>Découvrez les personnages emblématiques de l'univers de Hogwarts.</p>
    </header>
    <main>
        <div class="button-container">
            <select id="houseFilter">
                <option value="" selected disabled>--Filter Maisons--</option>
                <option value="all">Toutes les Maisons</option>
                <option value="Gryffindor">Gryffindor</option>
                <option value="Hufflepuff">Hufflepuff</option>
                <option value="Ravenclaw">Ravenclaw</option>
                <option value="Slytherin">Slytherin</option>
            </select>
            <select id="genderFilter">
                <option value="" selected disabled>--Filter Genres--</option>
                <option value="all">Toutes les genres</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select>
            <button id="showCards">Afficher les cartes</button>
            <select id="sortOrder">
                <option value="nameAsc">Nom (A-Z)</option>
                <option value="nameDesc">Nom (Z-A)</option>
                <option value="dateOfBirthAsc">Date de naissance (croissant)</option>
                <option value="dateOfBirthDesc">Date de naissance (décroissant)</option>
            </select>
        </div>
        <div id="cardsContainer" class="cards-container">
            
        </div>
    </main>
    <script src="src/script/AJAX_cards.js"></script>
</body>
</html>
