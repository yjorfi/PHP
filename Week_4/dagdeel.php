<?php
$tijd = date("H");
if ($tijd >= 06 && $tijd <12){
    echo "Het is ochtend";
}
elseif ($tijd >= 12 && $tijd <18){
    echo "Het is ochtend";
}
elseif($tijd >= 18 && $tijd <24){
    echo "Het is ochtend";
}
else {echo "Het is nacht";}


$dagtijd = match (true) {
    $tijd >= 6 && $tijd < 12 => "ochtend",
    $tijd >= 12 && $tijd < 18 => "middag",
    $tijd >= 18 && $tijd < 24 => "avond",
    $tijd >= 0 && $tijd < 6 => "avond",};
echo "<br>";
    echo "Het is nu $dagtijd";
?>
