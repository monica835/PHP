<?php
//number1
$color=array('white','green','red','blue','black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} scarpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady.
- Richard M. Nixon";
//number2
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens",
   "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
   "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
   "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
     "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $val => $value) {

    echo "The capital of ".$val." is ".$value."<br>"; 
}
//number3
$x = array(1, 2, 3, 4, 5);
print_r($x);
echo "<br>";
unset($x[3]);
$y=array_values($x);
print_r($y);
?>