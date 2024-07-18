
<Html>
    
       <body>
      
             <h5 style='text-align: center;'>
              <video controls  id = "video"</video>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
         if(Hls.isSupported()) {
         var video = document.getElementById('video');
         var hls = new Hls();
         hls.loadSource('https://yleradiolive.akamaized.net/hls/live/2027672/in-YleRadio1/256/variant.m3u8');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>