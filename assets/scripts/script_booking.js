var granimInstance = new Granim({
    element: '#logo-canvas',
    direction: 'left-right',
    opacity: [1, 1],
    states : {
        "default-state": {
            gradients: [
                // ['#ff4054', '#ff4054'],
                // ['#ff4054', '#6bc2ff'],
                // ['#6bc2ff', '#6bc2ff'],
                // ['#ff4054', '#ff4054'],
                // ['#ff4054', '#6bc2ff'],
                // ['#6bc2ff', '#6bc2ff']
                ['#ff4054', '#ff4054'],
                ['#ff4054', '#6bc2ff'],
                ['#6bc2ff', '#6bc2ff'],
            ],
            transitionSpeed: 3000
        }
    }
});

  $(function() {
    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 1000,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: false,           // Boolean: Show pager, true or false
        nav: true,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>",   // String: Text for the "previous" button
        nextText: "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
        }); 
  });
