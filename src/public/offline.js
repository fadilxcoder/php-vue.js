"use strict";var cacheVersion=7008,currentCache={offline:"offline-cache"+cacheVersion};const offlineUrl="offline.html";this.addEventListener("install",e=>{e.waitUntil(caches.open(currentCache.offline).then(function(e){return e.addAll(["./assets/images/helifox-logo.png","./favicon.ico",offlineUrl])}))}),this.addEventListener("fetch",e=>{"navigate"===e.request.mode||"GET"===e.request.method&&e.request.headers.get("accept").includes("text/html")?e.respondWith(fetch(e.request.url).catch(e=>caches.match(offlineUrl))):e.respondWith(caches.match(e.request).then(function(t){return t||fetch(e.request)}))});