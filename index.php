<?PHP
include("header.php");
set_time_limit(10000);
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


$base_url = "http://services.runescape.com/m=itemdb_oldschool";
$item_url = "/api/catalogue/detail.json?item=";


//$item = new Item($DB_con);
//
//$item->setItemname('een item');
//$item->setDescription('het is een item');
//$item->setItemprice(12345);
//$item->setRsid(11);
//$item->create();
for($a=0; $a<30; $a++){

    //file_get_contents() is being surpressed while also getting checked for returning false.
    $unparsed_JSON = @file_get_contents($base_url . $item_url . $a);
    if($unparsed_JSON !== false){
        $item_object = json_decode($unparsed_JSON);
        $item = new Item($DB_con);
        $item->setRsid($item_object->{'item'}->{'id'});
        $item->setItemprice($item_object->{'item'}->{'current'}->{'price'});
        $item->setDescription($item_object->{'item'}->{'description'});
        $item->setItemname($item_object->{'item'}->{'name'});
        $item->create();
    }
}

echo 'loop is done';

?>