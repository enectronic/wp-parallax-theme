!function(){for(var n=0,t=["ms","moz","webkit","o"],i=0;i<t.length&&!window.requestAnimationFrame;++i)window.requestAnimationFrame=window[t[i]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[i]+"CancelAnimationFrame"]||window[t[i]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,i){var e=(new Date).getTime(),o=Math.max(0,16-(e-n)),a=window.setTimeout(function(){t(e+o)},o);return n=e+o,a}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(n){clearTimeout(n)})}();var Parallax=function(){"use strict";var n,t,i=window.innerHeight,e,o=!1,a=$("#rocks"),r=$("#logo"),s=$("#clouds-front"),d=$("#clouds-back"),c=$("#climber"),l=$("#water"),m=$("#balloon"),w=function(){i>t&&!o&&(e=setInterval(function(){u()},7),o=!0)},f=function(){clearInterval(e),o=!1},u=function(){window.requestAnimationFrame(function(){F()})},x=function(){i=window.innerHeight},F=function(){n=document.all?iebody.scrollTop:pageYOffset,(n>i||0===n)&&f(),r.css({"-webkit-transform":"translate3d(-50%, "+(n/2).toFixed(2)+"px, 0)",transform:"translate3d(-50%, "+(n/2).toFixed(2)+"px, 0)"}),s.css({"-webkit-transform":"translate3d(0, "+(-n/20).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/20).toFixed(2)+"px, 0)"}),d.css({"-webkit-transform":"translate3d(0, "+(n/5).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(n/5).toFixed(2)+"px, 0)"}),c.css({"-webkit-transform":"translate3d(0, "+(-n/8).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/8).toFixed(2)+"px, 0)"}),l.css({"-webkit-transform":"translate3d(0, "+(n/2.5).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(n/2.5).toFixed(2)+"px, 0)"}),m.css({"-webkit-transform":"translate3d(0, "+(-n/2).toFixed(2)+"px, 0)",transform:"translate3d(0, "+(-n/2).toFixed(2)+"px, 0)"})};window.addEventListener("resize",x),window.addEventListener("scroll",function(){t=document.all?iebody.scrollTop:pageYOffset,w()})}(),Navigation=function(){var n=$("#navigation__trigger"),t=$("#navigation"),i=function(){n.on("click",e)},e=function(){t.toggleClass("navigation--mobile__closed")};return{init:i}}();$(function(){Navigation.init()});