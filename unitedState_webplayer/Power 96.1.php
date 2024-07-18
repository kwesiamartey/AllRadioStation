
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
         hls.loadSource('https://n2fa-e2.revma.ihrhls.com/zc3209/47_mbrp6ppkzjlb02/playlist.m3u8?zip=&rj-ttl=5&streamid=3209&pname=live_profile&companionAds=false&dist=iheart&terminalId=159&deviceName=web-mobile&rj-tok=AAABj6bsw7kAfW7671H5eYZfDA&aw_0_1st.playerid=iHeartRadioWebPlayer&listenerId=627efedb8ef80260651102d73215b4a6&clientType=web&profileId=8627077436&aw_0_1st.skey=8627077436&host=webapp.US&playedFrom=157&stationid=3209&territory=US');
                         
         hls.attachMedia(video);
         hls.on(Hls.Events.MANIFEST_PARSED,function() {
         video.play();
       });
    }
</script>

