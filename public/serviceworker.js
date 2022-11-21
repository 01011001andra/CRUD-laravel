const cacheName = "v1";
var cacheAssets = [
    "/offline",
    "/css/app.css",
    "/js/app.js",
    "/images/icons/icon-72x72.png",
    "/images/icons/icon-96x96.png",
    "/images/icons/icon-128x128.png",
    "/images/icons/icon-144x144.png",
    "/images/icons/icon-152x152.png",
    "/images/icons/icon-192x192.png",
    "/images/icons/icon-384x384.png",
    "/images/icons/icon-512x512.png",
];

// Install service worker
self.addEventListener("install", (e) => {
    console.log("Service Worker: Installed");
    e.waitUntil(
        caches
            .open(cacheName)
            .then((cache) => {
                console.log("Service Worker: Caching Files");
                cache.addAll(cacheAssets);
            })
            .then(() => self.skipWaiting())
    );
});

// Activate the service worker
self.addEventListener("activate", (e) => {
    console.log("Service Worker: Activated");

    // Remove old caches
    e.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                // look at all the cacheNames
                cacheNames.map((cache) => {
                    // if the current cache !== cacheName then delete it
                    if (cache !== cacheName) {
                        console.log("Service Worker: Clearing Old Cache");
                        return caches.delete(cache);
                    }
                })
            );
        })
    );
});

// listen for fetch event (HTTP request)
self.addEventListener("fetch", (e) => {
    console.log("Service Worker: Fetching");

    // Offline backup
    // e.respondWith(
    //   // if the user is online, perform a regular HTTP request
    //   fetch(e.request)
    //   // if the HTTP request fails (offline) then serve the assets requested from the cache
    //   .catch(() => caches.match(e.request))
    // )

    // Offline first
    e.respondWith(
        // are the files requested in the cache already?
        caches.match(e.request).then((cachedResponse) => {
            // if yes, then serve files from cache
            if (cachedResponse) {
                console.log("Found in cache!");
                return cachedResponse;
            }
            // else do an HTTP request to the server
            return fetch(e.request);
        })
    );
});
