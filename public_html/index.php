<!DOCTYPE html>
<html>
	<head>
		<?php 
		require_once 'include/common.php'; 
		writeHead('Portfolio - John Loufardakis');
		?>
		<meta name="description" content="John Loufardakis - Photographer and cinematographer from Greece.">
		<!-- Twitter -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image" content="https://loufjohn.com/resources/preview.png">
		<meta name="twitter:title" content="John Loufardakis Photography Portfolio">
		<meta name="twitter:description" content="John Loufardakis - Photographer and cinematographer from Greece.">
		<!-- Facebook (Open Graph) -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.loufjohn.com">
		<meta property="og:title" content="John Loufardakis Photography Portfolio">
		<meta property="og:description" content="John Loufardakis - Photographer and cinematographer from Greece.">
		<meta property="og:image" content="https://loufjohn.com/resources/preview.png">
	</head>
		
	<body id="top" class="p-5">
		<div id="overlay" onclick="hideOverlay()" class="px-3 py-5">
			<div id="viewer" class="p-1 m-0">
				<p>&copy; John Loufardakis</p>
			</div>
		</div>
		
		<?php
		writeNavbar();

		// This div has essentially px-2 due to each photo container having that value
		echo '<div class="row text-center p-0 m-0">';

		// Write photo to grid
		function writePhoto($fileName, $orientation, $fadeIndex) {
			if ($orientation == 'portrait') {
				$classes = 'col-12 col-lg-6 col-xl-4 col-xxl-3 pt-3 px-2';
			} else {
				$classes = 'col-12 col-lg-12 col-xl-8 col-xxl-6 pt-3 px-2';
			}

			echo <<<HTML
			<div class="$classes">
				<div
					onclick="showOverlay('$fileName')" 
					class="photo fade-in-$fadeIndex $orientation" 
					style="background-image: url('resources/photos/$fileName');">
				</div>
			</div>
			HTML;
		}

		// Sort photos into arrays
		$portraitPhotos = array();
		$landscapePhotos = array();
		foreach (new DirectoryIterator('resources/photos') as $file) {
			if ($file->isDot()) {
				continue;
			}
			if (str_contains($file->getFileName(), 'landscape')) {
				array_push($landscapePhotos, $file->getFileName());
			} else {
				array_push($portraitPhotos, $file->getFileName());
			}
		}

		// array_pop() is used to read photo filenames, so reversing 
		// the arrays is needed to keep the original order
		$portraitPhotos = array_reverse($portraitPhotos);
		$landscapePhotos = array_reverse($landscapePhotos);

		// Create layout: 4 portrait, 1 landscape, ...
		$f = 1;
		while (count($portraitPhotos) >= 4 && count($landscapePhotos) >= 1) {

			for ($i=0; $i<4; $i++) {
				writePhoto(array_pop($portraitPhotos), 'portrait', $f);

				// fade-in-# CSS classes only go up to 5.
				if ($f < 5) {
					$f++;
				}
			}

			writePhoto(array_pop($landscapePhotos), 'landscape', $f);
		}

		// Add remaining portrait photos
		while (count($portraitPhotos) > 0) {
			writePhoto(array_pop($portraitPhotos), 'portrait', $f);
		}
		// Write one last landscape, if any
		if (count($landscapePhotos) > 0) {
			writePhoto(array_pop($landscapePhotos), 'landscape', $f);
		}

		echo '</div>';

		writeFooter();
		?>

		<script>
			const viewer = document.querySelector('#viewer');
			const overlay = document.querySelector('#overlay');

			function showOverlay(image) {
				viewer.style.backgroundImage = `url('resources/photos/${image}')`;
				overlay.style.display = 'block';
			}

			function hideOverlay() {
				overlay.style.display = 'none';
			}
		</script>
	</body>
</html>