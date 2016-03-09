<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
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
                {{-- <a-curvedimage src="img/paua.jpg" radius="5.7" theta-length="50" height="4" rotation="0 100 0" position="0 1.8 0"></a-curvedimage> --}}
                 <a-curvedimage src="img/Untitled.png" radius="5.7" theta-length="50" height="3" rotation="0 25 0" position="0 4 0"></a-curvedimage>

                 {{-- <a-image src="img/Untitled.png" width="300" height="175"></a-image> --}}

                 {{-- <a-curvedimage src="img/paua.jpg" radius="5.7" theta-length="50" height="4" rotation="0 25 0" position="0 7 0"></a-curvedimage> --}}

                 {{-- <a-curvedimage src="img/paua.jpg" radius="5.7" theta-length="50" height="4" rotation="0 -50 0" position="0 1.8 0"></a-curvedimage> --}}


                 <a-sky src="img/sky2.jpg"></a-sky>
                 
            
                    <a-camera position="0 1.8 1.5"></a-camera>
        </a-scene>
        <div class="container">
            <div class="content">
                <div class="title">IP Project</div>
            </div>
        </div>
            
    </body>
</html>
