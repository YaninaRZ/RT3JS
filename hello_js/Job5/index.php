<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Jours de la semaine</h1>
    <table>
        <tr>
            <th>Jour</th>
        </tr>
        <tbody id="jourdelasmn"></tbody>
    </table>
    <script>
        ///////afficher dans la console
         function afficherJours() {
            const Joursdelasemaine = [
                "lundi",
                "mardi",
                "mercredi",
                "jeudi", 
                "vendredi",
                "samedi",
                "dimanche"
            ];

            Joursdelasemaine.forEach(jour => {
                console.log(jour);
            });
        }

        afficherJours(); 

        ///////////////:afficher dans le fichier
        const Joursdelasemaine = [
            "lundi",
            "mardi",
            "mercredi",
            "jeudi", 
            "vendredi",
            "samedi",
            "dimanche"
        ];

        const tbody = document.getElementById('jourdelasmn');

        Joursdelasemaine.forEach(jour => {
            const tr = document.createElement('tr');
            const td = document.createElement('td');
            td.textContent = jour;
            tr.appendChild(td);
            tbody.appendChild(tr);
        });
    </script>
</body>
</html>
