<Html>
    
    <head>
        
        <script src="https://cdn.radiantmediatechs.com/rmp/9.15.2/js/rmp.min.js"></script>
        
    </head>
       <body>
       
             <h5 style='text-align: center;'>
                 <img src='https://lornamobileappsdev.uk/9186eb0e475eeff5c6856e8ed43eb31e_w200.gif' alt='Girl in a jacket' width='100' height='100'/>
             </h5>
        
             <h5 style='text-align: center;'>
                <!-- Player container element -->
                <div id="rmp"></div>
             </h5>
       </body>
       
       
       
       <script>
// Streaming source - Live Icecast audio-only in this example
const src = {
  mp3: 'https://radiosolo.ru/radio/volnafm/icecast.audio'
};
const settings = {
  licenseKey: 'your-license-key',
  src: src,
  width: 640,
  // Set up audio-only UI and optimisations
  audioOnly: true,
  // Enables Icecast support
  audioOnlyIcecast: true
};
const rmp = new RadiantMP('rmp');
rmp.init(settings);
</script>
</Html>