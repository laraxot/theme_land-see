@verbatim
		<section class="land-see-popular-content mx-auto">
			<h4 class="land-see-section-header ml1">Popular</h4>
			<div class="clearfix pt2">
				<amp-list class="center justify-center" src="./api/popular.json" height="450" layout="fixed-height">
					<template type="amp-mustache">
						<amp-position-observer on="enter:popularSlideIn.start" layout="nodisplay">
						</amp-position-observer>
						{{#land-see-category}}
						<amp-carousel media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" controls="" type="slides">
							{{#story-slide}}
							<div class="land-see-story-slide flex">
								{{#story-post}}
								<div class="mx1 col align-top {{post-classes}}">
									<a href="{{post-url}}" class="text-decoration-none">
										{{#image}}
										<amp-img class="land-see-post-image {{classes}}" alt="{{alt}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
										</amp-img>
										{{/image}}
									</a>
									<a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
									<h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
									<p class="ampstart-caption pt1 pb3">{{post-copy}}</p>
								</div>
								{{/story-post}}
							</div>
							{{/story-slide}}
						</amp-carousel>
						{{/land-see-category}}
					</template>
				</amp-list>
			</div>
		</section>
		@endverbatim