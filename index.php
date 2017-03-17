<?PHP
include("header.php");

?>


Hallo Gregory, <br>
<br>
Bij deze de informatie die je wilt hebben:<br>
<br>
<br>
<br>



<?php
try {
    $user = new User($DB_con, 1);
    echo $user->getUsername();
} catch(Exception $e){
    echo $e;
}
    echo "hallo";
echo "<br>";

$base_url = "http://services.runescape.com/m=itemdb_oldschool";
$item_url = "/api/catalogue/detail.json?item=";


//for($a=0; $a<30; $a++){

    echo "Curernt recursion number = "."2"."<br>";
    //$item_nr = $a;
    //file_get_contents() is being surpressed while also getting checked for returning false.
    $unparsed_JSON = @file_get_contents($base_url . $item_url . "2");
    if($unparsed_JSON == false){
        echo "het is false";
    } else {
        $item_object = json_decode($unparsed_JSON);
        var_dump($item_object);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $item_object->{'item'}->{'name'};
    }
    sleep(1);
echo "<br><br><br>";
echo "<br><br><br>";

//}
?>