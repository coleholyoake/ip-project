<!DOCTYPE html>
<html>
    <head>
        <title>Error 404</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #040b1b;
                display: table;
                font-weight: 100;
                font-family: 'Dosis';
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

            .title h1 {
                font-weight: 100;
                font-size: 72px;
            }
            p {
                margin-bottom: 30px;
            }
            .button1{
                clear: both;
                display: inline-block;
                float: left;
            }
            .btn {
                margin-top: 10px;
                padding: 0;
                border-radius: 10px;
            }
            .btn input {
                border: 2px solid #040b1b;
                border-radius: 10px;
                color: #040b1b;
                text-transform: uppercase;
                background: none;
                padding: .3em 1em;    
                outline: none;
                cursor: pointer;
                transition: all .3s ease-in-out;
                font-size: 16px;
                letter-spacing: .4em;
                font-family: 'Dosis';
            }
            .btn input:hover {
                  background: #040b1b;
                  color: #fff;
            }
            .btn:focus {
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title pull-right"><h1>ERROR 404<h1></div>
                <p>Oops! Nothing to worry, click the link below to get back on track</p>
                <form action="/" class="button">
                    <div class="btn"><input type="submit" value="HOME"></div>
                </form>
            </div>
        </div>
    </body>
</html>