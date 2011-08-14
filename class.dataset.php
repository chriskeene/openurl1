<?php
require_once 'restrict.php';
//establish database connection
connectdb();

/**
 * Description of datasetPHPClass
 *
 * @author chriskeene
 */
class Dataset {
    
    
    /*
     * getPopularJournals
     * maxnumber, how many to return
     * do we want to look at the whole set, of based on a specifc criteria,
     * e.g. most popular journals where the original source was web of science. 
     * filterfield (source, date)  
     * filter - (wok etc)
     */
    public function XXXgetPopularJournals($maxnumber=10, $filterfield="none", $filter="none") {
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
    
    /*
     * getJournalDetails
     * keyword : a journal title or issn 
     * field : either the word 'title' or 'issn'
     */
    public function XXXgetJournalDetails ($keyword, $field="journal") {
        $sql1 = "SELECT title, issn, jtitle, COUNT(*) AS Total
            FROM " . DATATABLE . "
            WHERE $field = '$keyword'    
            GROUP BY title";
        $line = mysql_fetch_array($result1, MYSQL_ASSOC);
        $return = array();
        $return['title'] = $line["title"];
        $return['jtitle'] = $line["jtitle"];
        $return['issn'] = $line["issn"];
        return $return;         
    }

    
    
    /*
     * getMostPopularItems
     * items : what do we want a list of. i.e. which column name  
     * maxnumber : how many to return
     * filterfield : do we want to restrict this list to the most poular based
     *   on a specific criteria, e.g. a certain journal, date, source.
     *   this specifies the field, using the column names, e.g. title, date
     *   'none' is a special case which will use the whole dataset
     * filter : coupled with the previous parameter, which word should the field contain, 
     *   e.g. Nature, wok:isi
     */
    public function getMostPopularItems ($items="title", $maxnumber=10, $filterfield="none", $filter="none") {
        $items = mysql_real_escape_string ($items);
        $filterfield = mysql_real_escape_string ($filterfield);
        $filter = mysql_real_escape_string (filter);
        
        // if we just want the popular list based on whole dataset then don't set WHERE clause
        if ($filterfield == "none") {
            $wherecriteria = "";
        }
        else {
            $wherecriteria = "WHERE $filterfield = '$filter' ";
        }
        
        $sql1 = "SELECT $items, COUNT(*) AS Total
            FROM " . DATATABLE . " " .
            $wherecriteria . "    
            GROUP BY $items
            ORDER BY  Total DESC
            LIMIT 0, $maxnumber";
        //echo "\n<p> $sql1 </p>\n";
        //run the query
        $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());

        $poularitems = array();
        while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
             $item = $line[$items];
             $total = $line["Total"];
             $popularitems[$item] = $total;
        }
        return $popularitems;
    }
    
    
}


?>
