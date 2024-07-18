<?php


   $img_link = "http://stnfoundation.com/playstore/islamic_radio_logo/170701139de5eb9f2c5e4c82d1ee5e86.webp";
   $audio_link = "http://wowza.radyogrup.com:4010/;;";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Hedef Radyo FM 91.8</h1>
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