This web app will show some stats collected from openurl.ac.uk

load data in to mysql using a command such as the following...

 LOAD DATA LOCAL INFILE 'TABLE2.csv' INTO TABLE activity COLUMNS TERMINATED BY '\t';


in am empty directory, either use download on github or
git clone git://github.com/chriskeene/openurl1.git
(then git pull to keep up to date)

Now create a file called restrict.php which looks like this:

<?php

//####################################################
// Connection to DB
function connectdb() {
$hostname = "mysql.foo.org";
$username = "readonlyusername";
$pass = "cheese";
$db = "mydatabase";

	$link = mysql_connect ("$hostname", "$username", "$pass")
    or die ("Could not connect");
	mysql_select_db("$db") or die("Could not use database");
}


?>


...and it should work (or probably not)