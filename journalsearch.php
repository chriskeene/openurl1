<?php

require_once 'viewsnippets.php';
require_once 'class.dataset.php';

$dataset = new Dataset();

$titlesearch = $_GET['q'];


$resultlist = array();
$resultlist = $dataset->getMatchingJournals ($titlesearch);
        
rendertopitemslist($resultlist, 'jtitle', 100);      

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
