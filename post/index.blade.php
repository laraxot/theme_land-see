@extends('pub_theme::layouts.app')
@section('content')
<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  md-hide lg-hide " layout="nodisplay">
	<div class="flex justify-start items-center ampstart-sidebar-header">
		<div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
	</div>
	<nav class="ampstart-sidebar-nav ampstart-nav">
		<ul class="list-reset m0 p0 ampstart-label">
			<li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="stories.amp.html">Stories</a></li>
			<li class="ampstart-nav-item ampstart-nav-dropdown relative ">
				<!-- Start Dropdown-inline -->
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
					<section expanded="">
						<header>Stories</header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							<li class="ampstart-dropdown-item"><a href="stories.amp.html" class="text-decoration-none">All</a></li>
							<li class="ampstart-dropdown-item"><a href="stories.amp.html?category=design#land-see-design" class="text-decoration-none">Design</a></li>
							<li class="ampstart-dropdown-item"><a href="stories.amp.html?category=fashion#land-see-fashion" class="text-decoration-none">Fashion</a></li>
							<li class="ampstart-dropdown-item"><a href="stories.amp.html?category=interiors#land-see-interiors" class="text-decoration-none">Interiors</a></li>
							<li class="ampstart-dropdown-item"><a href="stories.amp.html?category=arts-culture#land-see-arts-culture" class="text-decoration-none">Arts &amp; Culture</a></li>
							<li class="ampstart-dropdown-item"><a href="stories.amp.html?category=popular#land-see-popular" class="text-decoration-none">Popular</a></li>
						</ul>
					</section>
				</amp-accordion>
				<!-- End Dropdown-inline -->
			</li>
			<li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="#">Shop</a></li>
			<li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="#">About</a></li>
			<li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="#">Contact</a></li>
		</ul>
	</nav>
	<ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
		<li>
			<a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewbox="0 0 53 49">
					<title>Twitter</title>
					<path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path>
				</svg>
			</a>
		</li>
		<li>
			<a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewbox="0 0 56 55">
					<title>Facebook</title>
					<path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path>
				</svg>
			</a>
		</li>
		<li>
			<a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Instagram">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 54 54">
					<title>instagram</title>
					<path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path>
				</svg>
			</a>
		</li>
		<li>
			<a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML pin trest">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewbox="0 0 43 51">
					<title>pinterest</title>
					<path d="M8.134 18.748c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4-.2 1.3-.7 2.6-1.2 3.8-.6 1.2-1.3 2.3-2.2 3.2-.8.9-1.8 1.7-3.1 2.2-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1-.6 1.8-.9 3.1-.9 4 0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" class="ampstart-icon ampstart-icon-pinterest"></path>
				</svg>
			</a>
		</li>
		<li>
			<a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML E-mail">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewbox="0 0 56 43">
					<title>email</title>
					<path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path>
				</svg>
			</a>
		</li>
	</ul>
</amp-sidebar>
<!-- End Sidebar -->
<!-- End Navbar -->
<section class="land-see-background-animation-container land-see-stories-anim-container relative mx-auto">
	<div class="land-see-background-animation absolute max-width-3 mx-auto">
		<div class="absolute land-see-background-image-left">
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 690 551" overflow="visible">
				<path fill="#add8bf" d="M345.048 0l-.032.051-.033-.051L0 550.606h690.031z"></path>
			</svg>
		</div>
		<div class="absolute land-see-background-image-right">
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 491 392" overflow="visible">
				<path fill="#fcdcd4" d="M491.354 0h-280.98v.004H0l210.374 335.771v.005l35.301 56.34.001-.001.004.006 35.3-56.34v-.015z"></path>
			</svg>
		</div>
		<amp-position-observer on="scroll:backgroundAnimation.seekTo(percent=event.percent)" layout="nodisplay">
		</amp-position-observer>
	</div>
