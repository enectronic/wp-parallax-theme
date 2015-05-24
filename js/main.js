// Detect the type of click for use
// on the rest of our page in order
// to remove the 300ms delay for touch
// devices.
var CLICK_EVENT = (function() {
  'use strict';

  if ( 'ontouchstart' in window ) {
    return 'touchend'; // Return early
  }

  // Default is click
  return 'click';
})();

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
    var rocks       = document.getElementById('rocks'),
        logo        = document.getElementById('logo'),
        cloudsFront = document.getElementById('clouds-front'),
        cloudsBack  = document.getElementById('clouds-back'),
        climber     = document.getElementById('climber'),
        water       = document.getElementById('water'),
        balloon     = document.getElementById('balloon')

    // Interval because onscroll fires more randomly.
    var startInterval = function() {
      if ( userScrollTopReference < windowHeight && !intervalRunning ) {
        parallaxScrollInterval = setInterval(function() { updatePage(); }, 7);
        intervalRunning = true;
      }
    };

    // Used to stop the interval if the user is either
    // at the top of the page or has scrolled passed
    // the parallax effect.
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
      try {
        logo.style.webkitTransform = 'translate3d(-50%, ' + (userScrollTop / 2).toFixed(2) + 'px, 0)';
        logo.style.transform = 'translate3d(-50%, ' + (userScrollTop / 2).toFixed(2) + 'px, 0)';

        cloudsFront.style.webkitTransform = 'translate3d(0, ' + (-userScrollTop / 20).toFixed(2) + 'px, 0)';
        cloudsFront.style.transform = 'translate3d(0, ' + (-userScrollTop / 20).toFixed(2) + 'px, 0)';

        cloudsBack.style.webkitTransform = 'translate3d(0, ' + (userScrollTop / 5).toFixed(2) + 'px, 0)';
        cloudsBack.style.transform = 'translate3d(0, ' + (userScrollTop / 5).toFixed(2) + 'px, 0)';

        climber.style.webkitTransform = 'translate3d(0, ' + (-userScrollTop / 8).toFixed(2) + 'px, 0)';
        climber.style.transform = 'translate3d(0, ' + (-userScrollTop / 8).toFixed(2) + 'px, 0)';

        water.style.webkitTransform = 'translate3d(0, ' + (userScrollTop / 2.5).toFixed(2) + 'px, 0)';
        water.style.transform = 'translate3d(0, ' + (userScrollTop / 2.5).toFixed(2) + 'px, 0)';

        balloon.style.webkitTransform = 'translate3d('+ (-userScrollTop / 3).toFixed(2) +'px, ' + (- userScrollTop / 2).toFixed(2) + 'px, 0) rotateZ(-'+ 0.05*userScrollTop+'deg)';
        balloon.style.transform = 'translate3d('+ (-userScrollTop / 3).toFixed(2) +'px, ' + (- userScrollTop / 2).toFixed(2) + 'px, 0) rotateZ(-'+ 0.05*userScrollTop+'deg)';
      } catch(e) { /* Silent error */ }
    };

    // Add needed event listeners
    window.addEventListener('resize', calculateWindowHeight);
    window.addEventListener('scroll', function() {
      ScrollControl.calculateScrollDistance();
      userScrollTopReference = document.all ? iebody.scrollTop : pageYOffset;
      startInterval();
    });
})();

// The following module takes care of the navigation
// "hamburger" when needed to.
var Navigation = (function() {

  'use strict';

  // Needed jQuery variables.
  var TRIGGER = document.getElementById('navigation__trigger');
  var TRIGGER_SYMBOL = document.getElementById('navigation__trigger__symbol');
  var NAV = document.getElementById('navigation');

  // Attach event listeners
  var bindUIActions = function() {
    TRIGGER.addEventListener(CLICK_EVENT, toggleNavigation);
  };

  // The main navigation toggle method
  var toggleNavigation = function() {
    if ( NAV.classList.contains('navigation--mobile__closed') ) {
      NAV.classList.remove('navigation--mobile__closed');
    } else {
      NAV.classList.add('navigation--mobile__closed');
    }

    if (TRIGGER_SYMBOL.classList.contains('navigation__trigger--opened')) {
      TRIGGER_SYMBOL.classList.remove('navigation__trigger--opened');
    } else {
      TRIGGER_SYMBOL.classList.add('navigation__trigger--opened');
    }

  };

  // The following is going to be revealed as public.
  return {
    init: bindUIActions
  }

})();

// This module takes care of showing or hiding the menu
// depending on wether the user scrolls up or down.
var ScrollControl = (function() {

  'use strict';

  var treshold = 5;
  var previousScrollDistance = 0;
  var MAIN_NAV = document.getElementById('navigation')
  var NAV_EXTRAS = document.getElementById('navigation__extras')

  // Calculate scroll distance and fire of either
  // showMenu or hideMenu.
  var calculateScrollDistance = function() {
    var diff = document.body.scrollTop - previousScrollDistance;

    if(diff > treshold){
      hideMenu();
    }

    if ( diff < -treshold ) {
      showMenu();
    }

    previousScrollDistance = document.body.scrollTop;
  }

  // Main show/hide methods.
  var hideMenu = function() {
    MAIN_NAV.classList.add('navigation--desktop__closed');
    NAV_EXTRAS.classList.add('navigation--desktop__closed');
  }

  var showMenu = function() {
    MAIN_NAV.classList.remove('navigation--desktop__closed');
    NAV_EXTRAS.classList.remove('navigation--desktop__closed');
  }

  // Revealed publicly
  return {
    // Used by the scroll listener in the parallax module for now.
    calculateScrollDistance: calculateScrollDistance
  }

})();

// This widget/module is only functioning on smaller screen widths.
// It takes care of hiding the list of skills and making them
// toggle-able.
var SkillSetWidget = (function() {

  'use strict';

  var CLICKABLE_HEADINGS = document.querySelectorAll('.member__skills__heading');

  // Attach event listeners.
  var bindUIActions = function() {
    for ( var i = 0; i < CLICKABLE_HEADINGS.length; i++ ) {
      CLICKABLE_HEADINGS[i].addEventListener(CLICK_EVENT, function() {
        toggleSkillSet(this.nextElementSibling);
      });
    }
  }

  // The mains toggleing method.
  var toggleSkillSet = function(group) {
    console.log(group);
    if ( group.classList.contains('member__skills__group--opened') ) {
      group.classList.remove('member__skills__group--opened');
    } else {
      group.classList.add('member__skills__group--opened');
    }
  }

  // Revealed publicly. (window).
  return {
    init: bindUIActions
  }
})();

// On document ready, do the following:
document.addEventListener('DOMContentLoaded', function() {
  Navigation.init();
  SkillSetWidget.init();
});
