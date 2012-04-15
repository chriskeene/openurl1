<?php

require_once 'viewsnippets.php';
require_once 'class.dataset.php';

$dataset = new Dataset();

$search = $_GET['q'];
$searchtype = $_GET['type'];

$resultlist = array();


$resultlist = $dataset->getMatchingJournals ($search, $searchtype);

echo "<h3>Search results for $titlesearch</h3>";
        
rendertopitemslist($resultlist, 'title', 100);      

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
