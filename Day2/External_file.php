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
        // include ("External_file.php");
//*****************************/
        function getsum($number,$numbers){
            $total=$number+$numbers;
           echo "The sum of $number and $numbers is $total."."<br>";
        }
//****************************/
        function display_data($num){ 
            foreach ($num as $value) {
               print_r($value);
            }    
        }
//****************************/  
$arrays= array(
    "Food " => array(
        0 => "Go",
        1 => "Grow",
        2 => "Glow",

    ),
    "Section" => array(
        "sectionA" => ["a","b","c","d","e"],
        "sectionB" => ["as","gh","ty","df","dfd"],
      ),
    "Ph_president" => array(
        0 => "Ferdinand Marcos",
        1 => "Rodrigo Roa Duterte",
        2 => "Ramon Magsaysay",
      ),
    
    );
    function displaymultidimensional(){
        global $arrays;
        foreach ($arrays as $key => $value) {
            echo $key."<br>";
            foreach ($value as $val ) {
               if($val==$arrays["Section"]["sectionA"]){
                   echo "<li>Section A:";
                   foreach ($arrays["Section"]["sectionA"] as $i) {
                       echo "<li>".$i."<br>";
                   }
                   echo "<br>";
               }elseif ($val==$arrays["Section"]["sectionB"])  {
                echo "<li>Section B:";
                   foreach ($arrays["Section"]["sectionB"] as $i) {
                      echo "<li>".$i."<br>";
                   }
                   echo "<br>";
               }else {
                   echo "<li>" .$val."<br>";
               }
            }
        }
    }
//***********************/
function createassociativearray($key,$value){
    $person=array();
    $person= array($key=>$value);
    print_r($person);
 }
    
//**************************/
$name=["mon","cya","dfa","fdaf"];
function adddatatoarray($val){  
    global $name;
    array_push($name,$val);
    echo "<br>Sucessfully added to array!!!!!!!";
}

//**************************/
function displayData5(){
    global $name;
    print_r($name);
}

    // echo "Exercise number6:"."<br>";
    // echo dispayData5()


    ?>
</body>
</html>