<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function Fizzbuzz(){
            for (let i = 1; i++ <= 151; i++){
                if (i % 3 === 0 && i % 5 === 0){
                    console.log('Fizzbuzz');
                } else if (i % 3 === 0) {
                    console.log("buzz");
                } else if ( i % 5 === 0){
                    console.log("izz");
                } else {
                    console.log(i)
            } 
        }
    }
        Fizzbuzz();
    </script>
</body>
</html>