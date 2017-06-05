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
	<div class="uk-container">
	
	<div class="uk-position-relative">

    <nav class="uk-navbar-container" uk-navbar="dropbar: true; dropbar-mode: push">

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Parent</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>

    </nav>

    <div class="uk-navbar-dropbar"></div>

</div>

		<form>
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Legend</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Input">
        </div>

        <div class="uk-margin">
            <select class="uk-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
            <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
            <label><input class="uk-radio" type="radio" name="radio2"> B</label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
            <label><input class="uk-checkbox" type="checkbox" checked> A</label>
            <label><input class="uk-checkbox" type="checkbox"> B</label>
        </div>

        <div class="uk-margin">
            <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
        </div>

    </fieldset>
</form>
		
				<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-match" uk-grid>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-fade">
					<p class="uk-text-center">Fade</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
					<p class="uk-text-center">Scale Up</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
					<p class="uk-text-center">Scale Down</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-shake">
					<p class="uk-text-center">Shake</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-left">
					<p class="uk-text-center">Left</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-top">
					<p class="uk-text-center">Top</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom">
					<p class="uk-text-center">Bottom</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-right">
					<p class="uk-text-center">Right</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-small">
					<p class="uk-text-center">Left Small</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-small">
					<p class="uk-text-center">Top Small</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-small">
					<p class="uk-text-center">Bottom Small</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-small">
					<p class="uk-text-center">Right Small</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-medium">
					<p class="uk-text-center">Left Medium</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-medium">
					<p class="uk-text-center">Top Medium</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
					<p class="uk-text-center">Bottom Medium</p>
				</div>
			</div>
			<div class="uk-animation-toggle">
				<div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-medium">
					<p class="uk-text-center">Right Medium</p>
				</div>
			</div>
		</div>
		
		<div class="uk-offcanvas-content" style="margin-left: 50%; margin-top: 25px;">

    <!-- The whole page content goes here -->

    <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-usage">Open</button>

    <a href="#offcanvas-usage" uk-toggle>Open</a>

    <div id="offcanvas-usage" uk-offcanvas>
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
    </div>

</div>


<button id="demo-javascript" class="demo uk-button uk-button-default" style="margin-left: 50%; margin-top: 25px;" type="button" data-message="Notification message">Click me</button>
<button id="demo-javascript1" class="demo uk-button uk-button-default" style="margin-left: 50%; margin-top: 25px;" type="button" data-message="Notification message">Click me</button>

<!-- This is a button toggling the modal -->
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Open</button>

<!-- This is an anchor toggling the modal -->
<a href="#modal-example" uk-toggle>Open</a>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>

<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Default</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Primary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title">Secondary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
</div>

<article class="uk-article">

    <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>

    <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>

    <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">Read more</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="#">5 Comments</a>
        </div>
    </div>

</article>

<script>
    jQuery('#demo-javascript').on('click', function() {
        UIkit.notification("<span uk-icon='icon: check'></span> Message", {status: 'primary'});
    });
    jQuery('#demo-javascript1').on('click', function() {
        UIkit.notification("<span uk-icon='icon: check'></span> Message", {status: 'danger'});
    });
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</div>
	</body>
</html>