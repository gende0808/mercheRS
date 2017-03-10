Hallo Gregory, <br>
<br>
Bij deze de informatie die je wilt hebben:<br>
<br>
<br>
<br>

<?php
$base_url = "http://services.runescape.com/m=itemdb_oldschool";
$item_url = "/api/catalogue/detail.json?item=";


for($a=0; $a<150; $a++){

    echo "Curernt recursion number = ".$a."<br>";
    $item_nr = $a;
    //file_get_contents() is being surpressed while also getting checked for returning false.
    $unparsed_JSON = @file_get_contents($base_url . $item_url . $a);
    if($unparsed_JSON == false){
        echo "het is false";
    } else {
        $JSON = json_decode($unparsed_JSON);
        var_dump($JSON);
    }
    sleep(2);
echo "<br><br><br>";
echo "<br><br><br>";

}
?>