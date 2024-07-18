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
         hls.loadSource('https://ample.revma.ihrhls.com/zc1209/49_17ubxon25c2jf02/playlist.m3u8?zip=&streamid=1209&pname=live_profile&companionAds=false&dist=iheart&terminalId=159&deviceName=web-mobile&aw_0_1st.playerid=iHeartRadioWebPlayer&listenerId=&clientType=web&profileId=5728875385&aw_0_1st.skey=5728875385&host=webapp.US&playedFrom=157&stationid=1209&territory=US');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>