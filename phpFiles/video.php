<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zooming Image Video</title>
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Hide scrollbars */
        }

        video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            animation: zoomInOut 4s infinite; /* Adjust the duration as needed */
        }

        @keyframes zoomInOut {
            0%, 100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2); /* Adjust the scale factor for zooming in */
            }
        }
    </style>
</head>

<body>
    <video autoplay loop muted>
        <source src="vid1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
	<p>lorem epsm bnudbubbdf buhbdzbhffdxhb inszusdznszfn jnfzsjfznfjzfsnfzs bjzubvxuivxuibseuhfd</p>
</body>

</html>