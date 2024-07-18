<?php


   $img_link = "https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif";
   $audio_link = "https://playerservices.streamtheworld.com/api/livestream-redirect/CLASSICROCK_S01AAC_64.aac?dist=onlineradiobox";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Cidade Rock Brasil</h1>
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