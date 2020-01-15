<?php
echo "<h1>Number1</h1>";
    class secret{
        public $name = "Monica ";
        private $message = "Sorry ";
        public function PublicMessage(){
           
            echo $this->name."this is a public.<br>";
            
        }
        private function PrivateMessage(){
            
            echo $this->message."this is Private.";
        }
    function test(){
        $this->PublicMessage();
        $this->PrivateMessage();
    
    }
}
$classA=new secret(); 
$classA->test();
echo "<hr>";
echo "<h1>Number2</h1>";
//2
    session_start();
    $browser=['Firefox','Chrome','Internet Explorer','Safari','Opera'];
    $_SESSION['browser']=$browser;
    $_SESSION['name']="Monica";
    $_SESSION['email']="monica@gmail.com";
    echo "NAME:".$_SESSION['name']."<br>"."EMAIL:".$_SESSION['email']."<br>"."BROWSER:".$_SESSION['browser'][2];
    
    
echo "<hr>";
echo "<h1>Number3</h1>";
    //3
    $marks1 = array(360,310,310,330,313,375,456,111,256);
    $marks2 = array(350,340,356,330,321);
    $marks3 = array(630,340,570,635,434,255,298);
    function findminandmax(){
        global $marks1,$marks2,$marks3;
        $result=array_merge($marks1,$marks2,$marks3);
        echo "Minimum marks: ".min($result)."<br>";
        echo "Maximun marks: " .max($result);

    }
    findminandmax();
?>