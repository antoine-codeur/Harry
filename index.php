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
                <option value="" selected disabled>--Filter--</option>
                <option value="all">Toutes les Maisons</option>
                <option value="Gryffindor">Gryffindor</option>
                <option value="Hufflepuff">Hufflepuff</option>
                <option value="Ravenclaw">Ravenclaw</option>
                <option value="Slytherin">Slytherin</option>
            </select>

            <button id="showCards">Afficher les cartes</button>
        </div>
        <div id="cardsContainer" class="cards-container">
            
        </div>
    </main>
    <script src="src/script/AJAX_cards.js"></script>
</body>
</html>
