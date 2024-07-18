<Html>
    
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
              <audio controls
                     src='https://prod-3-81-109-240.amperwave.net/mzmedia-cfzmammp3-ibc2' type="audio/mpeg">
                     Your browser does not support the
              <code>audio</code> element.
</audio>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
                      if(Hls.isSupported()) {
                        var video = document.getElementById('video');
                        var hls = new Hls();
                        hls.loadSource('https://prod-35-247-91-99.wostreaming.net/mzmedia-cfzmammp3-ibc2');
                                      
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>