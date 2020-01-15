
<?php
//number1
// for($x=1;$x<=15;$x++){
//     echo $x ."<br>";
// }
//do-while
// $x=1;
// do{
// echo $x;
// echo "<br>";
// $x++;
// }while($x<=15)


//number2
// $by2=[];
// $by3=[];
// $by5=[];
//  for($x=1; $x <=15; $x++ ){
//      if($x%2==0){
//          array_push($by2,$x);
//      }
//      else if($x%3==0){
//          array_push($by3,$x);
//      }
//      else if($x%5==0){
//          array_push($by5,$x);
//      }
//  };
//  print_r($by2);
//  echo "<br>";
//  print_r($by3);
//  echo "<br>";
//  print_r($by5);
//  echo "<br>";

//function
// function isdivisible($count){
//     echo "Divisivle by $count <br>";
//     for($x=1;$x<=15;$x++){
//         if($x%$count ==0){
//             echo $x."<br>";
//         }
//     }  
// }
// isdivisible(2);
// isdivisible(3);
// isdivisible(5);

//number3

// for($x=1;$x<=7;$x++ ){
//    for($i=1;$i<=$x;$i++){
//     echo "*";
//    }
//    echo "<br>";
// }
// for($x=0;$x<=7;$x++){
//     echo str_repeat("*",$x);
//     echo "<br>";
// }
//concatenation
// $as="*";
// for($x=1;$x<=7;$x++){
//     echo $as."<br>";
//     $as.="*";
// }
$example = "Hello";
$part2 = ", World";
$example .= $part2;
$part3 = "!";
$example .= $part3;
echo $example;
?>