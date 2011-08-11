<?php

/*
 * show lots of stuff for a thing, whatever that thing might be 
 * and open the template in the editor.
 */

require_once 'viewsnippets.php';
require_once 'class.dataset.php';
$dataset = new Dataset();

$thingy = $_GET['item'];
$thingytype = $_GET['itemtype'];

$listOfLists = array (
    "title" => "Journal titles",
    "sid" => "source",
    "routerRedirectIdentifier" => "routerRedirectIdentifier",
    "institutionResolverID" => "institutionResolverID",
    "atitle" => "article"
);

foreach ($listOfLists as $item => $description) {
    echo "<h3>$description</h3>";
    $popularlist = array();
    $popularlist = $dataset->getMostPopularItems ($item, 10, $thingytype, $thingy);
    //print_r($popularlist);
    echo "<p>";
    rendertopjournallist($popularlist, 15);
}

echo "<p>2</p>";




?>
