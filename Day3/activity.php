<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
//number1
// function factorial($num){
//     $fact=1;
//     for($x=1;$x<=$num;$x++){
//         $fact=$fact*$x;
//     }
//     return $fact;
// }
// $num=10;
// $factorial = factorial($num); 
// echo "Factorial = $factorial"; 
// recursivefunction
echo "Number1:<br>";

function recursivefactorial($number){
    if($number==1){
        return 1;
    }
    return $number * recursivefactorial($number-1);
}
$number = 10; 
$fact = recursivefactorial($number); 
echo "Factorial of $number is = $fact"; 
?>

<table height="100px" weight="270px" border="2px">
    <?php
    echo "<hr>";
    echo "Number 2:<br>";
    //2
         for($x=1;$x<=8;$x++) {
            echo "<tr>";
            for($i=1;$i<=8;$i++){
                $total=$x+$i;
                if($total%2==0){
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }else{
                 echo "<td height=30px width=30px bgcolor=#000560></td>";
                 }
            }
             echo "</tr>";
       }
    ?>
</table>
<?php

//number3
echo "<hr>";
echo "Number3:<br>";
$months=["January","February","March","April",
"May","June","July","August","September","October",
"November","December"];
function remove($value){
    global $months;
    for($x=1;$x<count($months);$x++){
        if($value==$months[$x]){
            unset($months[$x]);
        }
    }
}
remove ("February");
echo "<pre>";
print_r($months);
echo "<pre>";
echo "<hr>";
echo "Number4:<br>";
//4
$a=1000;
$b=1200;
$name1="Monica";
$name2="Dinglasa";

echo "<table border=1 cellspacing=0 cellpading=0>
<tr><b><td>NAME</td> <td>Salary</font></td></b></tr> 
<tr> <td>$name1</td> <td>$a$</td></tr> 
<tr> <td>$name2</td> <td>$b$</td></tr>
</table>";
//5
echo "<hr>";
echo "Number 5:<br>";
function printvariable(){
    $var = "A00";
    for($x=1;$x<=5;$x++){
        echo ++$var."\n";
    }
}
echo printvariable();

//number6
echo "<hr>";
echo "Number 6:<br>";
function lastmodified($file){
$currentfile = basename($_SERVER['PHP_SELF']);
$filemodified = filemtime($currentfile); 
echo "Filename: $file <br>";
echo "Last modified " . date("l, dS F, Y, h:ia", $filemodified)."\n";
}
lastmodified("activity.php");
//number7
echo "<hr>";
echo "Number 7:<br>";
function changecolor($text){
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    echo $text;
}
changecolor("That man is so handsome.")
?>


</body>
</html>