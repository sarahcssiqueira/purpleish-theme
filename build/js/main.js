/*! For license information please see main.js.LICENSE.txt */
!function(){"use strict";var t={"./assets/src/js/counter.js":function(t,e,n){function s(){document.querySelectorAll(".counter-target").forEach((t=>{t.innerText="0";const e=()=>{const n=+t.getAttribute("data-target"),s=+t.innerText,r=n/500;s<n?(t.innerText=`${Math.ceil(s+r)}`,setTimeout(e,10)):t.innerText=n};e()}))}n.r(e),n.d(e,{default:function(){return s}})},"./assets/src/js/menu.js":function(t,e,n){function s(){const t=document.getElementById("nav-mobile"),e=document.getElementById("toogle-button");e.addEventListener("click",(()=>{"0%"===t.style.right?t.style.right="-100%":t.style.right="0%"})),e.addEventListener("click",(()=>{"mobile-button active"===e.classList.value?e.classList.value="mobile-button":e.classList.value="mobile-button active"}))}n.r(e),n.d(e,{default:function(){return s}})},"./assets/src/scss/index.scss":function(t,e,n){n.r(e)}},e={};function n(s){var r=e[s];if(void 0!==r)return r.exports;var o=e[s]={exports:{}};return t[s](o,o.exports,n),o.exports}n.d=function(t,e){for(var s in e)n.o(e,s)&&!n.o(t,s)&&Object.defineProperty(t,s,{enumerable:!0,get:e[s]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var s={};!function(){n.r(s);n("./assets/src/scss/index.scss");var t=n("./assets/src/js/counter.js");(0,n("./assets/src/js/menu.js").default)(),(0,t.default)()}()}();
//# sourceMappingURL=main.js.map