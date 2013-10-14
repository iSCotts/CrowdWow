<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	
	<title>Anything Zoomer | Image</title>

	<link rel="stylesheet" href="demo/style.css">
	<link rel="stylesheet" href="css/anythingzoomer.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script src="js/jquery.anythingzoomer.js"></script>
	<script>
	$(function() {

		$(".zoom").anythingZoomer();

		$('.president')
		.bind('click', function(){
			return false;
		})
		.bind('mouseover click', function(){
			var loc = $(this).attr('rel');
			if (loc && loc.indexOf(',') > 0) {
				loc = loc.split(',');
				$('.zoom').anythingZoomer( loc[0], loc[1] );
			}
			return false;
		});

	});
	</script>
</head>
<body id="image">

<div id="main-content">

	

	




	<hr>

	<div class="zoom">

		<div class="small">
			<img src="demo/rushmore_small.jpg" alt="small rushmore">
		</div>

		<div class="large">
			<img src="demo/rushmore.jpg" alt="big rushmore">
		</div>

	</div>

</div>

</body>

</html>