<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * do search box
 * 
 * do some basic stats
 * 
 */


// Show a search box for journal name
require_once 'viewsnippets.php';
renderjournalsearchbox();


// show most popular journals
require_once 'class.dataset.php';
$dataset = new Dataset();
$popJournalsList = array();
$popJournalsList = $dataset->getPopularJournals();
rendertopjournallist($popJournalsList);

?>
