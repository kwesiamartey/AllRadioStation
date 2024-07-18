<Html>
    
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
               <video id="videoPlayer" controls autoplay >
                    Your browser does not support the video tag.
                  </video>
                
                  <script>
                    const videoElement = document.getElementById("videoPlayer");
                    const m3u8Url = "https://cbcradiolive.akamaized.net/hls/live/2041057/ES_R2ETR/adaptive_192/chunklist_ao.m3u8";
                
                    // Set the source of the video element to the M3U8 URL
                    videoElement.src = m3u8Url;
                
                    // Handle errors in case the video cannot be loaded or played
                    videoElement.addEventListener("error", (event) => {
                      console.error("Video playback error:", event);
                    });
                  </script>
             </h5>
       </body>
</Html>