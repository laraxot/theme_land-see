@verbatim
<section class="land-see-story-categories center items-center">
  <amp-accordion layout="container" disable-session-states="">
    <section expanded="" class="land-see-stories land-see-arts-culture">
      <h3 class="max-width-4 mx-auto">Arts &amp; Culture</h3>
      <div class="max-width-4 mx-auto">
        <amp-list src="./api/arts-culture-accordion.json" height="430" layout="fixed-height">
          <template type="amp-mustache">
            <amp-position-observer on="enter:accordionSlideIn.start" layout="nodisplay">
            </amp-position-observer>
            <ul class="list-reset m0 p0 center flex justify-center">
              {{#land-see-category}}
              <li class="mx1 {{post-classes}}">
                <a href="{{post-url}}" class="text-decoration-none">
                  {{#image}}
                    <amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
                    </amp-img>
                  {{/image}}
                </a>
                <a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
                <h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
                <p class="ampstart-caption pt1 pb3">{{post-copy}}</p>
              </li>
              {{/land-see-category}}
            </ul>
          </template>
        </amp-list>
      </div>
    </section>
    <section class="land-see-stories land-see-design">
      <h3 class="max-width-4 mx-auto">Design</h3>
      <div class="max-width-4 mx-auto">
        <amp-list src="./api/design-accordion.json" height="495" layout="fixed-height">
          <template type="amp-mustache">
            <ul class="list-reset m0 p0 center flex justify-center">
              {{#land-see-category}}
              <li class="mx1 {{post-classes}}">
                <a href="{{post-url}}" class="text-decoration-none">
                  {{#image}}
                    <amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
                    </amp-img>
                  {{/image}}
                </a>
                <a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
                <h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
                <p class="ampstart-caption pt1 pb3">{{post-copy}}</p>
              </li>
              {{/land-see-category}}
            </ul>
          </template>
        </amp-list>
      </div>
    </section>
    <section class="land-see-stories land-see-fashion">
      <h3 class="max-width-4 mx-auto">Fashion</h3>
      <div class="max-width-4 mx-auto">
        <amp-list src="./api/fashion-accordion.json" height="460" layout="fixed-height">
          <template type="amp-mustache">
            <ul class="list-reset m0 p0 center flex justify-center">
              {{#land-see-category}}
              <li class="mx1 {{post-classes}}">
                <a href="{{post-url}}" class="text-decoration-none">
                  {{#image}}
                    <amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
                    </amp-img>
                  {{/image}}
                </a>
                <a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
                <h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
                <p class="ampstart-caption pt1 pb3">{{post-copy}}</p>
              </li>
              {{/land-see-category}}
            </ul>
          </template>
        </amp-list>
      </div>
    </section>
    <section class="land-see-stories land-see-interiors">
      <h3 class="max-width-4 mx-auto">Interiors</h3>
      <div class="max-width-4 mx-auto">
        <amp-list src="./api/interiors-accordion.json" height="430" layout="fixed-height">
          <template type="amp-mustache">
            <ul class="list-reset m0 p0 center flex justify-center">
              {{#land-see-category}}
              <li class="mx1 {{post-classes}}">
                <a href="{{post-url}}" class="text-decoration-none">
                  {{#image}}
                    <amp-img class="land-see-post-image {{classes}}" alt="{{alt-text}}" media="{{media-query}}" width="{{width}}" height="{{height}}" layout="{{layout}}" src="{{src}}">
                    </amp-img>
                  {{/image}}
                </a>
                <a class="land-see-post-category land-see-page-navigation inline-block pt1 underline caps" href="{{post-category-url}}">{{post-category}}</a>
                <h4 class="land-see-post-title ampstart-title-sm pt1"><a class="text-decoration-none" href="{{post-url}}">{{post-title}}</a></h4>
                <p class="ampstart-caption pt1 pb3">{{post-copy}}</p>
              </li>
              {{/land-see-category}}
            </ul>
          </template>
        </amp-list>
      </div>
    </section>
  </amp-accordion>
</section>
@endverbatim