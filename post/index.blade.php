@extends('pub_theme::layouts.app')
@section('content')

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
		<amp-list media="(max-width: 30rem)" height="2325" [height]="mobile_height" layout="fixed-height" items="" src="{{asset('/json/QUERY_PARAM(category,all-stories)-page-QUERY_PARAM(page,1).json')}}" [src]="src">
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