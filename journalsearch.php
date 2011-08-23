<?php

require_once 'viewsnippets.php';
require_once 'class.dataset.php';

$dataset = new Dataset();

$titlesearch = $_GET['q'];


$resultlist = array();
$resultlist = $dataset->getMatchingJournals ($titlesearch);

echo "<h3>Search results for $titlesearch</h3>";
        
rendertopitemslist($resultlist, 'title', 100);      

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
