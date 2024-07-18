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
         hls.loadSource('https://ample.revma.ihrhls.com/zc1481/70_17xv3ujharqok02/playlist.m3u8?zip=&streamid=1481&pname=live_profile&companionAds=false&dist=iheart&terminalId=159&deviceName=web-mobile&aw_0_1st.playerid=iHeartRadioWebPlayer&listenerId=73aca09bb3bce64c61edd5aed0314355&clientType=web&profileId=8628487309&aw_0_1st.skey=8628487309&host=webapp.US&playedFrom=157&stationid=1481&territory=US');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>
