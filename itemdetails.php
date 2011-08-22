<?php

/*
 * show lots of stuff for a thing, whatever that thing might be 
 * and open the template in the editor.
 */

require_once 'viewsnippets.php';
require_once 'class.dataset.php';
$dataset = new Dataset();

// get the thing we are showing stuff for
$thingy = $_GET['item'];
$thingytype = $_GET['itemtype'];

// list of the different top ten lists we can show
$listOfLists = array (
    "title" => "Journal title",
    "atitle" => "Article",
    "sid" => "Link resolver source",
    "routerRedirectIdentifier" => "Router Redirect Identifier",
    "institutionResolverID" => "Institution Resolver ID",
    
);

echo "<h2>Statistics for $thingtype <em>$thingy</em></h2>";

// do each list... by 'do' i mean print it out, obviously.
foreach ($listOfLists as $item => $description) {
    // First, don't show top ten for the kind of thing we are 
    // showing stuff for (e.g. most popular jtitles for Nature)
    if ($item == $thingytype) { continue; }
    // And don't show popular journal titles for an article as there will only
    // be one
    if ($item == $title && $thingytype == 'atitle') { continue; }
    // bad chris intermingles html view with logic.
    echo "<h3>$description</h3>";
    $popularlist = array();
    $popularlist = $dataset->getMostPopularItems ($item, 10, $thingytype, $thingy);
    //print_r($popularlist);
    echo "<p>";
    rendertopitemslist($popularlist, $item, 15);
    renderShowMore($item, $thingy, $thingytype);
}




?>
