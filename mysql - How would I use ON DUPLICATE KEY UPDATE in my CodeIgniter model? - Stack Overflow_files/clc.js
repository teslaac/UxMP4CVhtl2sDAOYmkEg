"use strict";!function(){function n(n,t,e){C.appendChild(W("script",function(r){var o="onreadystatechange",a="onload",c="readyState",i=!1;if(r.async=!0,r.src=n,"function"==typeof t){var u=function(){i||r[c]&&"loaded"!==r[c]&&"complete"!==r[c]||(i=!0,"function"==typeof t&&t(r),r[a]=r[o]=null,e&&r.parentNode.removeChild(r))};r[a]=r[o]=u}}))}function t(){var n=w.StackExchange,t="options",e="user";return n&&n[t]&&n[t][e]&&n[t][e].accountId}function e(n){n=T(j.hash?j.hash.substr(1):"",n||{});var e=n.ac||n.accountId||t();if(e&&(n.ac=e),!n.tags){var r=L();r.length>0&&(n.tags=r.join(";"))}return n.host=j.host.replace(/\.internal$/,""),n}function r(n,t,e){var r=A(n);if(null===r)return function(){};var o=N(),a=setInterval(function(){$(r)&&(clearInterval(a),e(!1,N()-o))},t);return function(){return clearInterval(a)}}function o(n){var t=1,e=2,r=j.hash.indexOf("large=1")!==-1,o=j.hash.indexOf("small=1")!==-1,a=U(),c=!o&&(r||!a||n),i=c?t:e,u=H(y.sb,M),l=[i+"="+u],f=H(y.tlb,M);f&&l.push("5="+f);var s=H(y.mlb,M);return s&&l.push("6="+s),l.join("&")}function a(t,r){var a=!!A("#careersadsdoublehigh"),c=l({},{zones:o(a)}),i=e(c);t&&(i.azt=1),r&&(i.lw=r),"number"==typeof w.innerWidth&&(i.bw=w.innerWidth);var u=R()-(a+0);u>0&&(i.az="1");var f=["zones","ip","ac","eng","prov","tags","theme","at","remote","seed","lw","azt","sysadmin","bw","nocpm","creative","jobview","cpview","ver","host","exp","fallback","cp","az","jc","job"],s=S(i,f),d=g+"?"+s;x=N(),n(d)}function c(n){function t(){r.forEach(D),o.forEach(function(n){return i(n,e[n],c,a)}),"function"==typeof w.clc_after_load&&w.clc_after_load()}var e=n.cr,r=n.st,o=Object.keys(e),a=x?N()-x:0,c="//"+b+"/ct";t()}function i(n,t,e,r){var o=t.cl,a=t.cn,c=t.an,i=t.tr,u=(o||[]).join(" "),l=A("#"+n);l&&(u&&(l.className+=" "+u),l.innerHTML=a.replace("&pt=0","&pt="+(r||0)),l.onmousedown=function(n){for(var t=n.target;"A"!==t.tagName&&t!==l;)t=t.parentNode;if(t!==l&&!/(^|\s+)clc-non-ad(\s+|$)/.test(t.className)){var r=[];c&&r.push("an="+c);var o=[].filter.call(t.attributes,function(n){return/^data-/.test(n.name)});o.length>0&&o.forEach(function(n){var t=n.name.replace(/^data-/,"");r.push(E(t)+"="+E(n.value))}),r.push("tr="+i);var a="";r.length>0&&(a="?"+r.join("&")),t.href=e+a}})}function u(){var n=function(){};U()&&d?n=r("#sidebar "+_,20,a):a(!1,0),O(function(){var t=A(_);$(t)||(t.parentNode.removeChild(t),n(),m&&z.body.appendChild(W("img",function(n){n.src="//"+b+"/to.gif",n.style.display="none"})))},v)}var l=Object.assign||function(n){for(var t=1;t<arguments.length;t++){var e=arguments[t];for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&(n[r]=e[r])}return n},f=window.clc_opts||{},s=f.az,d=void 0===s||s,p=f.kt,v=void 0===p?2e3:p,h=f.tto,m=void 0===h||h,g=f.u,y=f.d,b=f.h,w=window,j=w.location,E=w.encodeURIComponent,k=w.decodeURIComponent,z=w.document,C=z.body,I=z.getElementsByTagName("head")[0],O=w.setTimeout,_="[id^=adzerk].everyonelovesstackoverflow",x=0,N=function(){return(new Date).getTime()},T=function(n,t){return n.split(/\&/g).reduce(function(n,t){var e=t.split("=");return n[k(e[0])]=k(e[1]),n},t||{})},S=function(n,t){return Object.keys(n).filter(function(n){return t.indexOf(n)!==-1}).map(function(t){return E(t)+"="+E(n[t])}).join("&")},$=function(n){return n.innerHTML.replace(/\s+$/g,"")},q=z.querySelectorAll.bind(z),A=z.querySelector.bind(z),B=z.getElementById.bind(z),H=function(n,t){return n.filter(t)[0]},L=function(){return[].map.call(q(".post-taglist .post-tag"),function(n){return n.textContent})},M=function(n){return!!B(n)},R=function(){return q(_).length},U=function(){return R()>0},W=function(n,t){var e=z.createElement(n);return t&&t(e),e},D=void 0;D=function(n){I.appendChild(W("link",function(t){t.type="text/css",t.rel="stylesheet",t.href=n}))},w.clc=l(window.clc||{},{init:c,load:u,ls:n,as:D,tags:L}),window.clc_init&&window.clc_init.forEach&&window.clc_init.forEach(function(n){return n()})}();