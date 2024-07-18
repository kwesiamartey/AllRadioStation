
<Html>
    
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
             <video id="video" controls></video>
             </h5>
       </body>
</Html>
<script src='https://cdn.jsdelivr.net/npm/hls.js@latest'></script>
<script>
                      if(Hls.isSupported()) {
                        var video = document.getElementById('video');
                        var hls = new Hls();
                        hls.loadSource('https://n48a-e2.revma.ihrhls.com/zc3332/72_1mzrmldadt56b02/playlist.m3u8?zip=&rj-ttl=5&streamid=3332&pname=live_profile&companionAds=false&dist=iheart&terminalId=159&deviceName=web-mobile&rj-tok=AAABj6De9yoAGX5nZ4dgPlNR5Q&aw_0_1st.playerid=iHeartRadioWebPlayer&listenerId=4df14f6eef65bf928647aaddee89604e&clientType=web&profileId=8621509938&aw_0_1st.skey=8621509938&host=webapp.US&playedFrom=157&stationid=3332&territory=US');
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>
