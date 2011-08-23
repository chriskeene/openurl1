<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

define("APP_NAME",     'OpenURL.ac.uk Stat explorer');
define("BYLINE",     'under development...');

define("DATATABLE", 'activity');



include 'header-temp.php';

$task = $_GET["task"];

switch ($task) {
    case "itemdetails":
        include 'itemdetails.php';
        break;
    case "onelist":
        include 'onelist.php';
        break;
    case "journalsearch";
        include 'journalsearch.php';
        break;
    default:
        echo "default";
        include "home.php";
}

echo "<p>&nbsp</p><p>$task</p>\n";

include 'footer-temp.php';

?>
