<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $varOne = 15;
        $varTwo = 10;

        if($varOne > $varTwo){
           $result =  ( $varOne * 2 ) + $varTwo;
        } else{
            $result = ($varTwo * 2) + $varOne;
            
        }
        echo "het resultaat is: ".$result;
    ?>

    <br> <br> <br>

    <?php
        $price = 155;
        
        if($price > 150){
            $newPrice = $price * 1.19;

        }elseif($price < 55){
            $newPrice = $price * 1.11;
        } else{
            $newPrice = $price * 1.16;
        }
        echo "Originele prijs is: " .$price " De nieuwe prijs is: " .$newPrice;
    ?>
    
</body>
</html>