<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher / Cacher un Article</title>
</head>
<body>

    <!-- Création du bouton avec l'id "button" -->
    <button id="button">Afficher/Cacher l'article</button>

    <!-- Zone où l'article sera ajouté -->
    <div id="content"></div>

    <script>
        // Déclaration d'une variable pour suivre l'état de l'article
        let articleVisible = false;

        // Fonction pour afficher ou cacher l'article
        function showhide() {
            // Récupération de l'élément div où l'article sera ajouté
            const contentDiv = document.getElementById("content");

            // Vérification si l'article est déjà visible
            if (articleVisible) {
                // Si l'article est visible, on le supprime
                contentDiv.innerHTML = ""; // On vide le contenu de la div
            } else {
                // Si l'article n'est pas visible, on l'ajoute
                // Création d'un nouvel élément <article>
                const article = document.createElement("article");
                // Ajout du texte à l'article
                article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
                // Ajout de l'article à la div
                contentDiv.appendChild(article);
            }
            // Inversion de l'état de visibilité
            articleVisible = !articleVisible; // Change la valeur de articleVisible
        }

        // Ajout d'un écouteur d'événement sur le bouton pour appeler la fonction showhide
        document.getElementById("button").addEventListener("click", showhide);
    </script>

</body>
</html>
