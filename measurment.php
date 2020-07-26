<?php 

echo "<h1>Measurment</h1>";
echo "<hr>";
echo "<h3>CM to Inch :</h3>";

$cm=20;
$sum1=$cm*(1/2.54);
echo "$cm CM = $sum1 Inches.";

echo "<hr>";
echo "<h3>KM to Mile :</h3>";
$km=10;
$sum2=$km*(1/1.609344);
echo "$km Kilometers = $sum2 Miles.";

echo "<hr>";
echo "<h3>Day to Month:</h3>";
$day=4;
$sum3=$day* 0.032855;
echo "$day Day = $sum3 Month.";

echo "<hr>";
echo "<h3>Square Root:</h3>";
$sq=20;
$sum4=sqrt($sq);
echo "Number: $sq = $sum4 Square Root.";

echo "<hr>";
echo "<h3>Maximum Number :</h3>";

$a=50;
$b=6;
$c=1000;

$max=$a;
if ($b>$max) {
    if($b>$c) {
        echo "B is greatest $b";
    }
    else {
        echo "C is greates $c";
    }
}

else {
    if($c>$max) {
        echo "C is greatest $c";
    }
    else {
        echo "A is greatest $a";
    }
}

?>

