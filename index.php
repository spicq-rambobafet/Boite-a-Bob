<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>La boite à Bob</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js" type="text/javascript"></script> -->
		<script src="js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="css/font.css">
		<link rel="stylesheet" href="css/style.css">
		 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="js/ion.sound.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function(){
			ion.sound({
				sounds: [
				<?php
				foreach($sounds as $key => $value): ?>
		{name: "<?php echo $value['file']; ?>"},
				<?php endforeach; ?>
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});

		});
		</script>
		
		<script src="js/app.js"></script>
		
	</head>
	<body>
		<header>
			<h1>La boite à Bob</h1>
			<div id="slider"></div>
			<div class="clearfix"></div>
		</header>
		
		<section class="container-fluid">
			<div class="row">
				<?php foreach($sounds as $key => $value): ?>
					<article data-sound="<?php echo $value['file']; ?>" class="text-center col-lg-1 col-md-2 col-sm-3 col-xs-6" style="background:#<?php echo $value['color']; ?>">
						<p><?php echo $value['description']; ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	</body>
</html>