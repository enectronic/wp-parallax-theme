!function(){for(var n=0,t=["ms","moz","webkit","o"],i=0;i<t.length&&!window.requestAnimationFrame;++i)window.requestAnimationFrame=window[t[i]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[i]+"CancelAnimationFrame"]||window[t[i]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,i){var o=(new Date).getTime(),e=Math.max(0,16-(o-n)),a=window.setTimeout(function(){t(o+e)},e);return n=o+e,a}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(n){clearTimeout(n)})}();var CLICK_EVENT=function(){"use strict";return"ontouchstart"in window?"touchend":"click"}(),Parallax=function(){"use strict";var n,t,i=window.innerHeight,o,e=!1,a=$("#rocks"),r=$("#logo"),s=$("#clouds-front"),l=$("#clouds-back"),c=$("#climber"),d=$("#water"),u=$("#balloon"),m=function(){i>t&&!e&&(o=setInterval(function(){w()},7),e=!0)},f=function(){clearInterval(o),e=!1},w=function(){window.requestAnimationFrame(function(){x()})},g=function(){i=window.innerHeight},x=function(){n=document.all?iebody.scrollTop:pageYOffset,(n>i||0===n)&&f(),r.css({"-webkit-transform":"translate3d(-50%, "+(n/2).toFixed(2)+"px, 0)",transform:"translate3d(-50%, "+(n/2).toFixed(2)+"px, 0)"}),s.css({"-webkit-transform":"translate3d(0, "+(-n/20).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/20).toFixed(2)+"px, 0)"}),l.css({"-webkit-transform":"translate3d(0, "+(n/5).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(n/5).toFixed(2)+"px, 0)"}),c.css({"-webkit-transform":"translate3d(0, "+(-n/8).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/8).toFixed(2)+"px, 0)"}),d.css({"-webkit-transform":"translate3d(0, "+(n/2.5).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(n/2.5).toFixed(2)+"px, 0)"}),u.css({"-webkit-transform":"translate3d(0, "+(-n/2).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/2).toFixed(2)+"px, 0)"})};window.addEventListener("resize",g),window.addEventListener("scroll",function(){ScrollControl.calculateScrollDistance(),t=document.all?iebody.scrollTop:pageYOffset,m()})}(),Navigation=function(){"use strict";var n=$("#navigation__trigger"),t=$("#navigation"),i=function(){n.on(CLICK_EVENT,o)},o=function(){t.toggleClass("navigation--mobile__closed"),n.find("div").toggleClass("navigation__trigger--opened")};return{init:i}}(),ScrollControl=function(){"use strict";var n=5,t=0,i=$("#navigation, .navigation__extras"),o=$(window),e=function(){var i=o.scrollTop()-t;i>n&&a(),-n>i&&r(),t=o.scrollTop()},a=function(){i.addClass("navigation--desktop__closed")},r=function(){i.removeClass("navigation--desktop__closed")};return{calculateScrollDistance:e}}(),SkillSetWidget=function(){"use strict";var n=$(".member__skills__heading"),t=function(){n.on(CLICK_EVENT,function(){i($(this).next(".member__skills__group"))})},i=function(n){n.toggleClass("member__skills__group--opened")};return{init:t}}();$(function(){Navigation.init(),SkillSetWidget.init()});