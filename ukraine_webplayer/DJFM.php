<?php


   $img_link = "http://stnfoundation.com/playstore/ukraine_logo/fe68c97fa4e5e7021269d46905b389f8.jpg";
   $audio_link = "http://cast.radiogroup.com.ua/djfm96.aac";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>DJFM FM 96.8</h1>
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