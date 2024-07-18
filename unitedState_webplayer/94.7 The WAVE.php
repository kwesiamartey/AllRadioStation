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
         hls.loadSource('https://prod-3-82-157-108.amperwave.net/audacy-ktwvfmaac-hlsc.m3u8/?source=TuneIn&gdpr=0&us_privacy=1YNY&bundle=tunein.com&lat=37.751&long=-97.822&z=1f2b5092b77b4588a6591993ef0b9443&p=1');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>
