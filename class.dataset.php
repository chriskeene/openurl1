<?php
require_once 'restrict.php';
connectdb();

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datasetPHPClass
 *
 * @author chriskeene
 */
class Dataset {
    //put your code here
    
    public $test;
    
    
    public function getPopularJournals($maxnumber=10) {
         $sql1 = "SELECT title, COUNT(*) AS Total
            FROM " . DATATABLE . "
            GROUP BY title
            ORDER BY  Total DESC
            LIMIT 0, $maxnumber";
         $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());

         $poularjournals = array();
         while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
             $title = $line["title"];
             $total = $line["Total"];
             $popularjournals[$title] = $total;
         }
         return $popularjournals;
        
    }
}

?>
