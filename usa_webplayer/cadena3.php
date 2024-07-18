<?php


   $img_link = "https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif";
   $audio_link = "https://liveradio.mediainbox.net/radio3.mp3";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Cadena 3 Argentina AM 700</h1>
             <h1 style='text-align: center;'>
         

    <audio
        controls
        src='$audio_link'>
            Your browser does not support the
            <code>audio</code> element.
    </audio>

             </h1>
             
       </body>
   ";
   
   echo $html
?>