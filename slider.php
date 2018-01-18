<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="css/slider.css" />
</head>
<body>
	<ul id="slides">
		<li class="slide showing"> <img src="img/gs001.jpg" height=350 /> </li>
		<li class="slide"> <img src="img/gs002.jpg" height=350 /> </li>
		<li class="slide"> <img src="img/gs004.jpg" height=350 /> </li>
	</ul>
	
	<script type="text/javascript">
		var slides = document.querySelectorAll('#slides .slide');
		var currentSlide = 0;
		var slideInterval = setInterval(nextSlide,2000);

		function nextSlide() {
			slides[currentSlide].className = 'slide';
			currentSlide = (currentSlide+1)%slides.length;
			slides[currentSlide].className = 'slide showing';
		}
	</script>
</body>