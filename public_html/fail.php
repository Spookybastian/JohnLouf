<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once 'include/common.php';
		writeHead('Submission failed - John Loufardakis');
		?>
	</head>
		
	<body id="top" class="p-5">
		<?php writeNavbar(); ?>

		<p class="pt-3 pb-1 px-0 m-0 text-center message">OOPS!</p>
		<p class="p-0 m-0 text-center">Something went wrong when submitting the form.<br>Usually this is due to a mistyped email.</p>

		<?php writeFooter(); ?>
	</body>
</html>