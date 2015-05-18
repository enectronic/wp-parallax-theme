var Parallax = (function() {

    'use strict';

    var top; // The scrollTop value in px.

    // Elements to animate.
    var rocks       = $('#rocks'),
        logo        = $('#logo'),
        cloudsFront = $('#clouds-front'),
        cloudsBack  = $('#clouds-back'),
        climber     = $('#climber'),
        water       = $('#water'),
        balloon     = $('#balloon');

    // Interval because onscroll fires more randomly.
    var scrollIntervalID = setInterval(function() { updatePage(); }, 17);

    var updatePage = function() {
      window.requestAnimationFrame(function() {
        translateElements();
      });
    };

    // The main parallax method, fires with
    // the help of requestAnimationFrame.
    var translateElements = function() {
        top = $(window).scrollTop();

        logo.css({
          'transform': 'translate3d(-50%, ' + (top / 2).toFixed(2) + 'px, 0)'
        });

        cloudsFront.css({
          'transform': 'translate3d(0, ' + (-top / 20).toFixed(2) + 'px, 0)'
        });

        cloudsBack.css({
          'transform': 'translate3d(0, ' + (top / 5).toFixed(2) + 'px, 0)'
        });

        climber.css({
          'transform': 'translate3d(0, ' + (-top / 8).toFixed(2) + 'px, 0)'
        });

        water.css({
          'transform': 'translate3d(0, ' + (top / 2.5).toFixed(2) + 'px, 0)'
        });

        balloon.css({
          'transform': 'translate3d(0, ' + (- top / 2).toFixed(2) + 'px, 0)'
        });
    };
})();
