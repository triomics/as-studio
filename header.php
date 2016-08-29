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
<script src="<?php echo get_template_directory_uri()?>/assets/js/animsition.min.js"></script>
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
<div class="animsition">
<div class="line-through"></div>
<div class="container"> <!-- open container -->
  <div class="row"> <!-- open row -->
