<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal Media Player</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
        }
        .player-wrapper {
            margin-top: 20px;
            width: 100%;
            max-width: 800px;
        }
        video, audio {
            width: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
      
        <input type="text" id="media-url" placeholder="Enter media URL here" hidden />
        <button id="load-media" hidden>Load Media</button>
        <div class="player-wrapper">
            <video id="player" controls></video>
            <audio id="audio-player" controls style="display:none;"></audio>
        </div>
    </div>

    <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = new Plyr('#player');
            const audioPlayer = new Plyr('#audio-player');
            const loadMediaButton = document.getElementById('load-media');
            const mediaUrlInput = document.getElementById('media-url');

              const url = 'https://ice42.securenetsystems.net/KAFN';
                if (url) {
                    const mediaType = getMediaType(url);
                    if (mediaType) {
                        if (mediaType === 'video') {
                            document.getElementById('audio-player').style.display = 'none';
                            document.getElementById('player').style.display = 'block';
                            player.source = {
                                type: 'video',
                                sources: [
                                    {
                                        src: url,
                                        type: `video/${getFileExtension(url)}`
                                    }
                                ]
                            };
                            player.play();
                        } else if (mediaType === 'audio') {
                            document.getElementById('player').style.display = 'none';
                            document.getElementById('audio-player').style.display = 'block';
                            audioPlayer.source = {
                                type: 'audio',
                                sources: [
                                    {
                                        src: url,
                                        type: `audio/${getFileExtension(url)}`
                                    }
                                ]
                            };
                            audioPlayer.play();
                        }
                    } else {
                        alert('Unsupported media type!');
                    }
                } else {
                    alert('Please enter a valid URL.');
                }

            function getMediaType(url) {
                const extension = getFileExtension(url);
              
                const videoExtensions = ['mp4', 'webm', 'ogg', 'm3u8', 'mpeg', 'mpg'];
                const audioExtensions = ['mp3', 'wav', 'ogg', 'aac'];

                if (videoExtensions.includes(extension)) {
                    return 'video';
                } else if (audioExtensions.includes(extension)) {
                    return 'audio';
                } else {
                    return null;
                }
            }

            function getFileExtension(url) {
                return url.split('.').pop().split(/\#|\?/)[0];
            }
        });
    </script>
</body>
</html>

