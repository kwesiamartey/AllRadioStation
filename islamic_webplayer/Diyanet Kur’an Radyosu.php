<?php


   $img_link = "http://stnfoundation.com/playstore/islamic_radio_logo/Diyanet-Kur’an-Radyo.jpg";
   $audio_link = "https://eustr76.mediatriple.net/videoonlylive/mtikoimxnztxlive/broadcast_5e3c14192aa92.smil/playlist.m3u8";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Diyanet-Kur’an-Radyo.jpg</h1>
             <h1 style='text-align: center;'>
                <audio controls>
                  <source src='$audio_link' type='audio/ogg'>
                  <source src='$audio_link' type='audio/mpeg'>
                  Your browser does not support the audio element.
                </audio>
             </h1>
             
       </body>
   ";
   
   echo $html
?>
