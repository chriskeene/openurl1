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
        echo "<li>$count $title ( $total) </li>";
        if ($count >= $num) { break; }
    }
    echo "</ul>";
    
}



?>
