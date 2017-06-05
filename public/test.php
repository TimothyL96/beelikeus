<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description"/>
		<meta name="author">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<script src="/js/app.js"></script>
		<link rel="stylesheet" href="/css/app.css">
		<title>TEST</title>
	</head>
	<body>
		<div class="top-bar">
			<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
			  <li class="menu-text">Site Title</li>
			  <li>
				<a href="#">One</a>
				<ul class="menu vertical">
				  <li><a href="#">One</a></li>
				  <li><a href="#">Two</a></li>
				  <li><a href="#">Three</a></li>
				</ul>
			  </li>
			  <li><a href="#">Two</a></li>
			  <li><a href="#">Three</a></li>
			</ul>
			</div>
			<div class="top-bar-right">
			<ul class="menu">
			  <li><input type="search" placeholder="Search"></li>
			  <li><button type="button" class="button">Search</button></li>
			</ul>
			</div>
		</div>

		<!-- This demo uses flex grid but you can use float grid too -->
		<div class="row">
		  <div class="columns">
			<h2>Reveal (Modal)</h2>
			<p>A modal is just an empty container, so you can put any kind of content inside it, from text to forms to video to an entire grid.</p>
			<div class="callout primary">
			  <p>Please note that we removed the option for AJAX loaded modals in Foundation 6. We did make it very easy to implement on your own though, check out a sample in the <span><a href="//foundation.zurb.com/sites/docs/reveal.html#advanced-options">Advanced</a></span> section.</p>
			</div>
		  </div>
		</div>

		<div class="row">
		  <div class="columns">
			<p><a data-open="exampleModal1">Click me for a modal</a></p>

			<div class="reveal" id="exampleModal1" data-reveal>
			  <h1>Awesome. I Have It.</h1>
			  <p class="lead">Your couch. It is mine.</p>
			  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
			  <button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		  </div>
		</div>
		
		
		<div class="off-canvas position-left" id="offCanvasleft" data-off-canvas>
			<!-- Your menu or Off-canvas content goes here -->
		  
		  <ul class="menu vertical">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		  </ul>
		</div>
		
		<div class="off-canvas position-right" id="offCanvasright" data-off-canvas>
			<!-- Your menu or Off-canvas content goes here -->
		  
		  <ul class="menu vertical">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		  </ul>
		</div>
		
		<div class="off-canvas position-top" id="offCanvastop" data-off-canvas>
			<!-- Your menu or Off-canvas content goes here -->
		  
		  <ul class="menu vertical">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		  </ul>
		</div>
		
		<div class="off-canvas position-bottom" id="offCanvasbottom" data-off-canvas>
			<!-- Your menu or Off-canvas content goes here -->
		  
		  <ul class="menu vertical">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		  </ul>
		</div>
		  <button style="margin-left: 50%;" type="button" class="button" data-toggle="offCanvasleft">Open off-canvas</button>
		  <button style="margin-left: 50%;" type="button" class="button" data-toggle="offCanvasright">Open off-canvas</button>
		  <button style="margin-left: 50%;" type="button" class="button" data-toggle="offCanvastop">Open off-canvas</button>
		  <button style="margin-left: 50%;" type="button" class="button" data-toggle="offCanvasbottom">Open off-canvas</button>

		  <div class="callout primary">
			  <h5>This is a secondary callout</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			  <a href="#">It's dangerous to go alone, take this.</a>
			</div>
			
			<div class="callout success">
			  <h5>This is a secondary callout</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			  <a href="#">It's dangerous to go alone, take this.</a>
			</div>
		<script>
		$(function() {
			$(document).foundation();
		});
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
		</script>
	</body>
</html>