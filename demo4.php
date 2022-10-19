<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
    // $fuel = 10;

    // while($fuel >= 1 ){
    //     echo "theres enough fuel<br>";
    //     $fuel--;
    // }

    // $count = 1;
    // do 
    //     echo "$count times 12 is ",  $count * 12 , "<br>";
    // while(++$count <=12);

    // for($count=1; $count<12; $count++){
    //     echo "$count times 12 is ", $count*12 , "<br>";
    // }

    // $colors = array("red", "green", "blue", "yellow");

    // foreach($colors as $value){
    //     echo "$value <br>";
    // }


    // for ($x=0; $x<10; $x++){
    //     if ($x == 4){
    //         break;
           
    //     }

    //     echo "the number is: ",   "$x<br>";
    // }

    // for ($x=0; $x<10; $x++){
    //     if ($x == 4){
    //         continue;
           
    //     }

    //     echo "the number is: ",   "$x<br>";
    // }

    // Application 1
    // Create a PHP program that displays: Hello 0 ... Hello 10
    $hello = 0;
    while($hello <= 10 ){
        echo "Hello $hello <br>" ;
        $hello++;
    }
    
    // Application 2
    // Create a PHP program that displays integers less than 10 but not less than 3
    for($count=0; $count<=10; $count++){
        if($count <10 && $count >=3){
            echo $count;
        }
    }
    

    ?>
</body>
</html>