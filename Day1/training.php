<?php
//echo "I'm Php";

//determine datatypes
//echo gettype(1.0);

//objects
// class greeting{
//  public $str="monica";
//  public $str2="dinglasa";

// //methods
// function show_greeting($name){
//     //return $this->str; 
//     $test = "I am ".$name;
//     return $test;
// }
// function show_greeting2(){
//     return $this->str2;
// }
// }
// $message = new greeting;
// var_dump($message ->show_greeting('pj'));  

//constants
// define("test","ambot lng onsa ni");
// $test="ikaw";
// $test="ako";
// echo "hahahha ".$test; 

//strings
// var_dump('ako ra');
// echo "<br>ako ra";
// $name="monica ";
// echo $name."is a friend of unnies ahhaha";

//conditions
//if-else
// $var=10;
// if($var <=9){
//     echo 'i am less than 9';
// }else{
//     echo ' i am not';
// }
// echo $var <=10? 'yes' : 'no';
//switch case
// $month = "february";
// switch ($month) {
//     case 'january':
//         echo  "this month is january";
//         break;
//     case 'february':
//         echo  "this month is february";
//         break;
//     case 'march':
//         echo  "this month is march";
//         break;
//     default:
//        echo ' this month does not exist';
//         break;
// }

//arrays 
//numeric,associative,multidimensional
//numeric
// $var[0]='value';
// $var= array(0 => 'value');
// $var=[0 =>'value'];
// var_dump($var);
// $name[0]="monica dinglasa";
// $name[1]="pj lusartes";
// $name[2]="mary ann camay";
// $name[3]="mary jane paller";
// $name[4]="mervin culminas";
// $name[3]="precious tamparong";
// print_r($name);//or var_dump
// echo "<br>";
// $names=array(
//     0 => 'mo',
//     1 => 'pj',
//     2 => 'me',
//     3 => 'da',
//     4 => 'df',
// );
// array_push($names,'dfsasadsafa');
// array_slice($names,1);
// unset($names[0]);
// print_r($names);

//associative
// $person = array('ako' => "guapo","me" => "guqpa","cya" => "don't know");
// print_r($person['ako']);
// $film = array(
//     "comedy " => array(
//         0 => "Pink Panther",
//         1 => "JOhn English",
//         2 => " saee noe efeu8rp",

//     ),
//     "action" => array(
//         "test" => "Die HArd",
//         1 => "Expendables",
//       ),
    
//     );
// print_r($film ['action'][1]);
// print_r($film ['action']['test']);

// $name[0]="monica dinglasa";
// $name[1]="pj lusartes";
// $name[2]="mary ann camay";
// $name[3]="mary jane paller";
// $name[4]="mervin culminas";
// $name[5]="precious tamparong";
// for($x=0; $x < count($name);$x++){
//     echo $name[$x]."<br>";
// }
// foreach ($name as $names){
//     echo $names."<br>";
// }
// $x=0;
// while($x < count($name)){
//     echo $name[$x] . "<br>";
//     $x++;
// }
// $x=0;
// do{
//     echo $name[$x] . "<br>";
//     $x++;
// }while($x < count($name));


class Student {
    // constructor should be public
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // for external use
    public function say_name() {
        echo "My name is " . $this->full_name() . "\n";
    }

    // for internal use
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$alex = new Student("Alex", "Jones");

$alex->say_name();
?>
