<?php


   $img_link = "http://stnfoundation.com/playstore/usa_logo/LOGO.jpg";
   $audio_link = "http://turadioenvivo.com:11031/stream";
   $html = "
   
       <body>
       
             <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
             
             <h1 style='text-align: center;'>Radio Mitre Corrientes</h1>
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