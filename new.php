<!DOCTYPE html>
<html>
<head>
    <title>Custom Full Screen Video</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #fullscreen-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            cursor: pointer;
            z-index: 10000;
        }

        #video {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <video id="video" controls>
        <source src="car.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div id="fullscreen-button">Full Screen</div>

    <script>
        var video = document.getElementById("video");
        var fullscreenButton = document.getElementById("fullscreen-button");

        fullscreenButton.addEventListener("click", function() {
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.mozRequestFullScreen) {
                video.mozRequestFullScreen();
            } else if (video.webkitRequestFullscreen) {
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) {
                video.msRequestFullscreen();
            }
        });
    </script>
</body>
</html>
