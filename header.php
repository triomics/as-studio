<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

<?php wp_head(); ?>
<!-- preloader-regular -->

<script src="<?php echo get_template_directory_uri()?>/assets/js/animsition.js"></script>
<script>
	jQuery(document).ready(function($) {
	  $(".animsition").animsition({
	    inClass: 'fade-in-up-sm',
	    outClass: 'fade-out-up-sm',
	    inDuration: 500,
	    outDuration: 500,
	    linkElement: 'a:not([target="_blank"]):not([href^="#"])',
	    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
	    loading: true,
	    loadingParentElement: 'body', //animsition wrapper element
	    loadingClass: 'animsition-loading',
	    loadingInner: '<div class="preloader-as">AS</div>', // e.g '<img src="loading.svg" />'
	    timeout: false,
	    timeoutCountdown: 5000,
	    onLoadEvent: true,
	    browser: [ 'animation-duration', '-webkit-animation-duration'],
	    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
	    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
	    overlay : false,
	    overlayClass : 'animsition-overlay-slide',
	    overlayParentElement : 'body',
	    transition: function(url){ window.location.href = url; }
	  });
	});
</script>

</head>
<body>
<!-- preloader-homepage -->

<div class="preloader-frontpage">
	<div class="preloader-bg"></div>
	<div class="preloader-container">
		<div class="rel">
			<h1 class="title-name">
				<span class="first-letter">A</span><span class="simple">lena </span><span class="second-letter">S</span><span class="simple">pivak</span>
			</h1>
			<div class="divider"></div>
			<canvas id="myCanvas" width="100" height="100"></canvas>
			<h2 class="sub-title"><span>студия дизайна</span></h2>
		</div>
	</div>
</div> 

<script>
	(function() {
		  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
		                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
		  window.requestAnimationFrame = requestAnimationFrame;
		})();
		 

		var canvas = document.getElementById('myCanvas');
		 var context = canvas.getContext('2d');
		 var x = canvas.width / 2;
		 var y = canvas.height / 2;
		 var radius = 49;
		 var endPercent = 101;
		 var curPerc = 0;
		 var counterClockwise = true;
		 var circ = -3*Math.PI / 2 - (Math.PI / 4)*2;
		 var quart = Math.PI / 2;

		 context.lineWidth = 1;
		 context.strokeStyle = 'rgb(51, 51, 51)';
		 context.shadowOffsetX = 0;
		 context.shadowOffsetY = 0;


		 function animate(current) {
		     context.clearRect(0, 0, canvas.width, canvas.height);
		     context.beginPath();
		     context.arc(x, y, radius, +(quart), ((circ) * current) + quart, true);
		     context.stroke();
		     curPerc = curPerc + 2;
		     if (curPerc < endPercent) {
		         requestAnimationFrame(function () {
		             animate(curPerc / 100)
		         });
		     }
		 }

		 setTimeout( function() {
			animate(); 	
		 }, 4300);
</script>
<div class="animsition">
<div class="line-through"></div>
<div class="container"> <!-- open container -->
  <div class="row"> <!-- open row -->
