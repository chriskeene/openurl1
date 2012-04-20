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

$dataset = new Dataset();

// Show a search box for journal name
echo "<h3>Search for a journal name</h3>";
renderjournalsearchbox();

echo "<div>";
echo "<h3>or select one of the most popular in the openurl.ac.uk dataset</h3>";
// show most popular journals
$popJournalsList = array();
//$popJournalsList = $dataset->getPopularJournals(20);
$popJournalsList = $dataset->getMostPopularItems ('title', 20, 'none', 'none');
//rendertopjournallist($popJournalsList, 15);
rendertopitemslist($popJournalsList, 'title', 20);
renderShowMore('title', 'none', 'none');
echo "</div>";


echo '<div class="listbox1">':
echo '<h3>Popular Sources</h3>';
$popSourcesList = array();
$popSourcesList = $dataset->getMostPopularItems ('sid', 20, 'none', 'none');
rendertopitemslist($popJournalsList, 'sid', 20);
renderShowMore('sid', 'none', 'none');
echo '</div>';

?>
