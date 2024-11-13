<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur</title>
    <script>
        // Cette variable va garder le compte des clicks
        let compteur = 0;

        // Fonction pour ajouter un au compteur
        function addone() {
            // On incremente le compteur de 1
            compteur += 1;
            // On met à jour le texte dans le paragraphe
            document.getElementById("compteur").innerText = compteur;
        }

        // Cette fonction va ajouter l'evenement click au bouton
        window.onload = function() {
            document.getElementById("button").addEventListener("click", addone);
        };
    </script>
</head>
<body>
    <!-- Bouton qui va recevoir les clicks -->
    <button id="button">Cliquez ici</button>
    <!-- Paragraphe qui va montrer le compteur -->
    <p id="compteur">0</p>
</body>
</html>
