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



                {{-- <a-curvedimage src="img/paua.jpg" radius="5.7" theta-length="50" height="4" rotation="0 100 0" position="0 1.8 0"></a-curvedimage> --}}

                 {{-- <a-curvedimage src="img/Untitled.png" radius="5.7" theta-length="50" height="3" rotation="0 25 0" position="0 4 0" opacity="0.8"></a-curvedimage> --}}

                 <a-image src="img/Untitledcopy.png" height="4" opacity="0.8" position="0 3 -3" scale="4">
                    <a-animation attribute="scale" from="1 0 1" to="3 0.75 1" begin="1500" dur="200" fill="both" easing="ease-out"></a-animation>
                    <a-animation attribute="position" from="0 5 0" to="0 3 -2" begin="1000" dur="1000" fill="both" easing="ease-out"></a-animation>
                 </a-image>



                {{-- <a-entity geometry=     "primitive: plane;
                                        width: .6;
                                        height: .2;
                                        translate: 0 0 0;"
                            material=   "color: #d3d3d3;
                                        opacity: 0.8;"
                            position=   "0.4 1.5 0">
                <a-mouseenter material= "color: #fff;
                                        opacity: 0.8;"
                            position=   "0.4 1.5 0.08">
                </a-mouseenter>
                <a-mouseleave material= "color: #d3d3d3;
                                        opacity: 0.8;"
                            position=   "0.4 1.5 0">
                </a-mouseleave>
                </a-entity>

                <a-entity geometry=     "primitive: plane;
                                        width: .6;
                                        height: .2;
                                        translate: 0 0 0;"
                            material=   "color: #d3d3d3;
                                        opacity: 0.8;"
                            position=   "-0.4 1.5 0">
                <a-mouseenter material= "color: #fff;
                                        opacity: 0.8;"
                            position=   "-0.4 1.5 0.08">
                </a-mouseenter>
                <a-mouseleave material= "color: #d3d3d3;
                                        opacity: 0.8;"
                            position=   "-0.4 1.5 0">
                </a-mouseleave>
                </a-entity> --}}

                <a-entity geometry=     "primitive: plane;
                                        width: 1.8;
                                        height: .5;
                                        translate: 0 0 0;"
                            material=   "color: #d3d3d3;
                                        opacity: 0.8;"
                            position=   "0 1.2 -3">
                <a-mouseenter material= "color: #fff;
                                        opacity: 0.8;"
                            position=   "0 1.2 -2.8">
                </a-mouseenter>
                <a-mouseleave material= "color: #c3c3c3;
                                        opacity: 0.8;"
                            position=   "0 1.2 -3">
                </a-mouseleave>
                </a-entity>

                <a-sky src="img/sky4.jpg"></a-sky>

                <a-model scale=".5 .5 .5" src="model/Hand.dae" position="1.2 1 -2" rotation="0 20 0"></a-model>
                 
            
                <a-camera position="0 1.8 1.5" wasd-controls-enabled="false"></a-camera>
                <a-light color="#fff" position="0 1.8 1.5" intensity="2"></a-light>
        </a-scene>
        <img src="img/fallback_sky.jpg">
            
    </body>
</html>
