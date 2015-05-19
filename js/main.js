// Parallax scrolling module. Self initialised
var Parallax = (function() {

    'use strict';

    // userScrollTop is the value used for
    // the parallax animation. Its more
    // accurate since its set by an interval
    // and not by sporadic scroll events
    var userScrollTop; // The scrollTop value in px.

    // This user scroll reference is used to
    // determine when to start or stop the
    // scroll interval.
    var userScrollTopReference;
    var windowHeight = window.innerHeight;
    var parallaxScrollInterval;
    var intervalRunning = false;

    // Elements to animate.
    var rocks       = $('#rocks'),
        logo        = $('#logo'),
        cloudsFront = $('#clouds-front'),
        cloudsBack  = $('#clouds-back'),
        climber     = $('#climber'),
        water       = $('#water'),
        balloon     = $('#balloon');

    // Interval because onscroll fires more randomly.
    var startInterval = function() {
      if ( userScrollTopReference < windowHeight && !intervalRunning ) {
        parallaxScrollInterval = setInterval(function() { updatePage(); }, 17);
        intervalRunning = true;
      }
    };

    var stopInterval = function() {
      clearInterval(parallaxScrollInterval);
      intervalRunning = false;
    };

    // Request animation frame in order to more efficiently
    // do the parallax scrolling animation.
    var updatePage = function() {
      window.requestAnimationFrame(function() {
        translateElements();
      });
    };

    // set the window height
    var calculateWindowHeight = function() {
      windowHeight = window.innerHeight;
    }

    // The main parallax method, fires with
    // the help of requestAnimationFrame.
    var translateElements = function() {
      userScrollTop = document.all ? iebody.scrollTop : pageYOffset;

      // User scrolled through the parallax area, cancel interval
      // Also, cancel interval if the user reaches the top of
      // the page.
      if ( userScrollTop > windowHeight || userScrollTop === 0) {
        stopInterval();
      }

      // The transforms needed for the parallax scrolling effect.
      logo.css({
        'transform': 'translate3d(-50%, ' + (userScrollTop / 2).toFixed(2) + 'px, 0)'
      });

      cloudsFront.css({
        'transform': 'translate3d(0, ' + (-userScrollTop / 20).toFixed(2) + 'px, 0)'
      });

      cloudsBack.css({
        'transform': 'translate3d(0, ' + (userScrollTop / 5).toFixed(2) + 'px, 0)'
      });

      climber.css({
        'transform': 'translate3d(0, ' + (-userScrollTop / 8).toFixed(2) + 'px, 0)'
      });

      water.css({
        'transform': 'translate3d(0, ' + (userScrollTop / 2.5).toFixed(2) + 'px, 0)'
      });

      balloon.css({
        'transform': 'translate3d(0, ' + (- userScrollTop / 2).toFixed(2) + 'px, 0)'
      });
    };

    // Add needed event listeners
    window.addEventListener('resize', calculateWindowHeight);
    window.addEventListener('scroll', function() {
      userScrollTopReference = document.all ? iebody.scrollTop : pageYOffset;
      startInterval();
    });
})();
