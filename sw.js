const s1 = [
    '1.html',
    'working.jpg'

];

// self.addEventListener('install', async event=> {

// //    const cache = await caches.open('skill');
// //    cache.addAll(assats);  
//    event.waitUntil(
//     caches.open(skill).then(function(cache) {
//       return cache.addAll(
//         [
//             '1.html',
//             'offline/working.jpg'
//         ]
//       );
//     })
//   );
// });
self.addEventListener('install',async event => {
    self.skipwaiting();
    const cache = await caches.open('skill');
    cache.addAll(
        [
            '1.html',
            'working.jpg'
        ]
    ); 
 });



// self.addEventListener('activate',event => {
//     console.log('active');
// });


self.addEventListener('fetch', async event => {
     const req = event.request;
     event.respondWith(networkfirst(req));
 });
 async function networkfirst(req){
    // const cache = await caches.open('skill');
     try {
         const res = await fetch(req);
         return res;
     } catch (error) {
         
         return await caches.match('1.html'); 
     }
 }