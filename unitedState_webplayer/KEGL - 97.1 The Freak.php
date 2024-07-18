<!DOCTYPE html>
<html>
<head>
    <title>Audio Player</title>
</head>
<body style="background-color: #000;">
    <h5 style="text-align: center;">
        <audio controls autoplay id="audio"></audio>
    </h5>

    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script>
	    var streamUrl = 'https://ample.revma.ihrhls.com/zc2241/8_1o3gn9f0w5scv02/playlist.m3u8' 
        if (Hls.isSupported()) {
            var audio = document.getElementById('audio');
            var hls = new Hls();
            hls.loadSource(streamUrl);
            hls.attachMedia(audio);
            hls.on(Hls.Events.MANIFEST_PARSED, function() {
                audio.play();
            });
        } else if (audio.canPlayType('application/vnd.apple.mpegurl')) {
            audio.src = streamUrl;
            audio.addEventListener('canplay', function() {
                audio.play();
            });
        }
    </script>
</body>
</html>