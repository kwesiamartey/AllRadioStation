<?php


   $img_link = "https://structuredappsstreaming.win/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif";
   $audio_link = "https://23693.live.streamtheworld.com/SURIA_FMAAC.aac?key=value&key2=value2&dist=triton-widget&tdsdk=js-2.9&swm=false&pname=tdwidgets&pversion=2.9&banners=300x250%2C728x90&burst-time=15&sbmid=c2493de0-8fe6-4ee9-b417-c568c0ad1a4a";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
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