!function(e){function t(t){for(var n,a,s=t[0],l=t[1],c=t[2],u=0,m=[];u<s.length;u++)a=s[u],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&m.push(o[a][0]),o[a]=0;for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(e[n]=l[n]);for(d&&d(t);m.length;)m.shift()();return r.push.apply(r,c||[]),i()}function i(){for(var e,t=0;t<r.length;t++){for(var i=r[t],n=!0,s=1;s<i.length;s++){var l=i[s];0!==o[l]&&(n=!1)}n&&(r.splice(t--,1),e=a(a.s=i[0]))}return e}var n={},o={74:0},r=[];function a(t){if(n[t])return n[t].exports;var i=n[t]={i:t,l:!1,exports:{}};return e[t].call(i.exports,i,i.exports,a),i.l=!0,i.exports}a.m=e,a.c=n,a.d=function(e,t,i){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(a.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(i,n,function(t){return e[t]}.bind(null,n));return i},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="https://assets.scaler.com/packs/";var s=window.webpackJsonp=window.webpackJsonp||[],l=s.push.bind(s);s.push=t,s=s.slice();for(var c=0;c<s.length;c++)t(s[c]);var d=l;r.push(["T4mF",0,1,3,2,4]),i()}({"+eG8":function(e,t,i){"use strict";t.a={initialize:function(e){document.querySelectorAll('[data-tracking="ga"]').forEach((function(t){(t.getAttribute("data-ga-actions")||"click").split(",").forEach((function(i){t.addEventListener(i,(function(){return function(t,i){if(window.trackGaEvent){var n=t.getAttribute("data-ga-category")||e,o=t.getAttribute("data-ga-action"),r=t.getAttribute("data-ga-label");window.trackGaEvent(n,"".concat(o,"-").concat(i),r)}}(t,i)}))}))})),window.addEventListener("beforeunload",(function(){var e=parseInt(window.performance.now()/6e4,10),t=window.__CURRENT_USER__?window.__CURRENT_USER__.slug:"-1";window.trackGaEvent("time_spent_on_page",window.location.pathname,e,t)}))}}},"0rnE":function(e,t,i){var n,o;
/* @preserve
    _____ __ _     __                _
   / ___// /(_)___/ /___  ____      (_)___
  / (_ // // // _  // -_)/ __/_    / /(_-<
  \___//_//_/ \_,_/ \__//_/  (_)__/ //___/
                              |___/

  Version: 1.7.3
  Author: Nick Piscitelli (pickykneee)
  Website: https://nickpiscitelli.com
  Documentation: http://nickpiscitelli.github.io/Glider.js
  License: MIT License
  Release Date: October 25th, 2018

*/void 0===(o="function"==typeof(n=function(){var e="undefined"!=typeof window?window:this,t=e.Glider=function(t,i){var n=this;if(t._glider)return t._glider;if(n.ele=t,n.ele.classList.add("glider"),n.ele._glider=n,n.opt=Object.assign({},{slidesToScroll:1,slidesToShow:1,resizeLock:!0,duration:.5,easing:function(e,t,i,n,o){return n*(t/=o)*t+i}},i),n.animate_id=n.page=n.slide=0,n.arrows={},n._opt=n.opt,n.opt.skipTrack)n.track=n.ele.children[0];else for(n.track=document.createElement("div"),n.ele.appendChild(n.track);1!==n.ele.children.length;)n.track.appendChild(n.ele.children[0]);n.track.classList.add("glider-track"),n.init(),n.resize=n.init.bind(n,!0),n.event(n.ele,"add",{scroll:n.updateControls.bind(n)}),n.event(e,"add",{resize:n.resize})},i=t.prototype;return i.init=function(e,t){var i=this,n=0,o=0;i.slides=i.track.children,[].forEach.call(i.slides,(function(e){e.classList.add("glider-slide")})),i.containerWidth=i.ele.clientWidth;var r=i.settingsBreakpoint();if(t||(t=r),"auto"===i.opt.slidesToShow||void 0!==i.opt._autoSlide){var a=i.containerWidth/i.opt.itemWidth;i.opt._autoSlide=i.opt.slidesToShow=i.opt.exactWidth?a:Math.floor(a)}"auto"===i.opt.slidesToScroll&&(i.opt.slidesToScroll=Math.floor(i.opt.slidesToShow)),i.itemWidth=i.opt.exactWidth?i.opt.itemWidth:i.containerWidth/i.opt.slidesToShow,[].forEach.call(i.slides,(function(e){e.style.height="auto",e.style.width=i.itemWidth+"px",n+=i.itemWidth,o=Math.max(e.offsetHeight,o)})),i.track.style.width=n+"px",i.trackWidth=n,i.isDrag=!1,i.preventClick=!1,i.opt.resizeLock&&i.scrollTo(i.slide*i.itemWidth,0),(r||t)&&(i.bindArrows(),i.buildDots(),i.bindDrag()),i.updateControls(),i.emit(e?"refresh":"loaded")},i.bindDrag=function(){var e=this;e.mouse=e.mouse||e.handleMouse.bind(e);var t=function(){e.mouseDown=void 0,e.ele.classList.remove("drag"),e.isDrag&&(e.preventClick=!0),e.isDrag=!1},i={mouseup:t,mouseleave:t,mousedown:function(t){t.preventDefault(),t.stopPropagation(),e.mouseDown=t.clientX,e.ele.classList.add("drag")},mousemove:e.mouse,click:function(t){e.preventClick&&(t.preventDefault(),t.stopPropagation()),e.preventClick=!1}};e.ele.classList.toggle("draggable",!0===e.opt.draggable),e.event(e.ele,"remove",i),e.opt.draggable&&e.event(e.ele,"add",i)},i.buildDots=function(){var e=this;if(e.opt.dots){if("string"==typeof e.opt.dots?e.dots=document.querySelector(e.opt.dots):e.dots=e.opt.dots,e.dots){e.dots.innerHTML="",e.dots.classList.add("glider-dots");for(var t=0;t<Math.ceil(e.slides.length/e.opt.slidesToShow);++t){var i=document.createElement("button");i.dataset.index=t,i.setAttribute("aria-label","Page "+(t+1)),i.className="glider-dot "+(t?"":"active"),e.event(i,"add",{click:e.scrollItem.bind(e,t,!0)}),e.dots.appendChild(i)}}}else e.dots&&(e.dots.innerHTML="")},i.bindArrows=function(){var e=this;e.opt.arrows?["prev","next"].forEach((function(t){var i=e.opt.arrows[t];i&&("string"==typeof i&&(i=document.querySelector(i)),i._func=i._func||e.scrollItem.bind(e,t),e.event(i,"remove",{click:i._func}),e.event(i,"add",{click:i._func}),e.arrows[t]=i)})):Object.keys(e.arrows).forEach((function(t){var i=e.arrows[t];e.event(i,"remove",{click:i._func})}))},i.updateControls=function(e){var t=this;e&&!t.opt.scrollPropagate&&e.stopPropagation();var i=t.containerWidth>=t.trackWidth;t.opt.rewind||(t.arrows.prev&&t.arrows.prev.classList.toggle("disabled",t.ele.scrollLeft<=0||i),t.arrows.next&&t.arrows.next.classList.toggle("disabled",Math.ceil(t.ele.scrollLeft+t.containerWidth)>=Math.floor(t.trackWidth)||i)),t.slide=Math.round(t.ele.scrollLeft/t.itemWidth),t.page=Math.round(t.ele.scrollLeft/t.containerWidth);var n=t.slide+Math.floor(Math.floor(t.opt.slidesToShow)/2),o=Math.floor(t.opt.slidesToShow)%2?0:n+1;1===Math.floor(t.opt.slidesToShow)&&(o=0),t.ele.scrollLeft+t.containerWidth>=Math.floor(t.trackWidth)&&(t.page=t.dots?t.dots.children.length-1:0),[].forEach.call(t.slides,(function(e,i){var r=e.classList,a=r.contains("visible"),s=t.ele.scrollLeft,l=t.ele.scrollLeft+t.containerWidth,c=t.itemWidth*i,d=c+t.itemWidth;[].forEach.call(r,(function(e){/^left|right/.test(e)&&r.remove(e)})),r.toggle("active",t.slide===i),n===i||o&&o===i?r.add("center"):(r.remove("center"),r.add([i<n?"left":"right",Math.abs(i-(i<n?n:o||n))].join("-")));var u=Math.ceil(c)>=s&&Math.floor(d)<=l;r.toggle("visible",u),u!==a&&t.emit("slide-"+(u?"visible":"hidden"),{slide:i})})),t.dots&&[].forEach.call(t.dots.children,(function(e,i){e.classList.toggle("active",t.page===i)})),e&&t.opt.scrollLock&&(clearTimeout(t.scrollLock),t.scrollLock=setTimeout((function(){clearTimeout(t.scrollLock),Math.abs(t.ele.scrollLeft/t.itemWidth-t.slide)>.02&&(t.mouseDown||t.scrollItem(t.round(t.ele.scrollLeft/t.itemWidth)))}),t.opt.scrollLockDelay||250))},i.scrollItem=function(e,t,i){i&&i.preventDefault();var n=this,o=e;if(++n.animate_id,!0===t)e*=n.containerWidth,e=Math.round(e/n.itemWidth)*n.itemWidth;else{if("string"==typeof e){var r="prev"===e;if(e=n.opt.slidesToScroll%1||n.opt.slidesToShow%1?n.round(n.ele.scrollLeft/n.itemWidth):n.slide,r?e-=n.opt.slidesToScroll:e+=n.opt.slidesToScroll,n.opt.rewind){var a=n.ele.scrollLeft;e=r&&!a?n.slides.length:!r&&a+n.containerWidth>=Math.floor(n.trackWidth)?0:e}}e=Math.max(Math.min(e,n.slides.length),0),n.slide=e,e=n.itemWidth*e}return n.scrollTo(e,n.opt.duration*Math.abs(n.ele.scrollLeft-e),(function(){n.updateControls(),n.emit("animated",{value:o,type:"string"==typeof o?"arrow":t?"dot":"slide"})})),!1},i.settingsBreakpoint=function(){var t=this,i=t._opt.responsive;if(i){i.sort((function(e,t){return t.breakpoint-e.breakpoint}));for(var n=0;n<i.length;++n){var o=i[n];if(e.innerWidth>=o.breakpoint)return t.breakpoint!==o.breakpoint&&(t.opt=Object.assign({},t._opt,o.settings),t.breakpoint=o.breakpoint,!0)}}var r=0!==t.breakpoint;return t.opt=Object.assign({},t._opt),t.breakpoint=0,r},i.scrollTo=function(t,i,n){var o=this,r=(new Date).getTime(),a=o.animate_id,s=function(){var l=(new Date).getTime()-r;o.ele.scrollLeft=o.ele.scrollLeft+(t-o.ele.scrollLeft)*o.opt.easing(0,l,0,1,i),l<i&&a===o.animate_id?e.requestAnimationFrame(s):(o.ele.scrollLeft=t,n&&n.call(o))};e.requestAnimationFrame(s)},i.removeItem=function(e){var t=this;t.slides.length&&(t.track.removeChild(t.slides[e]),t.refresh(!0),t.emit("remove"))},i.addItem=function(e){var t=this;t.track.appendChild(e),t.refresh(!0),t.emit("add")},i.handleMouse=function(e){var t=this;t.mouseDown&&(t.isDrag=!0,t.ele.scrollLeft+=(t.mouseDown-e.clientX)*(t.opt.dragVelocity||3.3),t.mouseDown=e.clientX)},i.round=function(e){var t=1/(this.opt.slidesToScroll%1||1);return Math.round(e*t)/t},i.refresh=function(e){this.init(!0,e)},i.setOption=function(e,t){var i=this;i.breakpoint&&!t?i._opt.responsive.forEach((function(t){t.breakpoint===i.breakpoint&&(t.settings=Object.assign({},t.settings,e))})):i._opt=Object.assign({},i._opt,e),i.breakpoint=0,i.settingsBreakpoint()},i.destroy=function(){var t=this,i=t.ele.cloneNode(!0),n=function(e){e.removeAttribute("style"),[].forEach.call(e.classList,(function(t){/^glider/.test(t)&&e.classList.remove(t)}))};i.children[0].outerHTML=i.children[0].innerHTML,n(i),[].forEach.call(i.getElementsByTagName("*"),n),t.ele.parentNode.replaceChild(i,t.ele),t.event(e,"remove",{resize:t.resize}),t.emit("destroy")},i.emit=function(t,i){var n=new e.CustomEvent("glider-"+t,{bubbles:!this.opt.eventPropagate,detail:i});this.ele.dispatchEvent(n)},i.event=function(e,t,i){var n=e[t+"EventListener"].bind(e);Object.keys(i).forEach((function(e){n(e,i[e])}))},t})?n.call(t,i,t,e):n)||(e.exports=o)},"1VmZ":function(e,t,i){"use strict";var n=i("UKch"),o=i.n(n),r=i("w9KN");t.a={initialize:function(e){var t=e.registerForm,i=e.formId,n=e.submitCallback,a=e.submittedCallback,s=e.initializeInputs;t.on("initialize",(function(){s&&s()})),t.on("error",(function(e){var n="Something went wrong! Please try again later";if(e&&e.isFromServer){switch(e.response.status){case 429:n="Request rate exceeded, please try after sometime";break;case 422:n="Please fill the required fields";break;case 403:n="Fill the details and click on Get Verification Code first";break;case 409:n="Phone number is linked to a different email";break;case 401:n="Incorrect Verification Code entered";break;case 404:n="Fill the details and click on Get Verification Code first";break;case 400:n=e.responseJson.message,t.setDisabled(!0)}r.a.sendFormSubmitStatus("".concat(i,"-submit"),!1,n)}o()({text:n,className:"toastify-danger"}).showToast(),t.setError(n)})),t.on("submit",(function(){n&&n()})),t.on("submitted",(function(){r.a.sendFormSubmitStatus("".concat(i,"-submit"),!0),t.setDisabled(!0),a&&a()})),t.initialize()}}},"2gut":function(e,t,i){"use strict";var n=i("2bPg"),o=i("BRlI"),r=i("PK3Q"),a=i("Q5Ww"),s=i("00an"),l=i("GTbB"),c=i("YulZ"),d=i("xHbl"),u=i("j7K5"),m=i("w9KN"),p=i("RUa/"),f="Something went wrong! Please try again later",h={register:"_registerHandler","register-otp":"_registerOtpHandler","login-mobile":"_loginMobileHandler","login-otp":"_loginOtpHandler","login-email":"_loginEmailHandler","update-mobile":"_updateMobileHandler","update-mobile-otp":"_updateMobileOtpHandler"},g=function(e){function t(e){var i,o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:3e3,s=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"register",h=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];Object(n.a)(this,t);var g=Object(p.o)()?c.a.modal:c.a.app;return(i=Object(r.a)(this,Object(a.a)(t).call(this,"auth",e,g,s)))._registerHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/",createPayload:function(e){var t=e.product;return{user:{email:e.email,name:e.name,phone_number:e.phone_number,orgyear:e.orgyear,terms_consent:e.terms_consent},type:t,"g-recaptcha-response":e["g-recaptcha-response"]}},validations:{phone_number:"mobile",email:"email"}});l.A.initialize();var n=document.getElementById("register-otp-resend-form"),o=new d.a(n,{method:"POST",endpoint:"/users/v2/account/otp",createPayload:function(e){return{user:e}}});o.initialize();var r=null;if(document.getElementById("register-otp-voice-resend-form")){var a=document.getElementById("register-otp-voice-resend-form");(r=new d.a(a,{method:"POST",endpoint:"/users/v2/account/voice",createPayload:function(e){return{user:e}}})).initialize(),o.on("submitted",(function(){r.reset()})),r.on("submitted",(function(){o.reset()}))}return t.on("initialize",(function(){new l.s("register-mobile")})),t.on("submitted",(function(){m.a.sendFormSubmitStatus("register-form",!0);var e=t.getFieldValue("phone_number"),n=t.getFieldValue("email"),a=i.getForm("register-otp");a.updateField("phone_number",e),a.updateField("email",n),o.updateField("phone_number",e),o.updateField("email",n),o.reset(),r&&(r.updateField("phone_number",e),r.updateField("email",n),r.reset()),i.switchMode("register-otp")})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 429:i="Request rate exceeded, please try after sometime";break;case 422:i="Please fill the required fields";break;case 403:i="Email already registered";break;case 409:i="Phone number already registered";break;case 406:i="Recaptcha error"}m.a.sendFormSubmitStatus("register-form",!1,i)}t.setError(i)})),t.initialize(),t},i._registerOtpHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/verify",createPayload:function(e){return{user:e}}});return t.on("submitted",(function(){m.a.sendFormSubmitStatus("register-otp-form",!0),l.p.close(i._id),u.b.emit("show"),setTimeout((function(){i.complete()}),i._waitTime)})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 404:i="User does not exist!";break;case 401:i="OTP you entered is incorrect"}m.a.sendFormSubmitStatus("register-otp-form",!1,i)}t.setError(i)})),t.initialize(),t},i._loginMobileHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/sessions",createPayload:function(e){return{user:e}},validations:{phone_number:"mobile"}}),n=document.getElementById("login-otp-resend-form"),o=new d.a(n,{method:"POST",endpoint:"/users/v2/sessions",createPayload:function(e){return{user:e}}});o.initialize();var r=null;if(document.getElementById("login-otp-voice-resend-form")){var a=document.getElementById("login-otp-voice-resend-form");(r=new d.a(a,{method:"POST",endpoint:"/users/v2/sessions/voice",createPayload:function(e){return{user:e}}})).initialize(),o.on("submitted",(function(){r.reset()})),r.on("submitted",(function(){o.reset()}))}return t.on("initialize",(function(){new l.s("login-mobile")})),t.on("submitted",(function(){m.a.sendFormSubmitStatus("login-mobile-form",!0);var e=t.getFieldValue("phone_number");i.getForm("login-otp").updateField("phone_number",e),o.updateField("phone_number",e),o.reset(),r&&(r.updateField("phone_number",e),r.reset()),i.switchMode("login-otp")})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 404:i="Mobile number is not associated with any account"}m.a.sendFormSubmitStatus("login-mobile-form",!1,i)}t.setError(i)})),t.initialize(),t},i._loginOtpHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/sessions/verify",createPayload:function(e){return{user:e}}});return t.on("submitted",(function(){m.a.sendFormSubmitStatus("login-otp-form",!0),i.complete()})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 404:i="Mobile number is not associated with any account";break;case 401:i="OTP you entered is incorrect";break;case 422:i="Email unconfirmed. Please confirm your Email."}m.a.sendFormSubmitStatus("login-otp-form",!1,i)}t.setError(i)})),t.initialize(),t},i._loginEmailHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/sign_in/",createPayload:function(e){return{user:e}}});return t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 401:i="Email address or password is incorrect."}m.a.sendFormSubmitStatus("login-email-form",!1,i)}t.setError(i)})),t.on("submitted",(function(){m.a.sendFormSubmitStatus("login-email-form",!0),i.complete(),m.a.sendLoginWithEmail(t.getFieldValue("email"))})),t.initialize(),t},i._updateMobileHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/account/otp",createPayload:function(e){return{user:e}},validations:{phone_number:"mobile"}}),n=document.getElementById("update-mobile-resend-form"),o=new d.a(n,{method:"POST",endpoint:"/users/v2/account/otp",createPayload:function(e){return{user:e}}});o.initialize();var r=null;if(document.getElementById("update-mobile-voice-resend-form")){var a=document.getElementById("update-mobile-voice-resend-form");(r=new d.a(a,{method:"POST",endpoint:"/users/v2/account/voice",createPayload:function(e){return{user:e}}})).initialize(),o.on("submitted",(function(){r.reset()})),r.on("submitted",(function(){o.reset()}))}return t.on("initialize",(function(){new l.s("update-mobile")})),t.on("submitted",(function(){m.a.sendFormSubmitStatus("update-mobile-form",!0);var e=t.getFieldValue("phone_number"),n=t.getFieldValue("email"),a=i.getForm("update-mobile-otp");a.updateField("phone_number",e),a.updateField("email",n),o.updateField("phone_number",e),o.updateField("email",n),o.reset(),r&&(r.updateField("phone_number",e),r.updateField("email",n),r.reset()),i.switchMode("update-mobile-otp")})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 429:i="Request rate exceeded, please try after sometime";break;case 422:i="Please fill the required fields";break;case 403:i="Email already registered";break;case 409:i="Phone number already registered"}m.a.sendFormSubmitStatus("update-mobile-form",!1,i)}t.setError(i)})),t.initialize(),t},i._updateMobileOtpHandler=function(e){var t=new l.h(e,{method:"POST",endpoint:"/users/v2/account/verify",createPayload:function(e){return{user:e}}});return t.on("submitted",(function(){m.a.sendFormSubmitStatus("update-mobile-otp-form",!0),i.complete()})),t.on("error",(function(e){var i=f;if(e&&e.isFromServer){switch(e.response.status){case 404:i="Mobile number is not associated with any account";break;case 403:i="OTP you entered is incorrect";break;case 422:i="Email unconfirmed. Please confirm your Email."}m.a.sendFormSubmitStatus("update-mobile-otp-form",!1,i)}t.setError(i)})),t.initialize(),t},i._waitTime=o,i._setFormHandlers(),h&&i.authFlowInitialize(),i}return Object(s.a)(t,e),Object(o.a)(t,[{key:"setCustomFormHandler",value:function(e,t){this.setFormHandler(e,t)}},{key:"authFlowInitialize",value:function(){this.initialize()}},{key:"_setFormHandlers",value:function(){var e=this;Object.keys(h).forEach((function(t){e.setFormHandler(t,e[h[t]])}))}}]),t}(l.i);t.a=g},"5PnP":function(e,t,i){"use strict";i.d(t,"a",(function(){return o}));var n=i("Tt6i");function o(e,t,i){return(o="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(e,t,i){var o=Object(n.a)(e,t);if(o){var r=Object.getOwnPropertyDescriptor(o,t);return r.get?r.get.call(i):r.value}})(e,t,i||e)}},NOkq:function(e,t,i){"use strict";var n=i("g4DW"),o=i("GTbB"),r=i("w9KN"),a=i("xHbl"),s=i("h7r6"),l=i("UKch"),c=i.n(l);function d(e,t){var i=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),i.push.apply(i,n)}return i}function u(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{};t%2?d(Object(i),!0).forEach((function(t){Object(n.a)(e,t,i[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(i)):d(Object(i)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(i,t))}))}return e}var m=!1,p=!1,f="marketing-form",h=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"click",i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;window.storeEsEvent&&window.storeEsEvent("course-landing-marketing-form-".concat(e),t,i)},g=function(e){var t=document.querySelector("div[data-program]"),i=t?t.getAttribute("data-program"):"academy";return{user:{email:e.email,phone_number:e.phone_number,otp:e.otp,skip_existing_user_check:!0,program:i},type:"course_landing"}},v=function(){new o.s("marketing-form__phone")},b=function(){p||new o.s("marketing-form-submit__phone")};t.a={initialize:function(){document.getElementById(f)&&function(){var e=document.getElementById("".concat(f,"__otp")),t=document.getElementById("".concat(f,"-otp")),i=document.getElementById("".concat(f,"-submit")),n=document.querySelector(".".concat(f,"__otp-hint")),l=new o.i("marketing-form","marketing-form","page","register"),d=document.querySelector("#marketing-form");m="true"===d.getAttribute("data-logged-in"),p="true"===d.getAttribute("data-phone-verified");var y=document.querySelector("div[data-program]"),w=y?y.getAttribute("data-program"):"academy";l.setFormHandler("register",(function(l){var d=a.b.initialize("marketing-form",h),y=d.otpMsgForm,k=d.otpVoiceForm,_=p?"/users/v2/":"/users/v2/account/verify",E=new o.h(l,{method:"POST",endpoint:m?_:"/users/v2/verify",createPayload:g}),S=new o.h(document.getElementById("marketing-form-otp"),{method:m?"PUT":"POST",endpoint:m?"/users/v2/account":"/users/v2/",createPayload:function(e){return{user:u(u({},e),{},{skip_existing_user_check:!0}),type:"marketing","g-recaptcha-response":e["g-recaptcha-response"]}},validations:{phone_number:"mobile",orgyear:"required",email:"email"}});S.addEventListener("invalidfields",(function(e){var t=e[Object.keys(e)[0]];c()({text:t,className:"toastify-danger"}).showToast()}));s.a.initialize({registerForm:E,otpVoiceForm:k,otpMsgForm:y,initializeInputs:v,parentFormId:f,formId:"marketing-form-otp",track:h,otpForm:S,submittedCallback:function(){var e=S.getFieldValue("phone_number");if(e){var t=e.split("-"),i=t[0],n=t[1],o=document.getElementById("input-".concat("marketing-form-submit","__phone-code")),r=document.getElementById("".concat("marketing-form-submit","__phone-number"));o.value=i,r.value=n}},enableOtpForm:function(){t.classList.add("hidden"),i.classList.remove("hidden"),n.classList.remove("hidden")}});s.b.initialize({registerForm:E,formId:f,initializeInputs:b,submitCallback:function(){p||E.updateField("otp",e.value)},submittedCallback:function(){r.a.sendFormSubmitStatus("marketing-form-submit",!0),"academy"===w?window.location.replace("/academy/free-live-class"):window.location.replace("/data-science/explore-dashboard"),p||(E.setDisabled(!0),h("register-step-complete","click",E.getFieldValue("email"))),h("open-dashboard","click")}})})),l.initialize()}()}}},Q37M:function(e,t,i){"use strict";i.d(t,"a",(function(){return a}));var n=i("dOFO"),o=i("qTF4"),r=i("42jw");function a(e){return Object(n.a)(e)||Object(o.a)(e)||Object(r.a)()}},T4mF:function(e,t,i){"use strict";i.r(t);var n=i("+eG8"),o=i("2gut"),r=i("GTbB"),a=i("NOkq");window.addEventListener("load",(function(){r.n.initialize(),a.a.initialize(),r.d.initialize(".people-list-glider","people-list-carousel-parent","dots","glider-prev","glider-next",4,4,1,!1,2,2,1),r.d.initialize(".people-mentor-glider","people-mentor-carousel-parent","dots","glider-prev-mentor","glider-next-mentor",4,4,1,!1,2,2,1),document.getElementById("events-card")&&r.d.initialize(".events-list-glider","events-list-carousel-parent","dots","glider-prev-events","glider-next-events",3,2,1,!1,2,2,1),r.p.initialize(),r.z.initialize(),r.a.initialize(),r.B.initialize(),r.g.initialize(),r.o.initialize(),document.getElementById("auth-modal")&&new o.a("auth-modal",0);var e=new URLSearchParams(window.location.search);if(e){var t=e.get("forceModalOpen"),i=e.get("target");"1"===t&&""!==i&&r.p.open(i)}var s=document.querySelector(".applied-button"),l=document.getElementById("data-science-intake-modal");s&&s.addEventListener("click",(function(){l.classList.add("sr-modal--open")}));var c=document.getElementById("call-back");c&&c.addEventListener("click",(function(){var e=document.getElementById("phone-widget"),t=document.getElementById("widget-icon");e.click(),t.click()})),n.a.initialize("scaler-courses");var d=document.querySelectorAll('[data-action="accordion-toggle"]');d&&0!==d.length&&d.forEach((function(e){return"faq-section-1"!==e.getAttribute("data-target")?e.click():null}))}))},Tt6i:function(e,t,i){"use strict";i.d(t,"a",(function(){return o}));var n=i("Q5Ww");function o(e,t){for(;!Object.prototype.hasOwnProperty.call(e,t)&&null!==(e=Object(n.a)(e)););return e}},UKch:function(e,t,i){
/*!
 * Toastify js 1.8.0
 * https://github.com/apvarun/toastify-js
 * @license MIT licensed
 *
 * Copyright (C) 2018 Varun A P
 */
var n,o;n=this,o=function(e){var t=function(e){return new t.lib.init(e)};function i(e,t){return!(!e||"string"!=typeof t||!(e.className&&e.className.trim().split(/\s+/gi).indexOf(t)>-1))}return t.lib=t.prototype={toastify:"1.8.0",constructor:t,init:function(e){return e||(e={}),this.options={},this.toastElement=null,this.options.text=e.text||"Hi there!",this.options.node=e.node,this.options.duration=0===e.duration?0:e.duration||3e3,this.options.selector=e.selector,this.options.callback=e.callback||function(){},this.options.destination=e.destination,this.options.newWindow=e.newWindow||!1,this.options.close=e.close||!1,this.options.gravity="bottom"===e.gravity?"toastify-bottom":"toastify-top",this.options.positionLeft=e.positionLeft||!1,this.options.position=e.position||"",this.options.backgroundColor=e.backgroundColor,this.options.avatar=e.avatar||"",this.options.className=e.className||"",this.options.stopOnFocus=void 0===e.stopOnFocus||e.stopOnFocus,this.options.onClick=e.onClick,this},buildToast:function(){if(!this.options)throw"Toastify is not initialized";var e=document.createElement("div");if(e.className="toastify on "+this.options.className,this.options.position?e.className+=" toastify-"+this.options.position:!0===this.options.positionLeft?(e.className+=" toastify-left",console.warn("Property `positionLeft` will be depreciated in further versions. Please use `position` instead.")):e.className+=" toastify-right",e.className+=" "+this.options.gravity,this.options.backgroundColor&&(e.style.background=this.options.backgroundColor),this.options.node&&this.options.node.nodeType===Node.ELEMENT_NODE)e.appendChild(this.options.node);else if(e.innerHTML=this.options.text,""!==this.options.avatar){var t=document.createElement("img");t.src=this.options.avatar,t.className="toastify-avatar","left"==this.options.position||!0===this.options.positionLeft?e.appendChild(t):e.insertAdjacentElement("beforeend",t)}if(!0===this.options.close){var i=document.createElement("span");i.innerHTML="&#10006;",i.className="toast-close",i.addEventListener("click",function(e){e.stopPropagation(),this.removeElement(this.toastElement),window.clearTimeout(this.toastElement.timeOutValue)}.bind(this));var n=window.innerWidth>0?window.innerWidth:screen.width;("left"==this.options.position||!0===this.options.positionLeft)&&n>360?e.insertAdjacentElement("afterbegin",i):e.appendChild(i)}if(this.options.stopOnFocus&&this.options.duration>0){const t=this;e.addEventListener("mouseover",(function(t){window.clearTimeout(e.timeOutValue)})),e.addEventListener("mouseleave",(function(){e.timeOutValue=window.setTimeout((function(){t.removeElement(e)}),t.options.duration)}))}return void 0!==this.options.destination&&e.addEventListener("click",function(e){e.stopPropagation(),!0===this.options.newWindow?window.open(this.options.destination,"_blank"):window.location=this.options.destination}.bind(this)),"function"==typeof this.options.onClick&&void 0===this.options.destination&&e.addEventListener("click",function(e){e.stopPropagation(),this.options.onClick()}.bind(this)),e},showToast:function(){var e;if(this.toastElement=this.buildToast(),!(e=void 0===this.options.selector?document.body:document.getElementById(this.options.selector)))throw"Root element is not defined";return e.insertBefore(this.toastElement,e.firstChild),t.reposition(),this.options.duration>0&&(this.toastElement.timeOutValue=window.setTimeout(function(){this.removeElement(this.toastElement)}.bind(this),this.options.duration)),this},hideToast:function(){this.toastElement.timeOutValue&&clearTimeout(this.toastElement.timeOutValue),this.removeElement(this.toastElement)},removeElement:function(e){e.className=e.className.replace(" on",""),window.setTimeout(function(){this.options.node&&this.options.node.parentNode&&this.options.node.parentNode.removeChild(this.options.node),e.parentNode&&e.parentNode.removeChild(e),this.options.callback.call(e),t.reposition()}.bind(this),400)}},t.reposition=function(){for(var e,t={top:15,bottom:15},n={top:15,bottom:15},o={top:15,bottom:15},r=document.getElementsByClassName("toastify"),a=0;a<r.length;a++){e=!0===i(r[a],"toastify-top")?"toastify-top":"toastify-bottom";var s=r[a].offsetHeight;e=e.substr(9,e.length-1),(window.innerWidth>0?window.innerWidth:screen.width)<=360?(r[a].style[e]=o[e]+"px",o[e]+=s+15):!0===i(r[a],"toastify-left")?(r[a].style[e]=t[e]+"px",t[e]+=s+15):(r[a].style[e]=n[e]+"px",n[e]+=s+15)}return this},t.lib.init.prototype=t.lib,t},e.exports?e.exports=o():n.Toastify=o()},VISB:function(e,t,i){"use strict";var n=i("2bPg"),o=i("BRlI"),r=i("PK3Q"),a=i("Q5Ww"),s=i("5PnP"),l=i("00an"),c=i("UKch"),d=i.n(c),u=i("GTbB"),m=60,p=600,f=["primary","bold"],h=function(e){function t(e,i){var o,s=!(arguments.length>2&&void 0!==arguments[2])||arguments[2],l=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];return Object(n.a)(this,t),(o=Object(r.a)(this,Object(a.a)(t).call(this,e,i)))._handleError=function(){o.showErrorToast&&d()({text:"Something went wrong! Reload the page and try again",className:"toastify-danger"}).showToast()},o._handleSubmit=function(){o.showSuccessToast&&d()({text:"You will receive OTP shortly",className:"toastify-info"}).showToast(),o.reset()},o._handleTick=function(){if(o.timeLeft-=1,0===o.timeLeft){var e;clearInterval(o._interval),o.setDisabled(!1),"call"===o._resendElType?o._resendEl.innerHTML="Resend Code via Voice":o._resendEl.innerHTML="Resend Code via Text",(e=o._resendEl.classList).add.apply(e,f)}else{var t=String(o.timeLeft).padStart(2,"0");"call"===o._resendElType?o._resendEl.innerHTML="":o._resendEl.innerHTML="Resend Code in 00:".concat(t)}},o.timeLeft=m,o.otpExpiry=p,o.otpExpiry-=1,o.showErrorToast=s,o.showSuccessToast=l,o}return Object(l.a)(t,e),Object(o.a)(t,[{key:"initialize",value:function(){Object(s.a)(Object(a.a)(t.prototype),"initialize",this).call(this),this._addEventListeners(),this._initializeResendTriggers()}},{key:"reset",value:function(){var e;this._interval&&clearInterval(this._interval),(e=this._resendEl.classList).remove.apply(e,f),this.timeLeft=m,this.setDisabled(!0),this._handleTick(),this._interval=setInterval(this._handleTick,1e3),this._initializeVoiceTriggers()}},{key:"_addEventListeners",value:function(){Object(s.a)(Object(a.a)(t.prototype),"_addEventListeners",this).call(this),this.on("submitted",this._handleSubmit),this.on("error",this._handleError)}},{key:"_initializeResendTriggers",value:function(){var e=this;this._resendEl=document.querySelector('[data-action="otp"][data-form="'.concat(this.id,'"]')),this._resendElType=this._resendEl.getAttribute("data-otp-via"),this._resendEl.addEventListener("click",(function(t){t.preventDefault(),e.submit()}))}},{key:"_initializeVoiceTriggers",value:function(){var e=this;"call"===this._resendElType&&setTimeout((function(){e._resendEl.innerHTML=""}),1e3*this.otpExpiry)}}]),t}(u.h);t.a=h},YN7H:function(e,t,i){var n,o,r;r=function(){function e(e){var t=[];if(0===e.length)return"";if("string"!=typeof e[0])throw new TypeError("Url must be a string. Received "+e[0]);if(e[0].match(/^[^/:]+:\/*$/)&&e.length>1){var i=e.shift();e[0]=i+e[0]}e[0].match(/^file:\/\/\//)?e[0]=e[0].replace(/^([^/:]+):\/*/,"$1:///"):e[0]=e[0].replace(/^([^/:]+):\/*/,"$1://");for(var n=0;n<e.length;n++){var o=e[n];if("string"!=typeof o)throw new TypeError("Url must be a string. Received "+o);""!==o&&(n>0&&(o=o.replace(/^[\/]+/,"")),o=n<e.length-1?o.replace(/[\/]+$/,""):o.replace(/[\/]+$/,"/"),t.push(o))}var r=t.join("/"),a=(r=r.replace(/\/(\?|&|#[^!])/g,"$1")).split("?");return r=a.shift()+(a.length>0?"?":"")+a.join("&")}return function(){return e("object"==typeof arguments[0]?arguments[0]:[].slice.call(arguments))}},e.exports?e.exports=r():void 0===(o="function"==typeof(n=r)?n.call(t,i,t,e):n)||(e.exports=o)},h7r6:function(e,t,i){"use strict";var n=i("kF1o");i.d(t,"a",(function(){return n.a}));var o=i("1VmZ");i.d(t,"b",(function(){return o.a}))},kF1o:function(e,t,i){"use strict";var n=i("UKch"),o=i.n(n),r=i("w9KN"),a=new(i("42uB").a)({phone:{required:!0,type:"mobile",message:"Please enter a valid phone number."}}),s=function(e,t){var i="".concat(t.value||"","-").concat(e.value||"");return!a.check({phone:i})},l=function(e,t,i){return e?e.value&&s(t,i):s(t,i)},c=function(e,t,i,n){e&&i(n,"click",t.getFieldValue("email"))},d=function(e,t){e&&(t?e.classList.add("hidden"):e.classList.remove("hidden"))},u=function(e,t,i){var n=document.getElementById("".concat(t,"-recaptcha")),o=document.getElementById("".concat(t,"__email")),r=document.getElementById("".concat(t,"__phone-number")),a=document.getElementById("input-".concat(t,"__phone-code")),s=document.querySelector(".".concat(t,"__otp-submit"));function u(){l(o,r,a)?(s&&s.classList.remove("is-disabled"),d(n,!1),c(o,e,i,"get-otp-enable")):s&&!s.classList.contains("is-disabled")&&(s&&s.classList.add("is-disabled"),d(n,!0),c(o,e,i,"get-otp-disable"))}(function(e,t){var i=[];return e&&i.push(e),t&&i.push(t),i})(o,r).forEach((function(e){e.addEventListener("blur",(function(){u()}))})),r.addEventListener("input",(function(){u()})),u()};t.a={initialize:function(e){var t=e.otpForm,i=e.registerForm,n=e.otpVoiceForm,a=e.otpMsgForm,s=e.initializeInputs,l=e.parentFormId,d=e.formId,m=e.track,p=e.submittedCallback,f=e.enableOtpForm;t.on("initialize",(function(){s(),u(t,l,m)})),t.on("submitted",(function(){o()({text:"You will receive the verification code shortly",className:"toastify-info"}).showToast(),r.a.sendFormSubmitStatus(d,!0),f(),i.updateField("phone_number",t.getFieldValue("phone_number"));var e=document.getElementById("".concat(l,"__email"));e&&i.updateField("email",t.getFieldValue("email")),n.updateField("phone_number",t.getFieldValue("phone_number")),e&&n.updateField("email",t.getFieldValue("email")),a.updateField("phone_number",t.getFieldValue("phone_number")),e&&a.updateField("email",t.getFieldValue("email")),p&&p(),i.setDisabled(!1),n.reset(),a.reset(),c(e,i,m,"otp-request")})),t.on("error",(function(e){var i="Something went wrong! Please try again later";if(e&&e.isFromServer){switch(e.response.status){case 429:i="Request rate exceeded, please try after sometime";break;case 422:i="Please fill the required fields";break;case 403:i="Email already registered";break;case 406:i="Recaptcha validity has expired,\n            please try refreshing the page";break;case 409:i="Phone number is linked to a different email";break;case 400:i=e.responseJson.message}r.a.sendFormSubmitStatus(d,!1,i)}o()({text:i,className:"toastify-danger"}).showToast(),t.setError(i)})),t.initialize()}}},mgkq:function(e,t,i){"use strict";var n=i("VISB");t.a={initialize:function(e,t){var i=new n.a(document.getElementById("".concat(e,"-msg")),{method:"POST",endpoint:"/users/v2/account/otp",createPayload:function(e){return{user:e}}}),o=new n.a(document.getElementById("".concat(e,"-voice")),{method:"POST",endpoint:"/users/v2/account/voice",createPayload:function(e){return{user:e}}});return i.on("submitted",(function(){t&&t("resend-otp-msg","click",i.getFieldValue("email")),o.reset()})),i.initialize(),o.on("submitted",(function(){t&&t("resend-otp-voice","click",o.getFieldValue("email")),i.reset()})),o.initialize(),{otpMsgForm:i,otpVoiceForm:o}}}},xHbl:function(e,t,i){"use strict";var n=i("VISB");i.d(t,"a",(function(){return n.a}));var o=i("mgkq");i.d(t,"b",(function(){return o.a}))}});