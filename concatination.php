<?php
echo "<strong>First way of concatination</strong><br />";

$x="Your class start at 5 o clock";
$y=" And end at 6 o clock";
$z=" Kindly reached at a time";
echo $x.$y.$z;
?>
<br />
<?php
echo "<strong>Second way of concatination</strong><br />";

$x="Your class start at 5 o clock"."<br />";
$y=$x." And end at 6 o clock <br />";
$z=$y." Kindly reached at a time";
echo $z;
?>
<br />
<?php
echo "<strong>Second way of concatination</strong><br />";

$x="Your class start at 5 o clock"."<br />";
$x.=" And end at 6 o clock <br />";
$x.=" Kindly reached at a time";
echo $x;
?>