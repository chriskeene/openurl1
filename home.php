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

require_once 'viewsnippets.php';
require_once 'class.dataset.php';

// Show a search box for journal name
renderjournalsearchbox();


// show most popular journals
$dataset = new Dataset();
$popJournalsList = array();
//$popJournalsList = $dataset->getPopularJournals(20);
$popJournalsList = $dataset->getMostPopularItems ('title', 10, 'none', 'none');
//rendertopjournallist($popJournalsList, 15);
rendertopitemslist($popJournalsList, 'title', 15);
renderShowMore('title', 'none', 'none');

?>
