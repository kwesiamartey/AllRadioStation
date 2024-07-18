<Html>
    
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
             <audio id='video' controls src="https://21423.live.streamtheworld.com/NOVA_969_AAC48_SC?dist=neweb&pname=TDSdk"></audio>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
                      if(Hls.isSupported()) {
                        var video = document.getElementById('video');
                        var hls = new Hls();
                        hls.loadSource('https://moondigitaledge.radyotvonline.net/karadenizfm/playlist.m3u8?listeningSessionID=64cf845fe6cd8ce3_1389446_T2WR0LRO__0000000v6dw&downloadSessionID=0');
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>