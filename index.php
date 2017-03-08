Hallo Gregory, <br>
<br>
Bij deze de informatie die je wilt hebben:<br>
<br>
<br>
<br>

<?php
$base_url = "http://services.runescape.com/m=itemdb_oldschool";
$item_url = "/api/catalogue/detail.json?item=2";


$unparsed_JSON = file_get_contents($base_url . $item_url);
$JSON =  json_decode($unparsed_JSON);

echo "<br>";
var_dump($JSON);
?>