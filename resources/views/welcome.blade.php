<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
    </head>
    <body>
        <a-scene>
                
                <a-assets>
                    <a-asset-item id="test" src="model/Hand.dae"></a-asset-item>
                </a-assets>


                <a-entity id="button-outline" geometry="primitive: ring; 
                                    segmentsTheta: 50; 
                                    thetaStart: 90; 
                                    thetaLength: 0; 
                                    radiusInner: .48;
                                    radiusOuter: .51;"
                            material="color: #fff;
                                    opacity: 0.8;"
                            position="0 .7 -3">
                    <a-animation id="u"
                        begin="outline" attribute="geometry.thetaLength" to="360" dur="1000" fill="both">
                   </a-animation>
                </a-entity>

                <a-entity id="button" onmouseenter="activate()" onmouseleave="deactivate()" onclick="nextScene()" geometry="primitive: circle;
                                        segments: 50;
                                        radius: .45"
                            material=   "color: #000;
                                        opacity: 0.8;"
                            position=   "0 .7 -3">
                <a-mouseenter material= "color: #eee;
                                        opacity: 0.8;">
                </a-mouseenter>
                <a-mouseleave material= "color: #000;
                                        opacity: 0.8;">
                </a-mouseleave>
                    <a-animation attribute="scale" from="0 0 0" to="1 1 1" begin="5500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 -4 0" to="0 .7 -3" begin="5000" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-entity>

                {{-- <a-curvedimage src="img/paua.jpg" radius="5.7" theta-length="50" height="4" rotation="0 100 0" position="0 1.8 0"></a-curvedimage> --}}

                 {{-- <a-curvedimage src="img/Untitled.png" radius="5.7" theta-length="50" height="3" rotation="0 25 0" position="0 4 0" opacity="0.8"></a-curvedimage> --}}

                {{-- <a-image src="img/Untitledcopy.png" height="4" opacity="0.8" position="0 2.8 -3" scale="4">
                    <a-animation attribute="scale" from="1 0 1" to="3 0.75 1" begin="1500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 2.8 -2" begin="1000" dur="1000" fill="both" easing="ease-out"></a-animation>
                    
                </a-image> --}}

                <a-image src="img/back.png" height="4" opacity="0.9" position="0 2.8 -3" scale="4">
                    <a-animation attribute="scale" from="1 0 1" to="2.8 0.75 1" begin="1000" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 2.8 -3" begin="500" dur="1000" fill="both" easing="ease-out"></a-animation>
                </a-image>

                <!-- <a-image src="img/enter.png" height=".5" width=".2" opacity="0.5" position="0 0 -2"  rotation="0 20 0" onclick="location.href='https://www.google.co.nz/webhp?hl=en'">
                    <a-animation attribute="position" from="-1 1 -2" to="-1 1 -2" begin="3000" dur="1000" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="scale" from="1 0 1" to="3 0.75 1" begin="3500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-mouseenter material= "opacity: 0.8;"
                            position=   "0 0 -2">
                </a-mouseenter>
                <a-mouseleave material= "opacity: 0.5;"
                            position=   "-1 1 -2">
                </a-mouseleave>
                </a-image> -->

                <!-- onclick="location.href='https://www.google.co.nz/webhp?hl=en'" -->

                

                

            

                <a-sky id="scene1" src="img/sky4.jpg"></a-sky>
                <a-sky id="scene2" visible="false" src="img/sky5.jpg"></a-sky>

                <a-model scale=".5 .5 .5" src="model/Hand.dae" position="1.2 1 -2" rotation="0 -30 0">
                    <a-animation attribute="position" from="0 5 0" to="1.2 1 -2" begin="4000" dur="1000" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="rotation" to="0 30 0" begin="4000" dur="5000" easing="ease-out"></a-animation>

                </a-model>
                 
                <a-entity cursor="fuse: true; maxDistance: 30; timeout: 500" material="color: #000;">
                </a-entity>

                <a-camera position="0 1.8 1.5" rotation="0 0 0" wasd-controls-enabled="false" fuse="true">
                    <a-animation attribute="rotation" from="0 0 0" to="0 15 10" begin="1000" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 15 10" to="0 -15 -10" begin="2500" dur="1500"  easing="ease"></a-animation>
                    <a-animation attribute="rotation" from="0 -15 -10" to="0 0 0" begin="4000" dur="1500"  easing="ease"></a-animation>
                </a-camera>

                <a-light color="#fff" position="0 1.8 1.5" intensity="2">
                    <a-animation attribute="intensity" from="0" to="2" begin="500" dur="3000" easing="ease"></a-animation>
                </a-light>
        </a-scene>
        <!-- <img src="img/fallback_sky.jpg"> -->

         <script type="text/javascript">

        function nextScene() {
            document.getElementById('scene1').setAttribute('visible', 'false')
            document.getElementById('scene2').setAttribute('visible', 'true')
        }

        function activate() {
            document.querySelector('#button-outline').emit('outline')
            document.getElementById('u').setAttribute('to', '360')
        }

        function deactivate() {
            document.querySelector('#button-outline').emit('outline')
            document.getElementById('u').setAttribute('to', '0')
        }

                
          
        

        
  </script>
            
    </body>
</html>











