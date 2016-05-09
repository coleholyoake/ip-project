<!DOCTYPE html>
<html>
    <head>
        <title>+NZVR360° | LIVE</title>

        <script src="js/aframe.js"></script>
        <script src="js/aframe-no-click-look-controls.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
        <link href="css/custom.css" rel="stylesheet" type="text/css">

        <style type="text/css">
            form {
                position: absolute;
                top: 1em;
                right: 2em;
                z-index: 999;
            }
        
        </style>
    </head>
    <body>
        <form action="./" class="button2">
            <div class="btn"><input type="submit" value="HOME"></div>
        </form><br>

        <a-scene>
                
                <a-assets>
                    <a-asset-item id="test" src="model/Hand.dae"></a-asset-item>
                </a-assets>

                <a-entity text="text: hello" material="color: #fff333" position="20 0 16"></a-entity>

                <!-- <a-entity id="button-outline" geometry="primitive: ring; 
                                    segmentsTheta: 50; 
                                    thetaStart: 90; 
                                    thetaLength: 0; 
                                    radiusInner: .48;
                                    radiusOuter: .51;"
                            material="color: #fff;
                                    opacity: 0.8;"
                            position="0 .7 -3">
                    <a-animation 
                        begin="fadeIn" attribute="geometry.thetaLength" to="360" dur="500" fill="none">
                   </a-animation>
                   <a-animation 
                        begin="fadeOut" attribute="geometry.thetaLength" from="360" to="0" dur="200">
                   </a-animation>
                </a-entity> -->

                <!-- <a-entity id="button" onclick="location.href='/'" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .45"
                            material=   "color: #fff;
                                        opacity: 0.8;"
                            position=   "0 .7 -3">
                <a-mouseenter material= "color: #c2180f;
                                        opacity: 0.8;"
                            position=   "0 .7 -2.5">
                </a-mouseenter>
                <a-mouseleave material= "color: #fff;
                                        opacity: 0.8;"
                            position=   "0 .7 -3">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="0 .7 -3" begin="2500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity> -->

                <a-entity id="button1" onclick="nextScene1()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #fff;
                                        opacity: .8;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 0 0">
                <a-mouseenter material= "color: #ccc;
                                        opacity: .8;">
                </a-mouseenter>
                <a-mouseleave material= "color: #fff;
                                        opacity: .8;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3400" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="-1.2 1 -3.5" begin="3100" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>

                <a-entity id="button1" onclick="nextScene2()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #fff;
                                        opacity: .8;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 0 0">
                <a-mouseenter material= "color: #ccc;
                                        opacity: .8;">
                </a-mouseenter>
                <a-mouseleave material= "color: #fff;
                                        opacity: .8;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3600" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="-.4 1 -3.5" begin="3100" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>

                <a-entity onclick="nextScene4()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #fff;
                                        opacity: .8;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 0 0">
                <a-mouseenter material= "color: #ccc;
                                        opacity: .8;">
                </a-mouseenter>
                <a-mouseleave material= "color: #fff;
                                        opacity: .8;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3800" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to=".4 1 -3.5" begin="3300" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>

                <a-entity onclick="nextScene3()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #fff;
                                        opacity: .8;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 0 0">
                <a-mouseenter material= "color: #ccc;
                                        opacity: .8;">
                </a-mouseenter>
                <a-mouseleave material= "color: #fff;
                                        opacity: .8;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3800" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="1.2 1 -3.5" begin="3500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>


                <a-image id="graphic1" src="img/live_brooklyn.png" height="4" opacity="1" position="0 2.8 -3">
                    <a-animation attribute="scale" from="1 0 1" to="3.5 0.75 1" begin="2000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 3.5 -5" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                <a-image id="graphic3" visible="false" src="img/live_shapeshifter.png" height="4" opacity="1" position="0 2.8 -3">
                    <a-animation attribute="scale" from="1 0 1" to="3.5 0.75 1" begin="2000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 3.5 -5" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                <a-image id="graphic2" visible="false" src="img/live_witherhills.png" height="4" opacity=".8" position="0 2.8 -3">
                    <a-animation attribute="scale" from="1 0 1" to="3.5 0.75 1" begin="2000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 3.5 -5" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                <a-image id="graphic4" visible="false" src="img/live_foxglacier.png" height="4" opacity=".8" position="0 2.8 -3">
                    <a-animation attribute="scale" from="1 0 1" to="3.5 0.75 1" begin="2000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 3.5 -5" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                <a-sky id="scene1" radius="100" src="img/BrooklynHill2.jpg"></a-sky>
                <a-sky id="scene2" visible="false" src="img/WitherHills.jpg"></a-sky>
                <a-sky id="scene3" visible="false" src="img/shapeshifter.jpg"></a-sky>
                <a-sky id="scene4" visible="false" src="img/foxglacier.jpg"></a-sky>

                <!-- <a-model id="model" scale=".5 .5 .5" visible="false" src="model/Hand.dae" position="1.2 1 -2" rotation="0 -80 0">
                    <a-animation attribute="scale" from="0 0 0" to=".5 .5 .5" begin="1500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="1.2 1 -2" begin="1500" dur="1000" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="rotation" to="0 30 0" begin="1500" dur="5000" easing="ease-out"></a-animation>
                </a-model> -->

                <a-entity id="camera" camera position="0 1.8 3" wasd-controls-enabled="false">
                    <a-entity cursor="fuse: true; maxDistance: 2000; timeout: 500" raycaster geometry="primitive:ring" position="0 0 -2" scale=".03 .03 .03" material="color:red;shader:flat">
                    </a-entity>
                    <a-animation attribute="rotation" from="0 0 0" to="0 15 10" begin="1000" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 15 10" to="0 -15 -10" begin="2500" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 -15 -10" to="0 0 0" begin="4000" dur="1500"  easing="ease"></a-animation>
                </a-entity>

        </a-scene>

    <script type="text/javascript">

        function nextScene1() {
            document.getElementById('scene1').setAttribute('visible', 'false');
            document.getElementById('scene2').setAttribute('visible', 'true');
            document.getElementById('scene3').setAttribute('visible', 'false');
            document.getElementById('scene4').setAttribute('visible', 'false');

            document.getElementById('graphic1').setAttribute('visible', 'false');
            document.getElementById('graphic2').setAttribute('visible', 'true');
            document.getElementById('graphic3').setAttribute('visible', 'false');
            document.getElementById('graphic4').setAttribute('visible', 'false');
            document.getElementById('model').setAttribute('visible', 'false');
        }

        function nextScene2() {
            document.getElementById('scene1').setAttribute('visible', 'false');
            document.getElementById('scene2').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'true');
            document.getElementById('scene4').setAttribute('visible', 'false');

            document.getElementById('graphic1').setAttribute('visible', 'false');
            document.getElementById('graphic2').setAttribute('visible', 'false');
            document.getElementById('graphic3').setAttribute('visible', 'true');
            document.getElementById('graphic4').setAttribute('visible', 'false');
            document.getElementById('model').setAttribute('visible', 'false');
        }

        function nextScene3() {
            document.getElementById('scene1').setAttribute('visible', 'true');
            document.getElementById('scene2').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'false');

            document.getElementById('graphic1').setAttribute('visible', 'true');
            document.getElementById('graphic2').setAttribute('visible', 'false');
            document.getElementById('graphic3').setAttribute('visible', 'false');
            document.getElementById('graphic4').setAttribute('visible', 'false');
            document.getElementById('model').setAttribute('visible', 'false');
        }

        function nextScene4() {
            document.getElementById('scene1').setAttribute('visible', 'false');
            document.getElementById('scene2').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'false');
            document.getElementById('scene4').setAttribute('visible', 'true');

            document.getElementById('graphic1').setAttribute('visible', 'false');
            document.getElementById('graphic2').setAttribute('visible', 'false');
            document.getElementById('graphic3').setAttribute('visible', 'false');
            document.getElementById('graphic4').setAttribute('visible', 'true');
            document.getElementById('model').setAttribute('visible', 'true');
        }

        setTimeout(camera(), 5500);

        function camera() {
            document.getElementById('camera').setAttribute('no-click-look-controls', 'maxyaw:3;maxpitch:.8');
        }
        
    </script>
            
    </body>
</html>











