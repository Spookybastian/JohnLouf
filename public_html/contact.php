<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once 'include/common.php';
		writeHead('Contact - John Loufardakis');
		?>
	</head>
		
	<body id="top" class="p-5">
		<?php writeNavbar(); ?>

		<!-- This div needs px-3 instead of px-2 due to field borders -->
		<form action="include/submit.php" method="post" class="row pt-3 px-3">
			<input type="text" name="name" placeholder="Your name" class="col-12 col-md-6 m-0 py-3 px-4 field" required>
			<input type="email" name="email" placeholder="Your email" class="col-12 col-md-6 m-0 py-3 px-4 field" required>
			<input type="text" name="subject" placeholder="Subject" class="col-12 m-0 py-3 px-4 field" required>
			<textarea name="message" placeholder="Message" rows="10" class="col-12 m-0 py-3 px-4 field" required></textarea>
			<input type="submit" value="SUBMIT" class="h2 clickable submit m-0 py-3 px-4">
		</form>

		<p class="pt-1 px-2">Or email me directly at <a href="mailto:contact@loufjohn.com" class="underline">contact@loufjohn.com</a></p>

		<?php writeFooter(); ?>
	</body>
</html>
