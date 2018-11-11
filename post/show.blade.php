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
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewbox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewbox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 54 54"><title>instagram</title><path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML pin trest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewbox="0 0 43 51"><title>pinterest</title><path d="M8.134 18.748c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4-.2 1.3-.7 2.6-1.2 3.8-.6 1.2-1.3 2.3-2.2 3.2-.8.9-1.8 1.7-3.1 2.2-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1-.6 1.8-.9 3.1-.9 4 0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" class="ampstart-icon ampstart-icon-pinterest"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML E-mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewbox="0 0 56 43"><title>email</title><path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path></svg></a>
    </li>
</ul>

</amp-sidebar>
<!-- End Sidebar -->
  <!-- End Navbar -->

    <section class="land-see-story-detail relative mx-auto mb4 pt2">
      <div class="mx-auto center land-see-post-item land-see-post-item-wide land-see-story">
        <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 pb1" href="stories.amp.html?category&#x3D;fashion#land-see-fashion">Fashion</a>
        <h1 class="land-see-hero-title ampstart-title-lg bold pt2 mx2"><a class="text-decoration-none" href="kim-myeong.amp.html">Designer Kim&nbsp;Myeong</a></h1>
        <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 px2 mb3">
          Relatively new to the industry, footwear designer Kim Myeong uses a unique mix of color, texture, and material to make her shoes the must-haves of this year.
        </p>
        <amp-img media="(min-width: 25.06rem)" class="cover max-width-4 mx-auto mt2" alt="Designer Kim Myeong." width="1000" height="532" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;shoe-designer.jpg">
        </amp-img>
        <div class="land-see-image-attribution ampstart-byline left-align mx-auto max-width-3 px4 pt1">Photo by: Jaccob Herman</div>
      </div>

        <h2 class="land-see-story-subtitle ampstart-subtitle bold max-width-3 mx-auto pb0 pt4 px4">What makes Kim different?</h2>
        <p class="land-see-story-copy max-width-3 mx-auto py2 px4">
          <b>Sed porta ultrices eros, a lobortis lectus elementum at.</b> Nullam lobortis sit amet metus vel consequat. Vivamus varius quis ipsum eget ullamcorper. Praesent ultricies massa condimentum sem fermentum pulvinar vitae dignissim lectus. Sed suscipit convallis erat, vel ultricies ipsum euismod sed. Donec vitae vestibulum justo. In tristique vitae dolor sed vulputate. Praesent sed risus vel felis ullamcorper iaculis. Donec vel lacinia enim, vel laoreet dolor. Etiam pharetra blandit felis eget bibendum. Fusce ex libero, laoreet eget hendrerit vitae, aliquet in libero. Mauris et sapien ac dui sodales fringilla quis eu magna. Quisque tristique facilisis ex ac malesuada. Integer sed dui nisl. Mauris a molestie nunc. Sed varius eget lacus ac tristique.
        </p>
        <div class="land-see-flying-carpet display-none">
          <amp-fx-flying-carpet height="300px">
            <amp-img alt="Designer Kim Myeong." class="cover" width="704" height="598" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;shoe-designer-centered.jpg">
            </amp-img>
          </amp-fx-flying-carpet>
          <div class="land-see-image-attribution ampstart-byline left-align mx-auto max-width-3 px4 pt1">Photo by: Jaccob Herman</div>
        </div>
        <blockquote class="land-see-blockquote max-width-3 mx-auto py4 px4 relative  ">
          <p class="bold mb1 pl4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus efficitur lacus non fringilla.</p>
          <cite class="pl4">Dorian Grey</cite>
        </blockquote>
        <p class="land-see-story-copy max-width-3 mx-auto py2 px4">
          Quisque tempor imperdiet eros, non luctus nisi suscipit in. Sed ex nisi, imperdiet eu odio vitae, congue fermentum est. Phasellus id justo et sem fermentum tincidunt quis vel lacus. Integer dapibus non ligula nec mollis. In at urna nec dui malesuada pharetra. Phasellus non enim sed ipsum pulvinar semper in ac neque. Morbi bibendum lorem sed lectus luctus lacinia.
        </p>

      <div class="land-see-image-gallery mx-auto">
        <amp-carousel id="land-see-kim-carousel" class=" mx1" width="813" height="480" layout="responsive" [slide]="selectedSlide" on="slideChange:AMP.setState({selectedSlide: event.index})" controls="" loop="" type="slides">
            <amp-img class="cover land-see-cover-position-bottom" alt="Omg, shoes." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-0.jpg">
            </amp-img>
            <amp-img class="cover" alt="Those shoes are miiiiine..." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-1.jpg">
            </amp-img>
            <amp-img class="cover" alt="These shoes are rad..." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-2.jpg">
            </amp-img>
            <amp-img class="cover" alt="Shoe designer self-portrait." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-5.jpg">
            </amp-img>
            <amp-img class="cover" alt="Those shoes are rad..." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-3.jpg">
            </amp-img>
            <amp-img class="cover" alt="Matching accessories." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-6.jpg">
            </amp-img>
            <amp-img class="cover" alt="Sigh, having such amazing shoes is almost a burden." width="813" height="480" layout="responsive" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-4.jpg">
            </amp-img>
        </amp-carousel>
        <div class="mx1">
          <div class="land-see-gallery-progress mt1 center col-12 overflow-hidden">
            <div class="land-see-gallery-progress-scroll col-12 nowrap">
              <button on="tap:AMP.setState({selectedSlide: 0})" class="px0">
                <amp-img class="cover land-see-cover-position-bottom land-see-selected-preview-image" [class]="selectedSlide &#x3D;&#x3D; 0 ? &#39;cover land-see-cover-position-bottom land-see-selected-preview-image&#39; : &#39;cover land-see-cover-position-bottom&#39;" alt="Go to slide 1" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-0.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 1})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 1 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 2" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-1.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 2})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 2 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 3" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-2.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 3})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 3 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 4" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-5.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 4})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 4 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 5" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-3.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 5})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 5 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 6" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-6.jpg">
                </amp-img>
              </button>
              <button on="tap:AMP.setState({selectedSlide: 6})" class="px0">
                <amp-img class="cover " [class]="selectedSlide &#x3D;&#x3D; 6 ? &#39;cover land-see-selected-preview-image&#39; : &#39;cover&#39;" alt="Go to slide 7" width="77" height="58" layout="fixed" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;gallery&#x2F;kim-4.jpg">
                </amp-img>
              </button>
            </div>
          </div>
        </div>
      </div>

      <p class="land-see-story-copy max-width-3 mx-auto pt1 pb3 px4">
        Mauris sodales sem sed tempus fermentum. Mauris placerat libero lorem, ac fermentum libero condimentum tincidunt. Praesent ut nulla quis nibh euismod ultricies. Pellentesque id sagittis nibh. Proin rutrum fermentum malesuada. Pellentesque nec consequat est. Integer felis lectus, luctus sed urna nec, rhoncus convallis velit.
      </p>
    </section>

    <section class="land-see-story-instagram-container my4 mx-auto center land-see-stories land-see-instagram">
      <h3 class="max-width-4 mx-auto"><span class="relative">Follow Kim Myeong</span></h3>
      <div class="land-see-story-instagrams mb2">
        <ul class="list-reset flex justify-center overflow-hidden mt0 p0 relative">
          <li class="land-see-instagram-post flex-auto mx1">
            <amp-instagram data-shortcode="BZyeebeAlF-" height="260px" layout="fixed-height">
            </amp-instagram>
          </li>
          <li class="land-see-instagram-post flex-auto mx1">
            <amp-instagram data-shortcode="BV-QKd-gxv7" height="260px" layout="fixed-height">
            </amp-instagram>
          </li>
          <li class="land-see-instagram-post flex-auto mx1 xs-hide">
            <amp-instagram data-shortcode="0eAWjtQr70" height="260px" layout="fixed-height">
            </amp-instagram>
          </li>
          <li class="land-see-instagram-post flex-auto mx1 xs-hide sm-hide">
            <amp-instagram data-shortcode="z5zt5BQr9B" height="260px" layout="fixed-height">
            </amp-instagram>
          </li>
        </ul>
      </div>
    </section>

    <section class="land-see-story-nav mx-auto center px1 relative z2">
      <div class="land-see-paging land-see-page-navigation mb4 flex flex-wrap">
        <div class="sm-col sm-col-3 col-6 left-align"><a href="#" class="land-see-prev-page mt2 ml2 inline-block relative">Previous Story</a></div>
        <div class="land-see-story-social flex flex-auto align-top pt1 justify-center">


    <h3 class="land-see-story-social-share-heading">share:</h3>
<ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewbox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewbox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML pin trest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewbox="0 0 43 51"><title>pinterest</title><path d="M8.134 18.748c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4-.2 1.3-.7 2.6-1.2 3.8-.6 1.2-1.3 2.3-2.2 3.2-.8.9-1.8 1.7-3.1 2.2-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1-.6 1.8-.9 3.1-.9 4 0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" class="ampstart-icon ampstart-icon-pinterest"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Google Plus"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="15.5" viewbox="0 0 45 29"><title>Google Plus</title><path d="M45 12.5h-4.1V8.4h-4.1v4.1h-4.1v4h4.1v4.1h4.1v-4.1H45v-4zm-30.7 0v4.9h8.1c-.3 2.1-2.4 6.1-8.1 6.1-4.8 0-8.8-4-8.8-9s4-9 8.8-9c2.8 0 4.7 1.2 5.7 2.2l3.9-3.8C21.4 1.6 18.2.2 14.3.2 6.4.2 0 6.6 0 14.5s6.4 14.3 14.3 14.3c8.3 0 13.8-5.8 13.8-14 0-.9-.1-1.6-.3-2.3H14.3z" class="ampstart-icon ampstart-icon-gplus"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML E-mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewbox="0 0 56 43"><title>email</title><path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path></svg></a>
    </li>
</ul>
        </div>
        <div class="sm-col sm-col-3 col-6 right-align"><a href="#" class="land-see-next-page mt2 mr2 inline-block relative">Next Story</a></div>
      </div>
    </section>


<section class="land-see-popular-content mx-auto">
  <h4 class="land-see-section-header ml1">Recommended</h4>
  <div class="clearfix pt2">
    <amp-list class="center justify-center" src=".&#x2F;api&#x2F;recommended.json" height="460" layout="fixed-height">
      <template type="amp-mustache">
        <amp-position-observer on="enter:recommendedSlideIn.start" layout="nodisplay">
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
  <amp-img alt="A view of the sea, see?" class="land-see-subscribe-bg cover" layout="fixed-height" height="679" src="..&#x2F;..&#x2F;img&#x2F;land-see&#x2F;content&#x2F;khatam-tadayon-107740.jpg">
  
</amp-img>
@endsection