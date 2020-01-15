<?php
include ("External_file.php");
echo "<hr>";
echo "Number 1:"."<br>";
getsum(23,34);
echo "<hr>";
echo "Number 2:"."<br>";
display_data([2," ",4," ",6," ",8," ",9]);
echo "<hr>";
echo "Number 3:"."<br>";
displaymultidimensional();
echo "<hr>";
echo "Number 4:"."<br>";
$person=array();
$person = createassociativearray("Monica",2000);
$person = createassociativearray("Jane",1998);
$person = createassociativearray("JaMEMEe",1998);
print_r($person)."<br>";
echo "<hr>";
echo "Number 5:"."<br>";
adddatatoarray("FDsafa");
adddatatoarray("dfafdsa");
echo "<hr>";
echo "Number 6:"."<br>";
displayData5(); 
?>