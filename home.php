<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <?php

        // variables declaration
        $name = "Ahmad";
        echo "Hello $name";

        $numberOne = 2;
        $numberTwo = 2;
        $total = $numberOne+$numberTwo;

        // functions
        function addition($a,$b){
            return a + b;
        }

        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            //echo "Sum of the numbers : $sum";
            return $sum;
        }

        // function call
        $addition_result = addFunction(2,2);
        echo "The result is $addition_result<br>";

        // arrays
        $cars=array("Volvo","BMW","Toyota");

        // displaying arrays
        //echo "$cars[0]";

        // displaying arrays using for loop
        for ($i=0;$i<=2;$i++){
            echo "$cars[$i]";
        }

        // displaying arrays using foreach
        forEach($cars as $output){
            echo "$output<br>";
        }

        // associative arrays
        $age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
        echo "Peter is $age[Peter] years old<br>"; 
        echo "Ben is $age[Ben] years old";

?>
</body>
</html>