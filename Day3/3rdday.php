<?php
//public function
// class test{
//     public function writemessage(){
//         echo "hi goodmorning.";
//     }

// }
// writemessage();
//passbyrefernce
// function addfive(&$num){
//     $num +=5;
// }
// $orignum=10;
// addfive($orignum);
// echo $orignum;

//dynamic function call
// function sayhello($name){
//     echo "hello ".$name."<br>";
// }
// $function_holder="sayhello";
// $function_holder("monica");

//sessions=stored in the server
// session_destroy();
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter']+=1;
}else{
    $_SESSION['counter']=1;
}
if(isset($_SESSION['tens'])){
    $_SESSION['tens']+=1;
}else{
    $_SESSION['tens']=1;
}
$msf="hfdsjahfdsajkfldsja".$_SESSION['counter'];
$msf.="in ths page";
echo $msf."<br>";
echo $_SESSION['tens']."<br>";

unset($_SESSION['tens']);
//reset is destroy, a bot is stop, destroy is to stop all

//cookies =client
//cookie can be turned off to the browser.
// setcookie("username","wla",1);
// if(!isset($_COOKIE["username"])){
//         setcookie("username","Gwa po ko",time()+30*24);
//         // echo $_COOKIE["username"];
// }else{
//        setcookie("username","d ko gwapo",time()+30*24);
//     // echo $_COOKIE["username"];
//     // echo "else";
// }
// echo $_COOKIE["username"];

//classess
 class PNTraining{
     public function __construct(){
         echo 'The class"'.__CLASS__.'"was initiated"';
     }
     public function test(){
         echo "<br> I am a test..";
     }
     public function __destruct(){
         echo '<br>The class"'.__CLASS__.'"was destroyed"';
     }
 }
 $obj= new PNTraining();
 echo $obj->test();
?>