<!DOCTYPE html>
<html>
<head>
	 <title>@yield('title'){{ config('app.name') }}</title>
	 <link rel="stylesheet" type="text/css" href="/css/main.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div id="app" class="niceLandOfPages">
		<nav-bar></nav-bar>
			<header-images-children></header-images-children>
				<!-- <div class="container"> -->

				<content-data></content-data>

				<!-- </div> -->
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>