<Html>
    
       <body>
       
        
            <h5 style='text-align: center;'>
              <video controls id='video'></video>>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
         if(Hls.isSupported()) {
         var video = document.getElementById('video');
         var hls = new Hls();
         hls.loadSource('https://astro3.rastream.com/astro-zayan.web.hls/playlist.m3u8?listeningSessionID=6466a3fd007c934c_16738980_1zdWX1i1_MTAzLjIxLjgxLjM6ODA!_000000nJDoQ&downloadSessionID=0&authtoken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDEyNzM1NDIsImlhdCI6MTcwMTE4NzE0Miwib2lkIjoiZXJhLXlvdXR1YmUifQ.JyUGw1L6i95v9wt0uRLDXmAg3tcXi0LH5dsHKFR0VMI&awparams=companionads%3Atrue%3Btags%3Aradioactive%3Bstationid%3Azayan&listenerid=820bb31e08a804cdf0eebb486802a235&lan=%5B%22ms%22%5D&setLanguage=true');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>
