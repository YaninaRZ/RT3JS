<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keylogger</title>
    <style>
        #keylogger {
            width: 300px;
            height: 150px;
        }
    </style>
</head>
<body>

<textarea id="keylogger" placeholder="Tapez ici..."></textarea>

<script>
    // Selectionne le textarea
    const textarea = document.getElementById('keylogger');

    // Fonction pour ajouter les lettres
    function addKey(e) {
        // Vérifie si la touche est entre a et z
        if (e.key.length === 1 && /^[a-z]$/i.test(e.key)) {
            // Si le textarea a le focus
            if (document.activeElement === textarea) {
                // Ajoute la lettre deux fois
                textarea.value += e.key.repeat(2);
            } else {
                // Ajoute la lettre une fois
                textarea.value += e.key;
            }
        }
    }

    // Ajoute un écouteur d'événement pour les frappes du clavier
    document.addEventListener('keypress', addKey);
</script>

</body>
</html>
