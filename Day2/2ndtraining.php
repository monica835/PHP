<?php
// $denominator=0;
// if($denominator !=0){
//     echo 2/$denominator;
// }else{
//     echo "cannot";
// }

// function my_error_handler($error_no,$error_msg){
//     echo "Opppss....Something went wrong.";
//     echo "<br> Error number:[$error_no]";
//     echo "<br>Error message:[$error_msg]";  
// }
// set_error_handler("my_error_handler");
// echo 5/0;

function checkNum($num){
    if($num>1){
        throw new Exception ("value must be 1");
    }
    return true;
}
//try catch
try{
    checkNum(1);
    echo 'number must bedfasdfafdsa 1';
}catch(Exception $e){
    echo 'message:'.$e->getMessage();
}
?>