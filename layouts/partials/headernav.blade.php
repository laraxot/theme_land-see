<!-- Start Navbar -->
		<header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4 ">
			<div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger md-hide lg-hide pr2  ">☰
			</div>
			<a href="land-see.amp.html" class="text-decoration-none inline-block mx-auto ampstart-headerbar-home-link  ">
				<div class="ampstart-headerbar-title mx-auto ">Land + See</div>
			</a>
			<nav class="ampstart-headerbar-nav ampstart-nav  xs-hide sm-hide">
				<ul class="list-reset center m0 p0 flex justify-center nowrap">
					<li class="ampstart-nav-item "><a href="stories.amp.html" class="text-decoration-none block">Stories</a></li>
					<li class="ampstart-nav-item ampstart-nav-dropdown relative">
						<!-- Start Dropdown -->
						<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
							<section>
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
						<!-- End Dropdown -->
					</li>
					<li class="ampstart-nav-item "><a href="#" class="text-decoration-none block">Shop</a></li>
					<li class="ampstart-nav-item "><a href="#" class="text-decoration-none block">About</a></li>
					<li class="ampstart-nav-item "><a href="#" class="text-decoration-none block">Contact</a></li>
				</ul>
			</nav>
			<!--
				TODO: currently "fixeditems" is an array, therefore it's not possible to
				add additional classes to it. An alternative solution would be to make it
				an oject, with a "classes" and "items" sub-properties:
				"fixeditems": {
				 "classes": "col-3",
				 "items": [{
				"link": {
				  "url": "mailto:contact@lune.com",
				  "text": "—contact@lune.com",
				  "classes": "xs-small sm-hide h6 bold"
				}
				 }]
				}
				-->
			<div class="ampstart-headerbar-fixed center m0 p0 flex justify-center nowrap ">
				<div class="mr2">
				</div>
				<a href="#" class="text-decoration-none mr2 ampstart-headerbar-fixed-link ">
					<div class="ampstart-headerbar-icon-wrapper relative">
						<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewbox="0 0 11 11" overflow="visible">
							<circle fill="none" stroke="#000" stroke-width="1.68" stroke-miterlimit="10" cx="4.67" cy="4.67" r="3.83"></circle>
							<path fill="none" stroke="#000" stroke-width="1.78" stroke-linecap="round" stroke-miterlimit="10" d="M7.258 7.77l2.485 2.485"></path>
						</svg>
					</div>
				</a>
			</div>
		</header>