<html>

/* MC-grades */
/* (C) 2013 Mario C. Delgado */

The goal of this snippet is to provide a web page the necessary data to pull grade information of an authenticated user using the Ellucian Mobile Connection Server. 

<dl class="grades group">
<?php foreach($grades->grades as $g) { ?>
		<div class="card">
			<dt class="group"><span><?php print substr($g->courseDescription, 0, 20). "..."; ?></span>  <?php print $g->grade; ?></dt>
			<dd><strong>Course:</strong> <?php print $g->courseTitle; ?></dd>
			
			

</html>
