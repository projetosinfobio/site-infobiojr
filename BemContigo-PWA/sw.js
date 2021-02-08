const staticBemContigo = 'site-static-v1';
const dynamicBemContigo = 'site-dynamic-v1';
const assets = [
  "/",
  "/index.html",
  "/css/style.css",
  "/js/app.js",
  "/img/icons/icon-72x72.png",
  "/img/icons/icon-96x96.png",
  "/img/"

]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticBemContigo).then(cache => {
      cache.addAll(assets)
    })
  )
})
self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res || fetch(fetchEvent.request)
    })
  )
})

