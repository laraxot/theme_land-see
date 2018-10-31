<!DOCTYPE html>
<html ⚡="">
	@include('pub_theme::layouts.partials.htmlheader')
	<body class="land-see">
		@include($view.'.amp-animation')
		@include('pub_theme::layouts.partials.headernav')
		@include('pub_theme::layouts.partials.sidebar')
		{{--
		@include($view.'.hero')
		--}}
		@include($view.'.popular')
		{{--
		@include($view.'.banner')
		--}}
		@include($view.'.recent')
		@include($view.'.land-see-story-categories')
		@include($view.'.insta_follow')
		@include($view.'.subscribe')
		@include('pub_theme::layouts.partials.footer')
	</body>
</html>