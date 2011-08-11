<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'viewsnippets.php';

require_once 'class.dataset.php';
$dataset = new Dataset();
$popularlist = array();
$popularlist = $dataset->getMostPopularItems ("title", 10, "none", "none");
print_r($popularlist);
rendertopjournallist($popularlist, 8);


?>
