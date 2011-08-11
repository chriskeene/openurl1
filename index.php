<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

define("APP_NAME",     'OpenURL.ac.uk Stat explorer');
define("BYLINE",     'under development...');



include 'header-temp.php';

$task = $_GET["task"];
echo $task;

switch ($task) {
    case "home":
        include 'home.php';
        break;
    case "publisherdetails":
        include 'publisherdetails.php';
        break;
    default:
        echo "default";
        //include "welcometext.php";
        include "searchform.php";
}
//include 'initalise.php';

include 'footer-temp.php';

?>
