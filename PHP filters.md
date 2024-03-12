# PHP - Filtres AJAX
Les données utilisées lors de cet exercice proviendront du fichier JSON (extension en .json) disponible dans le channel Discord `#ressources`.
Ce fichier contient diverses données, en anglais, sur différents personnages de l'univers de Harry Potter. Nous allons utiliser ces données afin de mettre en page de manière efficiente une liste de cartes (*cards*, en anglais).

Tout au long des exercices vous respecterez les bonnes pratiques liées aux langages utilisés. 
**L'intégralité des exercices devront être réalisés sur le même projet et sans Chat GPT.**

## Partie 1
Dans un premier temps, et seulement en HTML / CSS, vous devrez créer une page basique comportant :

 - un titre principal ;
 - un ou quelques paragraphe(s) d'introduction ;
 - un conteneur qui recevra nos cartes de personnages ;
 - une carte reprenant les données souhaitées d'1 personnage du fichier JSON avec, à minima :
	 - l'image
	 - le nom
	 - la Maison

> Même si nous ne travaillons qu'en HTML / CSS pour le moment, il est recommandé de travailler sur un fichier PHP dès maintenant.

## Partie 2
Une fois votre mise en page HTML / CSS de base terminée, vous dupliquerez manuellement la carte créée afin d'afficher 3 à 6 cartes sur votre page.
Vous retravaillerez alors votre CSS afin de rendre ce *listing* responsive et esthétique.

## Partie 3
Grâce à une boucle PHP, vous remplacerez les cartes copiées en HTML afin d'optimiser votre fichier affichant ainsi la même carte un nombre de fois défini.
Une fois la boucle créée, vous assignerez chaque donnée du personnage à une variable afin de les afficher *via* la fonction PHP `echo`.

Vous pouvez maintenant déplacer le contenu de votre boucle PHP dans un nouveau fichier PHP nommé `character.php` puis inclure ce fichier dans votre boucle.

## Partie 4
En PHP et sur votre page, vous récupérez le contenu du fichier JSON et le décoderez afin de le stocker dans un tableau (`array`).

Une fois le tableau contenant les données de tous les personnages créé, vous adapterez votre boucle PHP, créée dans la **Partie 3**, afin d'afficher les cartes des personnages sur votre page à partir de ce tableau.

> À ce stage, votre liste de cartes devrait être dynamique et se baser sur les données récupérée depuis le fichier JSON. Vous pouvez alors essayer de supprimer des personnages ou d'en ajouter afin de vérifier l'impact de ces modifications sur votre page.

## Partie 5
Vous déplacerez tous vos traitements PHP dans un fichier nommé `action.php` de telle sorte que, lors du premier chargement, votre page ne contienne que le titre principal et les paragraphes d'introduction créés dans la **Partie 1**.

Vous rajouterez un élément HTML `button` ayant pour ID `showCards` et, grâce au JavaScript - et notamment un appel AJAX à votre fichier `action.php`, vous ferez en sorte que les cartes des personnages s'affichent lorsque l'Utilisateur clique sur le bouton `#showCards`.

> Il peut être nécessaire d'apporter des modifications à vos instructions PHP maintenant contenues dans le fichier `action.php`.

## Partie 6 (bonus)
Vous ferez en sorte que l'Utilisateur ait la possibilité de filtrer les cartes affichées, toujours *via* des appels AJAX à votre fichier `action.php`, par appartenance de Maison.
