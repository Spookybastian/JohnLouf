<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once 'include/common.php';
		writeHead('Socials - John Loufardakis');
		?>
	</head>
		
	<body id="top" class="p-5">
		<?php writeNavbar(); ?>

		<p class="pt-3 px-2"><em class="h5">Esse Quam Videri</em><br>Photographer & cinematographer<br>Studying theater arts at the University of Cambridge</p>

		<!-- This div needs px-3 instead of px-2 due to clickable borders -->
		<div class="row px-3">
			<div class="col-12 col-md-7 col-lg-8 m-0 p-1">
				<a class="h1 clickable m-0 py-3 px-4" target="_blank" href="https://www.instagram.com/john_louf/"><i class="bi bi-instagram"></i> INSTAGRAM</a>
				<a class="h1 clickable m-0 py-3 px-4" target="_blank" href="https://www.facebook.com/JohnLoufardakis"><i class="bi bi-facebook"></i> FACEBOOK</a>
				<a class="h1 clickable m-0 py-3 px-4" target="_blank" href="https://www.youtube.com/@johnlouf"><i class="bi bi-youtube"></i> YOUTUBE</a>
				<a class="h1 clickable m-0 py-3 px-4" target="_blank" href="https://www.fiverr.com/loufardakisjohn"><i class="bi bi-coin"></i> FIVERR</a>
			</div>
			<div class="col-12 col-md-5 col-lg-4 m-0 p-1">
				<div id="jl" class="d-flex justify-content-center align-items-center">
					<p>JL</p>
				</div>
			</div>
		</div>

		<?php writeFooter(); ?>
	</body>
</html>