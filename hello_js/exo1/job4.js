function bisextile(année) {
    if (année % 4 === 0){
        if (année % 100 === 0){
            if (année % 400 === 0){
                return true; //bisextile
            } else {
                return false;
            }
        } else {
            return true;
        }
    } else {
        return false;
    }
}

console.log(bisextile(2020)); 
console.log(bisextile(1990)); 
console.log(bisextile(1789));