<?php

   $img_link = "http://stnfoundation.com/playstore/ukraine_logo/19739d4cad27066a74b3892e18448150.jpg";
   $audio_link = "http://82.207.109.117:8000/;;";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Радіо Незалежність FM 106.7</h1>
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