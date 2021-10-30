<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
                $("#btn1").click(function(){
                    var txt = "";
                    txt += "Width of div: " + $("#div1").width() + "</br>";
                    txt += "Height of div: " + $("#div1").height() + "</br>";
                    txt += "Inner width of div: " + $("#div1").innerWidth() + "</br>";
                    txt += "Inner height of div: " + $("#div1").innerHeight() + "</br>";
                    txt += "Outer width of div: " + $("#div1").outerWidth() + "</br>";
                    txt += "Outer height of div: " + $("#div1").outerHeight() + "</br>";
                    txt += "Outer width of div (margin included): " + $("#div1").outerWidth(true) + "</br>";
                    txt += "Outer height of div (margin included): " + $("#div1").outerHeight(true);
                    $("#div1").html(txt);
                    alert(txt);
                });
                //+= mean? and line10 & 11

                $("#btn2").click(function(){
                    $("#div1").width(500).height(500);
                });
            });

            
            
        </script>
    
        <style>
            #div1 {
                height: 300px;
                width: 300px;
                padding: 10px;
                margin: 3px;
                border: 1px solid blue;
                background-color: lightblue;
            }
        </style>

    </head>

    <body>
        <div id="div1"></div>
        <br>
        <button id="btn1">Display dimensions of div</button>
        <button id="btn2">Resize div</button>

        <p>width() - returns the width of an element.</p>
        <p>height() - returns the height of an element.</p>
    </body>

</html>