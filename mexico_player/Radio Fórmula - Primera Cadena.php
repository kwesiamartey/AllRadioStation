<Html>
    
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
              <video id="video" controls type="application/x-mpegURL"></video>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
                      if(Hls.isSupported()) {
                        var video = document.getElementById('video');
                        var hls = new Hls();
                        hls.loadSource('https://mdstrm.com/audio/6102ce7ef33d0b0830ec3adc/live.m3u8');
                                      
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>