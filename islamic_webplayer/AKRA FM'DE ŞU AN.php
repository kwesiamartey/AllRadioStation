<?php


   $img_link = "http://stnfoundation.com/playstore/islamic_radio_logo/5e35ec63ba34d30ad290a86207600c86.jpg";
   $audio_link = "https://cdn3.akradyo.net/akracanli2/_definst_/livestream_aac/media-ujsdjhcuw_269947.aac";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>AKRA FM'DE ŞU AN</h1>
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
