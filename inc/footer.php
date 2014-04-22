
<tr>
  <td colspan="2"><div id="footer"> Build: 2.0.5
      <div class="floatRight"> <a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="/images/valid-xhtml.gif" alt="XHTML Valid" /></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.php.net" target="_blank"><img src="/images/php-power-micro.png" alt="PHP Powered" /></a> </div>
    </div></td>
</tr>
</table>
</div>
<br />
<div id="footer2"> Website created and maintained by the <a href="mailto:mumedicine@health.missouri.edu" class="small">Office of Communications</a>.<br />
  <a href="/about/contact.php">Contact</a> the MU School of Medicine. <br />
  <?php
	$filename = basename($_SERVER['REQUEST_URI']);
	if(!preg_match("/php/i", $filename)){
		$filename = 'index.php';
	}
	if(file_exists($filename)) {
	    echo "Revised: " . date ("F d, Y", filemtime($filename));
	}
	?>
  - Copyright &copy; 2013 - The Curators of the <a href="http://www.umsystem.edu/" rel="external">University of Missouri</a>.<br />
  All rights reserved. <a href="http://www.umsystem.edu/ums/copyright/" target="_blank">DMCA</a> and <a href="http://www.missouri.edu/copyright.php" rel="external">other copyright information</a>.  An <a href="http://www.missouri.edu/eeo-aa.php" rel="external">equal opportunity/affirmative action</a> institution.<br />
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12923722-12', 'missouri.edu');
  ga('send', 'pageview');

</script>