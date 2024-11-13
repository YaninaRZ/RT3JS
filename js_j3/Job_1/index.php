<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J1</title>
    <style>
        #text{
            display: none;
        }
    </style>
</head>
<body>
    <button id="Affbtn">Afficher le text</button>
    <button id="Hdbtn">Cacher le texte</button>

    <div id="texte">
    Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,
    ensuite on prie.
    </div>

    <script>
        const Affbtn  = document.getElementById('Affbtn');
        const Hdbtn = document.getElementById('Hdbtn');
        const texte = document.getElementById('texte');

        Affbtn.addEventListener('click', function(){
            texte.style.display = 'block'; //montre le texte
        });

        Hdbtn.addEventListener('click', function(){
            texte.style.display = 'none';//cache le texte
        });
    </script>
</body>
</html>