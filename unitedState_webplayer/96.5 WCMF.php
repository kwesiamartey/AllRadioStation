
<Html>
    
       <body style='background-color: #000;'>
      
             <h5 style='text-align: center;'>
              <video controls auto  id = "video"</video>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
         if(Hls.isSupported()) {
         var video = document.getElementById('video');
         var hls = new Hls();
         hls.loadSource('https://n19a-e2.revma.ihrhls.com/zc7332/25_1lwutbx5jbkmy02/playlist.m3u8?rj-ttl=5&rj-tok=AAABj7ESbUwA71cvGIyQKx5mxw');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>

