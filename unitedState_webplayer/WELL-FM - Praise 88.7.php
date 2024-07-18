
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Stream with Video.js</title>
    <link href="https://vjs.zencdn.net/7.21.0/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/7.21.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.js"></script>
</head>
<body style='background-color: #000;'>
     <h5 style='text-align: center;'>
    <video id="video" class="video-js vjs-default-skin" controls preload="auto" ></video>
    </h5>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = videojs('video');
            player.src({
                src: 'https://ais-sa1.streamon.fm/7015_24k.aac/playlist.m3u8?listeningSessionID=6604e18400998bcd_7329752_zT7HuNX1_NjYuODUuODkuMzM6ODA!_000000GLOqH&downloadSessionID=0&listenerId=beb4382b78a66e50e630ee92ae6c0ce9&aw_0_1st.playerid=esPlayer&aw_0_1st.skey=1718925632',
                type: 'application/x-mpegURL'
            });
            player.play();
        });
    </script>
</body>
</html>