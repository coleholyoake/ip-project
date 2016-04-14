<!DOCTYPE html>
<html>
    <head>
        <title>+NZVR360°</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <style>
            html, body {
                height: 100%;
                background-color: #000;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <script src="js/aframe.js"></script>
        <script src="js/aframe-text-component.js"></script>
        <script src="js/aframe-text-component.min.js"></script>
        <script src="js/aframe-no-click-look-controls.min.js"></script>
        
    </head>
    <body>
        <a-scene>
                
                <a-assets>
                    <a-asset-item id="test" src="model/Hand.dae"></a-asset-item>
                </a-assets>

                <a-entity text="text: hello" material="color: #fff333" position="0 .7 -2"></a-entity>

                <a-entity id="button-outline" geometry="primitive: ring; 
                                    segmentsTheta: 50; 
                                    thetaStart: 90; 
                                    thetaLength: 0; 
                                    radiusInner: .48;
                                    radiusOuter: .51;"
                            material="color: #fff;
                                    opacity: 0.7;"
                            position="0 .7 -3">
                    <a-animation 
                        begin="fadeIn" attribute="geometry.thetaLength" to="360" dur="1200" fill="none">
                   </a-animation>
                   <a-animation 
                        begin="fadeOut" attribute="geometry.thetaLength" from="360" to="0" dur="200">
                   </a-animation>
                </a-entity>

                <a-entity id="button" onclick="location.href='/'" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .45"
                            material=   "color: #000;
                                        opacity: 0.7;"
                            position=   "0 .7 -3">
                <a-mouseenter material= "color: #eee;
                                        opacity: 0.7;">
                </a-mouseenter>
                <a-mouseleave material= "color: #000;
                                        opacity: 0.7;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="0 .7 -3" begin="2500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>



                <!-- //////////////////////////////////////////////// -->

                <!-- <a-entity id="button-outline1" geometry="primitive: ring; 
                                    segmentsTheta: 50; 
                                    thetaStart: 90; 
                                    thetaLength: 0; 
                                    radiusInner: .33;
                                    radiusOuter: .36;"
                            material="color: #fff;
                                    opacity: 0.7;"
                            position="-3 2.4 -3"
                            rotation="0 50 0">
                    <a-animation 
                        begin="fadeIn" attribute="geometry.thetaLength" to="360" dur="1200" fill="none">
                   </a-animation>
                   <a-animation 
                        begin="fadeOut" attribute="geometry.thetaLength" from="360" to="0" dur="200">
                   </a-animation>
                </a-entity> -->

                <a-entity id="button1" onclick="nextScene2()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #eee;
                                        opacity: 0.7;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 50 0">
                <a-mouseenter material= "color: #000;
                                        opacity: 0.7;">
                </a-mouseenter>
                <a-mouseleave material= "color: #eee;
                                        opacity: 0.7;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3600" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="-3 2.4 -3" begin="3100" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>

                <a-entity onclick="nextScene3()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .3"
                            material=   "color: #eee;
                                        opacity: 0.7;"
                            position=   "-3.2 4 -3"
                            rotation=   "0 50 0">
                <a-mouseenter material= "color: #000;
                                        opacity: 0.7;">
                </a-mouseenter>
                <a-mouseleave material= "color: #eee;
                                        opacity: 0.7;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="3800" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="-3 1.6 -3" begin="3300" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>


                <a-image src="img/back.png" height="4" opacity="0.9" position="0 2.8 -3" scale="4">
                    <a-animation attribute="scale" from="1 0 1" to="2.8 0.75 1" begin="1000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 2.8 -3" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                
                <!-- onclick="location.href='https://www.google.co.nz/webhp?hl=en'" -->

                

                <a-sky id="scene1" src="img/sky4.jpg"></a-sky>
                <a-sky id="scene2" visible="false" src="img/sky.jpg"></a-sky>
                <a-sky id="scene3" visible="false" src="img/sky5.jpg"></a-sky>

                <a-model scale=".5 .5 .5" src="model/Hand.dae" position="1.2 1 -2" rotation="0 -80 0">
                    <a-animation attribute="scale" from="0 0 0" to=".5 .5 .5" begin="1500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="1.2 1 -2" begin="1500" dur="1000" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="rotation" to="0 30 0" begin="1500" dur="5000" easing="ease-out"></a-animation>

                </a-model>

                <a-entity id="camera" camera position="0 1.8 1.5" wasd-controls-enabled="false">
                    <a-entity cursor="fuse: true; maxDistance: 2000; timeout: 1200" raycaster geometry="primitive:ring" position="0 0 -2" scale=".03 .03 .03" material="color:red;shader:flat">
                    </a-entity>
                    <a-animation attribute="rotation" from="0 0 0" to="0 15 10" begin="1000" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 15 10" to="0 -15 -10" begin="2500" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 -15 -10" to="0 0 0" begin="4000" dur="1500"  easing="ease"></a-animation>
                </a-entity>


                <a-light color="#fff" position="0 1.8 1.5" intensity="2">
                    <a-animation attribute="intensity" from="0" to="2" begin="500" dur="2500" easing="ease"></a-animation>
                </a-light>
        </a-scene>

         <script type="text/javascript">

        function nextScene2() {
            document.getElementById('scene1').setAttribute('visible', 'false');
            document.getElementById('scene2').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'true');
        }

        function nextScene3() {
            document.getElementById('scene1').setAttribute('visible', 'true');
            document.getElementById('scene2').setAttribute('visible', 'false');
            document.getElementById('scene3').setAttribute('visible', 'false');
        }
        

        document.querySelector('#button').addEventListener('mouseenter', function () {
            document.querySelector('#button-outline').emit('fadeIn');
        });

        document.querySelector('#button').addEventListener('mouseleave', function () {
            document.querySelector('#button-outline').emit('fadeOut');
        });



        document.querySelector('#button1').addEventListener('mouseenter', function () {
            document.querySelector('#button-outline1').emit('fadeIn');
        });



        setTimeout(camera(), 5500);


        function camera() {
            document.getElementById('camera').setAttribute('no-click-look-controls', 'maxyaw:2.5;maxpitch:.8');
        }
        


                
          
        

        
  </script>
            
    </body>
</html>











