
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
         hls.loadSource('https://prod-3-89-117-126.amperwave.net/audacy-krthfmaac-hlsc.m3u8/?source=TuneIn&gdpr=0&us_privacy=1YNY&bundle=tunein.com&lat=37.751&long=-97.822&z=63346f774fd3413eb606cfb18380b29f&p=1');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>

