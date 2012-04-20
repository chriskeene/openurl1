<?php
require_once 'restrict.php';
//establish database connection
connectdb();

/**
 * dataset Class
 * Pretty pathetic as Objects go. more a set of functions.
 * All database requests are handled here. 
 * Often returning an array, which something else can decide how to present
 *
 * @author chriskeene
 */
class Dataset {
    

    
    
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
        $filter = mysql_real_escape_string ($filter);
        
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
        echo "\n<!-- $sql1 --> \n";
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
    
     
     
     
    /*
     * getMatchingJournals
     * titlesearch = search string, either title keyword or isn 
     * searchtype : either Title or ISN
     */
    public function getMatchingJournals ($titlesearch, $searchtype="Title") {
        $titlesearch = mysql_real_escape_string ($titlesearch);
        if ($searchtype == "Title") {
            $wherestring = "
                WHERE jtitle LIKE '%$titlesearch%'
                OR title LIKE '%$titlesearch%' ";
        }
        else {
            $wherestring = "
                WHERE issn = '$searchtype'
                OR isbn = '$searchtype' ";
        }
        $sql1 = "SELECT jtitle, title, COUNT(*) AS Total
            FROM " . DATATABLE . " " .
            $wherestring . "
            GROUP BY jtitle
            ORDER BY Total DESC
            LIMIT 0, 500";
        //echo "\n<p> $sql1 </p>\n";
         $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());

         $matchingjournals = array();
         while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
             if ($line["jtitle"]) {
                $jtitle = $line["jtitle"];
             }
             else {
                 $title = $line["title"];
             }
             $total = $line["Total"];
             $matchingjournals[$jtitle] = $total;
         }
         return $matchingjournals;
        
    }
     
     
    public function getTypeNamesArray() {
         $listOfLists = array (
			"title" => "Journal title",
			"atitle" => "Article",
			"sid" => "Link resolver source",
			"routerRedirectIdentifier" => "Router Redirect Identifier",
			"institutionResolverID" => "Institution Resolver ID",
		);
		return $listOfLists;
    }
     
    
}


?>
