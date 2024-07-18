
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
                        hls.loadSource('https://emf-seg001267.cdnstream1.com/seg001267-h128/playlist.m3u8?listeningSessionID=65b8629a00554596_9710117_hMnokJ2B_MjE2LjIzNS45My4yMDM6ODA!_0000000BTuT&downloadSessionID=0&platform=web&city=tesa&country=ghana&geo_api=de_lat_long&latitude=5.63&longitude=-0.13&region=aa&segment=001267&session_id=1716290730334&visitor_id=018f9ae639cb002222fad587bc980504e001501100bd0&t=1&k=qUmOhEwNpf3_9dXarO8yVbKiYXgy5b6mTta2DhpIP8yBNva4bB8jkmN1iisyOQG5vpGYhZx5vGgdPvw2KKI9twtfTo3XO7coQJXevMSzLyLbvdN6DnVrPZz8JQ1g8-8HI0eg');
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED,function() {
                          video.play();
                      });
                     }
</script>

