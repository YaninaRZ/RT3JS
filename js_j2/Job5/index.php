<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page avec Footer</title>
</head>
<body>


        <h1>Regardez ce beau degrade</h1>
        <p>Faites défiler pour voir le footer changer de couleur ! Wow</p>


    <footer id="footer"></footer>

    <script>
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercentage = scrollPosition / docHeight;

            // Change la couleur du footer en fonction du pourcentage de scrolling
            const colorValue = Math.floor(scrollPercentage * 255);
            const footer = document.getElementById('footer');
            footer.style.backgroundColor = `rgb(${colorValue}, 205, 0)`; // Du vert au rouge
        });
    </script>
</body>
</html>
