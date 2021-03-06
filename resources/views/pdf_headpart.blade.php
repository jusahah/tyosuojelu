<!DOCTYPE html>
<html>
    <head>
        <title>Työturvallisuussuunnitelma</title>

       
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="http://localhost/lyyti/lyyti/public/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
        <script src="http://localhost/lyyti/lyyti/public/js/bootstrap.js"></script> 

        <!-- include summernote css/js-->
        
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
                font-family: 'Arial';
                font-size: 10px;
            }

            .container {
                background-color: #ddd;
                margin-top: 48px;

            }

            .content {
                padding: 26px;
                text-align: left;
                display: inline-block;
                margin-top: 48px;
                margin-bottom: 4px;
                position: relative;
            }

            .title {
                font-size: 96px;
            }

            p {
                color: #333;
            }

            .documentheader {
                z-index: 99999;
                position: absolute;
                top: -22px;
                left: 0px;
                font-size: 11px;
                color: white;
                background-color: #4C4F53;
                padding: 3px; 
                font-weight: bold;
                display: none;
            }

            .openeditor {
                z-index: 99999;
                position: absolute;
                top: -28px;
                right: 0px;
                color: white;
                background-color: #AC5287;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                display: none;
            }
            .highlightinsert {
                z-index: 99999;
                position: absolute;
                top: -28px;
                right: 126px;
                color: white;
                background-color: #C26565;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                display: none;
            }

            .varita {
                background-color: #C26565;
                width: 100%;
            }

            #valmisbutton:hover{
                background-color: #71843F;
            }
            .riskitable tr td:nth-child(1) {
                width: 30%;
            }
            .riskitable tr td:nth-child(2) {
                width: 8%;
                text-align: center;

            }
            .riskitable tr td:nth-child(3) {
                width: 8%;
                text-align: center;
            }
            .riskitable tr td:nth-child(4) {
                width: 8%;
                text-align: center;
            }  




            .riskitable2 tr td:nth-child(1) {
                width: 30%;
            }
            .riskitable2 tr td:nth-child(2) {
                width: 8%;
                text-align: center;

            }
            .riskitable2 tr td:nth-child(3) {
                width: 30%;
                
            }
            .riskitable2 tr td:nth-child(4) {
                width: 8%;
                text-align: center;
            } 
            .riskitable2 tr td:nth-child(5) {
                width: 8%;
                text-align: center;
            } 
            .riskitable2 tr {
                height: 40px;
            }



            .valintakohdetable tr {
                height: 40px;
            }

            .valintakohdetable tr td:nth-child(1) {
                width: 20%;
            }
            .valintakohdetable tr td:nth-child(2) {
                width: 60%;
            }
            .valintakohdetable tr td:nth-child(3) {
                width: 20%;
            }               

        </style>
    </head>
    <body>  

    {!! $html !!}

    </body>
    </html>