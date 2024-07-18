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
         hls.loadSource('https://18373.live.streamtheworld.com/WWWQFMAAC.aac?dist=tg&tdsdk=js-2.9&swm=false&pname=TDSdk&pversion=2.9&banners=none&burst-time=15&sbmid=bea036ba-437c-436c-ac94-a6c9caa99257');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>