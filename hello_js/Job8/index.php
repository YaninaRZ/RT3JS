<script>
function nbrPremiers(nbre){
    for (let nombre = 2; nombre * nombre <= nbre; nombre++){
        if (nbre % nombre === 0){
            return false;
        }
    }return true; //tes premier
}

for (let i = 2; i <= 1000; i++){
    if (nbrPremiers(i)){
        console.log(i);
    }
}
</script>
