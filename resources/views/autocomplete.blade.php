<?php
    if(isset($_GET["q"])){
    $q=$_GET["q"];
    if(strlen($q)>2) {
    foreach ($issues as $singleissue) {
        if(stripos($singleissue["name"],$q) !== false)
            echo $singleissue["name"]."</br>";
    }
}
}
?>
