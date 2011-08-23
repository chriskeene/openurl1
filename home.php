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
echo "<h3>Search for a journal name</h3>";
renderjournalsearchbox();

echo "<h3>or select one of the most popular in the openurl.ac.uk dataset</h3>";
// show most popular journals
$dataset = new Dataset();
$popJournalsList = array();
//$popJournalsList = $dataset->getPopularJournals(20);
$popJournalsList = $dataset->getMostPopularItems ('title', 10, 'none', 'none');
//rendertopjournallist($popJournalsList, 15);
rendertopitemslist($popJournalsList, 'title', 15);
renderShowMore('title', 'none', 'none');

?>
