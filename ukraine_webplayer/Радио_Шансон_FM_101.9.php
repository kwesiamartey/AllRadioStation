<?php


  

   $img_link = "http://stnfoundation.com/playstore/ukraine_logo/pacio.png";
   $audio_link = "http://cast.radiogroup.com.ua:8000/shanson32.aac";
   $html = "
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Радио Шансон FM 101.9</h1>
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