<amp-animation id="storySlideIn" layout="nodisplay">
      <script type="application/json">
        {
          "duration": ".4s",
          "easing": "ease-in",
          "fill": "both",
          "direction": "alternate",
          "animations": [
            {
              "selector": ".land-see-story",
              "delay": "calc(100ms * index())",
              "keyframes": [
                {"transform": "translateY(0)", "opacity": 1}
              ]
            }
          ]
        }
      </script>
    </amp-animation>
    <amp-animation id="storySlideInMobile" layout="nodisplay">
      <script type="application/json">
        {
          "duration": ".4s",
          "easing": "ease-in",
          "fill": "both",
          "direction": "alternate",
          "animations": [
            {
              "selector": ".land-see-story",
              "delay": "calc(100ms * index())",
              "keyframes": [
                {"transform": "translateY(0)", "opacity": 1}
              ]
            }
          ]
        }
      </script>
    </amp-animation>
    <amp-animation id="backgroundAnimation" layout="nodisplay">
      <script type="application/json">
        {
          "duration": "1s",
          "fill": "both",
          "direction": "alternate",
          "animations": [
            {
              "selector": ".land-see-background-image-left",
              "keyframes": [
                { "transform": "translateY(calc(height('.land-see-subscribe') * -1.2))" }
              ]
            },
            {
              "selector": ".land-see-background-image-right",
              "keyframes": [
                { "transform": "translateY(calc(height('.land-see-subscribe') * 1.2))" }
              ]
            }
          ]
        }
      </script>
    </amp-animation>
    <amp-animation id="subscribeBGParallax" layout="nodisplay">
      <script type="application/json">
        {
          "duration": "1s",
          "fill": "both",
          "direction": "alternate",
          "animations": [
            {
              "selector": ".land-see-subscribe-bg",
              "keyframes": [
                { "transform": "translateY(calc(height('.land-see-subscribe') * -0.4))" }
              ]
            }
          ]
        }
      </script>
    </amp-animation>