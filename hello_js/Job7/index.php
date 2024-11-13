<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script> 
        // Fonction qui affiche les jours fériés de 2020
        function afficheJF(date) {
            const joursFeries = [
                new Date("2020-12-31"),
                new Date("2020-05-21"),
                new Date("2020-05-01")
            ];

            // Créer la date 
            const jour = date.getDate();
            const mois = date.getMonth() + 1; // Les mois commencent à 0, donc on ajoute 1
            const annee = date.getFullYear(); // Utiliser date pour l'année
            
            // Vérifier si c'est un week-end
            const jourSemaine = date.getDay(); // 0=dimanche, 1=lundi, ..., 6=samedi
            if (jourSemaine === 0 || jourSemaine === 6) {
                console.log(`Non, ${jour}, ${mois}, ${annee} est un week-end`);
                return;
            }

            // Vérifier si c'est un jour férié
            for (let i = 0; i < joursFeries.length; i++) {
                if (date.getTime() === joursFeries[i].getTime()) {
                    console.log(`Le ${jour}, ${mois}, ${annee} est un jour férié`);
                    return;
                }
            }

            // Si ce n'est pas un jour férié, alors c'est un jour travaillé
            console.log(`Oui, ${jour}, ${mois}, ${annee} est un jour travaillé`);
        }

        // Exemple d'utilisation
        afficheJF(new Date('2020-12-31'));
        afficheJF(new Date('2020-05-01'));
        afficheJF(new Date('2020-10-18')); // Jour travaillé
        afficheJF(new Date('3456-12-12'));
    </script>
</body>
</html>
