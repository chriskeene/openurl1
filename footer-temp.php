<?php


// ############################################
// print processing time so far 
function printprocessingtime($msg="")
{
	global $scriptStartTime, $debug;
	$debug=1;
	if ($debug) 
	{ 
		echo "<p>$msg Time elapsed: ",getmicrotime() - $scriptStartTime, " seconds </p>"; 
	}
}

?>


		<div class="cleaner">&nbsp;</div>
	</div>  <!-- Content of the site end -->

	<div id="footer">
		<div id="footer-in">
		
        <?php printprocessingtime(); ?>
		<p class="print"><a id="print" href="#">Print</a> | <a href="#top">Top</a> &uarr;</p>
		<div class="cleaner">&nbsp;</div>
		<p id="backs"><a href="http://www.mantisatemplates.com/">Mantis-a templates</a> | tip <a href="http://www.topas-tachlovice.cz/topas-tachlovice.aspx" title="Občanské sdružení TOPAS Tachlovice">Tachlovice</a></p>
		</div>
	</div> <!-- Footer end -->

</div> <!-- Wrapper end -->
</body>

</html>

