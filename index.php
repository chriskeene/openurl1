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
echo "<p>$task</p>\n";

switch ($task) {
    case "itemdetails":
        include 'itemdetails.php';
        break;
    case "onelist":
        include 'onelist.php';
        break;
    default:
        echo "default";
        //include "welcometext.php";
        include "home.php";
}

include 'footer-temp.php';

?>
