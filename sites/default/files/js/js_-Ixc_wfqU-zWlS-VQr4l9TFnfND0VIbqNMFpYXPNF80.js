/*!
  * domready (c) Dustin Diaz 2014 - License MIT
  */
!function(e,t){typeof module!="undefined"?module.exports=t():typeof define=="function"&&typeof define.amd=="object"?define(t):this[e]=t()}("domready",function(){var e=[],t,n=document,r="DOMContentLoaded",i=/^loaded|^c/.test(n.readyState);return i||n.addEventListener(r,t=function(){n.removeEventListener(r,t),i=1;while(t=e.shift())t()}),function(t){i?t():e.push(t)}})
;
