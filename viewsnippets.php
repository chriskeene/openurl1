<?php

/*
 * Renders various views. Probably not in a good way
 * 
 */


// html search box for journal search
function renderjournalsearchbox() {
    ?> 
          <div class="searchform">
            <form method="GET" action="?" name="searchForm" id="searchForm" class="search">
              <input type="text" name="q" size="30" value="">
              <select name="type">
                      <option value="Title">Title</option>
                      <option value="Author">Author</option>
                      <option value="ISN">ISBN/ISSN</option>
                    </select>
              <input type="submit" name="submit" value="Find">

              <input type="hidden" name="task" value="journalsearch">

            </form>
          </div>
    <?php 
}


//
function rendertopjournallist($list, $num=10) {
    $count;
    echo '<div class="toplist">
        <ul>';
    foreach ($list as $title => $total) {
        if ($title == "") { continue; }
        $count++;
        $titlesafe = urlencode($title);
        echo "<li><a href=\"?task=itemdetails&item=$titlesafe&itemtype=title\">$count $title ($total)</a> </li>";
        if ($count >= $num) { break; }
    }
    echo "</ul>";
    
}

/*
 * rendertopitemslist
 * takes an array of the most popular journals/articles/sources etc, and an outputs html
 * list
 * $list = array of names to display (key) and the total count (value) of usage
 * $itemtype is used to provide a link to the item's details page (e.g. title, atitle)
 */
function rendertopitemslist($list, $itemtype, $num=10) {
    $count;
    echo '<div class="toplist">
        <ul>';
    foreach ($list as $item => $total) {
        if ($item == "") { continue; }
        $count++;
        $itemurlencode = urlencode($item);
        echo "<li>$count <a href=\"?task=itemdetails&item=$itemurlencode&itemtype=$itemtype\">$item
            </a>($total) </li>";
        if ($count >= $num) { break; }
    }
    echo "</ul>
        </div>";
}

/*
 * what kind of thing to show
 */
function renderShowMore($show, $itemcritera, $itemtype) {
    // option to show more
    $show = urlencode($show);
    $itemcritera = urlencode($itemcritera);
    $itemtype = urlencode($itemtype);
    echo "<p><a href=\"?task=onelist&show=$show&critera=$itemcritera&criteratype=$itemtype\">more...</a></p>\n";
    
}

?>
