<html>
    <body>
        <?php


               $img_link = "http://stnfoundation.com/playstore/usa_logo/839c1ec1ee7a2b106d0c9ca7a5efc005.jpg";
               $audio_link = "http://streaming01.shockmedia.com.ar:8624/stream/;";
               $html = "
                   <body>
       
                     <h1 style='text-align: center;'><img src='$img_link' alt='Girl in a jacket' width='100' height='100'/></h1>
                     <h1 style='text-align: center;'>Radio Continental Tucuman FM 100.1</h1>
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
    </body>
</html>