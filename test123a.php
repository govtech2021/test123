
<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css" />
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
	<style>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
    	height: 435px;
	}
	.ui-mobile, .ui-mobile .ui-page {
    	min-height: 435px;
	}
	.ui-content{
		padding:10px 15px 0px 15px;
	}
	.panel-content { padding:15px; }
	</style>
</head>

<body>
	<div data-role="page" style="max-height:440px; min-height:440px;" class="type-home" class="ui-responsive-panel">
		<div data-role="header">
    		<h1>Panel Demo</h1>
		</div>
		<div role="main" class="ui-content">
    		<p><strong>Left</strong> panel examples</p>
			<a href="#leftpanel3" data-role="button" data-inline="true" data-mini="true">Overlay</a>
			<a href="#leftpanel1" data-role="button" data-inline="true" data-mini="true">Reveal</a>
			<a href="#leftpanel2" data-role="button" data-inline="true" data-mini="true">Push</a>

			<p><strong>Right</strong> panel examples</p>
			<a href="#rightpanel3" data-role="button" data-inline="true" data-mini="true">Overlay</a>
			<a href="#rightpanel1" data-role="button" data-inline="true" data-mini="true">Reveal</a>
			<a href="#rightpanel2" data-role="button" data-inline="true" data-mini="true">Push</a>
		</div>

		<!-- leftpanel1  -->
		<div data-role="panel" id="leftpanel1" data-position="left" data-display="reveal" data-dismissible="true" data-theme="a">

			<div class="panel-content">
				<h3>Left Panel: Reveal</h3>
				<p>This panel is positioned on the left with the reveal display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
			</div><!-- /content wrapper for padding -->

		</div><!-- /leftpanel1 -->

		<!-- leftpanel2  -->
		<div data-role="panel" id="leftpanel2" data-position="left" data-display="push" data-dismissible="true" data-theme="a">

			<div class="panel-content">
				<h3>Left Panel: Push</h3>
				<p>This panel is positioned on the left with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
			</div><!-- /content wrapper for padding -->

		</div><!-- /leftpanel2 -->

		<!-- leftpanel3  -->
		<div data-role="panel" id="leftpanel3" data-position="left" data-display="overlay" data-dismissible="true" data-theme="a">

			<div class="panel-content">
				<h3>Left Panel: Overlay</h3>
				<p>This panel is positioned on the left with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
			</div><!-- /content wrapper for padding -->

		</div><!-- /leftpanel3 -->

		<!-- rightpanel1  -->
		<div data-role="panel" id="rightpanel1" data-position="right" data-display="reveal" data-dismissible="true" data-theme="b">

			<div class="panel-content">
				<h3>Right Panel: Reveal</h3>
				<p>This panel is positioned on the right with the reveal display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
			</div><!-- /content wrapper for padding -->

   		</div><!-- /rightpanel1 -->

		<!-- rightpanel2  -->
		<div data-role="panel" id="rightpanel2" data-position="right" data-display="push" data-dismissible="true" data-theme="b">

			<div class="panel-content">
				<h3>Right Panel: Push</h3>
				<p>This panel is positioned on the right with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
    	   	</div><!-- /content wrapper for padding -->

		</div><!-- /rightpanel2 -->

		<!-- rightpanel3  -->
		<div data-role="panel" id="rightpanel3" data-position="right" data-display="overlay" data-dismissible="true" data-theme="b">

			<div class="panel-content">
				<h3>Right Panel: Overlay</h3>
				<p>This panel is positioned on the right with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
				<p>test 123To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
				<a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
			</div><!-- /content wrapper for padding -->

		</div><!-- /rightpanel3 -->

   	</div>
</body>
</html>
