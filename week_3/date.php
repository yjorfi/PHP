<?php
date_default_timezone_set ("Europe/Amsterdam");
$today = date ("l j F Y");
echo"Het is vandaag: $today";
echo"<br>";
$daynumber = date ("j");
echo"Vandaag is het de " .$daynumber. "e dag van de maand";
echo"<br>";
$weekday = date ("l");
$weekdaynumber = date ("w");
echo"$weekday is de " .$weekdaynumber. "e dag van de week";
echo"<br>";
$month = date ("F");
$monthday = date ("t");
echo"De maand $month heeft in totaal $monthday dagen";
echo"<br>";
$year = date ("Y");
$leapyear = date ("L");
if ($leapyear == 1) {
    echo "Het jaar $year is wel een schrikkeljaar";
} else {
    echo "Het jaar $year is geen schrikkeljaar";
}
?>