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
echo $task;

switch ($task) {
    case "journaldetails":
        include 'journaldetails.php';
        break;
    case "publisherdetails":
        include 'publisherdetails.php';
        break;
    default:
        echo "default";
        //include "welcometext.php";
        include "home.php";
}

include 'footer-temp.php';

?>