</section>
<section class="land-see-category land-see-recent-content relative mx-auto mb2">
	<h1 class="ampstart-title-md center pt1">Blog</h1>
	<div [class]="selectedContainerClass" class="land-see-categories-nav-page-load center mb2 mx1 fit relative fit">
		<amp-carousel class="land-see-categories-carousel" height="35" layout="fixed-height" noloading="" controls="" type="carousel">
          <div class="inline-block px3"><button id="land-see-all" [class]="selectedCategory &#x3D;&#x3D; &#39;all&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 2170, mobile_height: 2750, src: &#39;{{ url('/json/all-stories-page-1.json') }}&#39;, selectedCategory: &#39;all&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">All</button></div>
          <div class="inline-block px3"><button id="land-see-design" [class]="selectedCategory &#x3D;&#x3D; &#39;design&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 550, mobile_height: 1100, src: &#39;./api/design-page-1.json&#39;, selectedCategory: &#39;design&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">Design</button></div>
          <div class="inline-block px3"><button id="land-see-fashion" [class]="selectedCategory &#x3D;&#x3D; &#39;fashion&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 1100, mobile_height: 1650, src: &#39;./api/fashion-page-1.json&#39;, selectedCategory: &#39;fashion&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">Fashion</button></div>
          <div class="inline-block px3"><button id="land-see-interiors" [class]="selectedCategory &#x3D;&#x3D; &#39;interiors&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 550, mobile_height: 1100, src: &#39;./api/interiors-page-1.json&#39;, selectedCategory: &#39;interiors&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">Interiors</button></div>
          <div class="inline-block px3"><button id="land-see-arts-culture" [class]="selectedCategory &#x3D;&#x3D; &#39;arts-culture&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 1650, mobile_height: 2750, src: &#39;./api/arts-culture-page-1.json&#39;, selectedCategory: &#39;arts-culture&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">Arts &amp; Culture</button></div>
          <div class="inline-block px3"><button id="land-see-popular" [class]="selectedCategory &#x3D;&#x3D; &#39;popular&#39; ? &#39;land-see-categories-button land-see-selected-category&#39; : &#39;land-see-categories-button&#39;" class="land-see-categories-button " on="tap:AMP.pushState({height: 1100, mobile_height: 2200, src: &#39;./api/popular-page-1.json&#39;, selectedCategory: &#39;popular&#39;, selectedContainerClass: &#39;land-see-categories-nav center mb2 mx1 fit relative&#39;})">Popular</button></div>
        </amp-carousel>
	</div>
	
	<div class="clearfix pt1">
		<amp-list media="(min-width: 30.06rem)" height="1225" [height]="height" layout="fixed-height" items="" src="{{asset('/json/QUERY_PARAM(category,all-stories)-page-QUERY_PARAM(page,1).json')}}" [src]="src">

		@verbatim
		<template type="amp-mustache">
			<amp-position-observer on="enter:storySlideIn.start" layout="nodisplay">
			</amp-position-observer>
			<ul class="list-reset m0 p0 center justify-center fit">
				{{#land-see-category}}
				<li class="px1 mt1 block align-top {{post-classes}}">
					{{#post-url}}
					<a href="{{post-url}}" class="text-decoration-none">
						{{#image}}
						<amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
						</amp-img>
						{{/image}}
						{{#image-animated}}
						<amp-anim class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
							<amp-img placeholder="" class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src-placeholder}}">
							</amp-img>
						</amp-anim>
						{{/image-animated}}
					</a>
					{{/post-url}}
					{{#youtube}}
					<amp-youtube class="{{classes}}" width="{{width}}" height="{{height}}" layout="{{layout}}" data-videoid="{{videoid}}">
					</amp-youtube>
					{{/youtube}}
					<a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
					<h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
					{{#post-copy}}
					<p class="ampstart-caption pt1 pb3">{{{post-copy}}}</p>
					{{/post-copy}}
				</li>
				{{/land-see-category}}
			</ul>
			{{#land-see-paging}}
			<div class="pt4 clearfix"></div>
			<div class="land-see-paging land-see-page-navigation mt4 mx2 fit {{classes}}">
				{{#page-nav}}
				<button on="{{action}}" class="{{classes}}">{{button-text}}</button>
				{{/page-nav}}
			</div>
			{{/land-see-paging}}
		</template>
		@endverbatim
		<div role="button" aria-label="More" overflow="" class="land-see-list-overflow center mx-auto">
			<div class="land-see-hero-button land-see-overflow-button">More</div>
		</div>
		</amp-list>
		<amp-list media="(max-width: 30rem)" height="2325" [height]="mobile_height" layout="fixed-height" items="" src=".&#x2F;api&#x2F;QUERY_PARAM(category,all-stories)-page-QUERY_PARAM(page,1).json" [src]="src">
		@verbatim
		<template type="amp-mustache">
			<amp-position-observer on="enter:storySlideInMobile.start" layout="nodisplay">
			</amp-position-observer>
			<ul class="list-reset m0 p0 center justify-center fit">
				{{#land-see-category}}
				<li class="px1 mt1 block align-top {{post-classes}}">
					{{#post-url}}
					<a href="{{post-url}}" class="text-decoration-none">
						{{#image}}
						<amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
						</amp-img>
						{{/image}}
						{{#image-animated}}
						<amp-anim class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
							<amp-img placeholder="" class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src-placeholder}}">
							</amp-img>
						</amp-anim>
						{{/image-animated}}
					</a>
					{{/post-url}}
					{{#youtube}}
					<amp-youtube class="{{classes}}" width="{{width}}" height="{{height}}" layout="{{layout}}" data-videoid="{{videoid}}">
					</amp-youtube>
					{{/youtube}}
					<a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
					<h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
					{{#post-copy}}
					<p class="ampstart-caption pt1 pb3">{{{post-copy}}}</p>
					{{/post-copy}}
				</li>
				{{/land-see-category}}
			</ul>
			{{#land-see-paging}}
			<div class="pt4 clearfix"></div>
			<div class="land-see-paging land-see-page-navigation mt4 mx2 fit {{classes}}">
				{{#page-nav}}
				<button on="{{action}}" class="{{classes}}">{{button-text}}</button>
				{{/page-nav}}
			</div>
			{{/land-see-paging}}
		</template>
		@endverbatim
		<div role="button" aria-label="More" overflow="" class="land-see-list-overflow center mx-auto">
			<div class="land-see-hero-button land-see-overflow-button">More</div>
		</div>
		</amp-list>
	</div>
	
</section>
<div class="land-see-subscribe center items-center max-width-4 mx-auto m0 mb3 z1">
<div class="land-see-subscribe-form z2">
	<form method="GET" action="land-see.amp.html" target="_top" class="p0 m0 px3 mb4">
		<fieldset class="border-none p0 m0">
			<h2 class="land-see-subs-heading-text">Weekly inspiration from <span class="bold">Land+See</span></h2>
			<!-- Start Input -->
			<div class="ampstart-input inline-block relative m0 p0 mb3 ">
				<input type="email" value="" name="email" id="email" class="block border-none p0 m0" placeholder="Enter email address to subscribe">
				<label for="email" class="absolute top-0 right-0 bottom-0 left-0" aria-hidden="true">Enter email address to subscribe</label>
			</div>
			<!-- End Input-->
			<!-- Start Input -->
			<div class="ampstart-input inline-block relative m0 p0 mb3 ">
				<input type="submit" value="" name="submit" id="submit" class="block border-none p0 m0" placeholder="">
				<label for="submit" class="absolute top-0 right-0 bottom-0 left-0" aria-hidden="true"></label>
			</div>
			<!-- End Input-->
		</fieldset>
	</form>
</div>
<amp-position-observer on="scroll:subscribeBGParallax.seekTo(percent=event.percent)" layout="nodisplay">
</amp-position-observer>
{{--
<amp-img alt="A view of the sea, see?" class="land-see-subscribe-bg cover" layout="fixed-height" height="679" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;khatam-tadayon-107740.jpg">
</amp-img>
--}}
@endsection