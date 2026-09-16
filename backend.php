<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .contener {
            max-width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #e8d6d6;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #373232;
        }

        p {
            color: #282626;
        }
    </style>
</head>

<body>
    <div class="contener">
        <h1>PHP TUTORIAL</h1>
        <p>This is a simple PHP tutorial.</p>
        <?php
            echo "HI this is php";
            echo "<br>";
            echo "<br>";
            echo "HI this live reloaded";
            echo "<br>";
            echo "<br>";
            echo "HI this again live reloaded";
            echo "<br>";
            echo "<br>";
            $ary = array("shery", "shery1", "shery2","sfisn","hsdfhifh","jfjfjf");
            echo $ary[5];
            echo "<br>";
            echo count($ary);
            echo "<br>";
            echo "<br>";
            $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a <= 10){
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
    echo "<br>";
    echo "//this is while loop....,,";
    //for loop
    for ($a = 0; $a <= 10; $a++){
        echo "<br>The value of a is: ";
        echo $a;
    }
    echo "<br>";
    $a = 0;
    while ($a < count($ary)){
        echo "<br>The value of a is: ";
        echo $ary[$a];
        $a++;
    }
    function print_number($number){
        echo "<br>the number is: ";
        echo $number; 
    }
    print_number(200); 
    print_number(400);
    print_number(600);
    print_number(800); 
        ?>
    </div>
</body>

</html>