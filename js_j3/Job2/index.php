<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
        .puzzle-img {
            width: 100px; 
            margin: 5px;
            cursor: move; 
        }
    </style>
</head>
<body>
    <div class="container" id="r-container">
        <img src="images/arc1.png" class="puzzle-img" alt="">
        <img src="images/arc2.png" class="puzzle-img" alt="">
        <img src="images/arc3.png" class="puzzle-img" alt="">
        <img src="images/arc4.png" class="puzzle-img" alt="">
        <img src="images/arc5.png" class="puzzle-img" alt="">
        <img src="images/arc6.png" class="puzzle-img" alt="">
    </div>

    <button id="shuffle">Mélanger</button>
    <button id="check">Vérifier</button>

    <script>
        $(document).ready(function() {
            const $images = $('.puzzle-img');
            const $container = $('#r-container');

            // Fonction pour mélanger les images
            $('#shuffle').click(function() {
                const imgArray = $images.toArray().sort(() => Math.random() - 0.5);
                $container.empty().append(imgArray);
            });

            // Fonction pour vérifier l'ordre
            $('#check').click(function() {
                const originalOrder = $images.map((_, img) => $(img).attr('src')).get();
                const currentOrder = $container.children('.puzzle-img').map((_, img) => $(img).attr('src')).get();

                if (JSON.stringify(originalOrder) === JSON.stringify(currentOrder)) {
                    alert('L\'ordre est correct !');
                } else {
                    alert('L\'ordre est incorrect.');
                }
            });

            // Fonctionnalité de glisser-déposer
            $images.draggable({
                revert: "invalid",
                start: function(event, ui) {
                    $(this).css("opacity", "0.5");
                },
                stop: function(event, ui) {
                    $(this).css("opacity", "1");
                }
            });

            $container.droppable({
                accept: '.puzzle-img',
                drop: function(event, ui) {
                    const dragged = ui.draggable;
                    const droppedOn = $(event.target).find('.puzzle-img');

                    if (droppedOn.length) {
                        const index = droppedOn.index(dragged);
                        if (index !== -1) {
                            dragged.insertBefore(droppedOn.eq(index));
                        } else {
                            dragged.appendTo($container);
                        }
                    }
                }
            });
        });
    </script>
    <h1>tu ny arriveras jamais</h1>
</body>
</html>

