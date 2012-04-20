<?php

/*
 * Show one list of items based on criteria
 * 
 */

require_once 'viewsnippets.php';
require_once 'class.dataset.php';

$dataset = new Dataset();

// what item list are we going to show, title, atitle?
$show = $_GET['show'];
// get the thing we are showing stuff for
$thingy = $_GET['critera'];
$thingytype = $_GET['criteratype'];

$popularlist = array();
$popularlist = $dataset->getMostPopularItems ($show, 101, $thingytype, $thingy);

$listofTypes = array();
$listofTypes = $dataset->getTypeNamesArray();
print_r($listofTypes);
echo "<h2>Most popular $show for $thingytype $thingy</h2>";
echo "<h2>Most popular " . $listofTypes[$show] . " for " . $listofTypes[$thingytype] . " <em>$thingy</em></h2>";

echo "<p>&nbsp</p>";

rendertopitemslist($popularlist, $show, 100);
   
// do some chart stuff here!

?>
