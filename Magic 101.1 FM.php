
<Html>
    
       <body style='background-color: #000;'>
       
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
                        hls.loadSource('https://n04a-e2.revma.ihrhls.com/zc3328/4_1e25k74w7wcsi02/playlist.m3u8?country=US&site-url=https://www.iheart.com/live/magic-1011-3328/&dist=iheart&locale=en-US&amb-uid=3411779772141257397&rj-tok=AAABj6DUtnsAwU39WVc7_S1wBg&clientType=web&profileid=8612545566&host=webapp.US&an-uid=0&zip=20190&callLetters=KAKQ-FM&rj-ttl=5&streamid=3328&partnertok=eyJraWQiOiJpaGVhcnQiLCJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJsc2lkIjoiY29va2llOjg1NGY5OGU0LWE4ZGEtNDI2OS05ODBlLTFiMjg5MmI2MTZlZSIsImF1ZCI6InRkIiwic3ViIjoiODYxMjU0NTU2NiIsImNvcHBhIjowLCJwcm92aWRlcklkIjoxLCJpc3MiOiJpaGVhcnQiLCJ1c19wcml2YWN5IjoiMVlOTiIsImRpc3QiOiJpaGVhcnQiLCJleHAiOjE3MTY0NzUyNDgsImlhdCI6MTcxNjM4ODg0OCwib21pZCI6MH0.Rohv6SZbByoS2LDuo9guCQ90R1XoFOrV5aBweYz-Wj4&terminalid=159&dyn-uid=8168469095352363089&modTime=1716389506536&eps-uid=AAAHE44-kAsDKQAhmEmfAAFD_wE&mm-uid=6670664d-eb67-4b00-9aae-b64ce66180cf&triton-uid=cookie:854f98e4-a8da-4269-980e-1b2892b616ee&us_privacy=1-N-&devicename=web-desktop&subscription_type=free&territory=US&stationid=3328');
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>

