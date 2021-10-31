<!DOCTYPE html>
<html>
    <head>

        <style>
            
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
                $("div").first().css("background-color", "lightgray");
                $("div").last().css("background-color", "lightgray");
                $("p").eq(7).css("background-color", "yellow");
                // $("p").filter(".intro").css("background-color", "yellow");
                $("p").not(".intro").css("background-color", "yellow");
            });            
            
        </script>

    </head>

    <body class="siblings">
        <h1>Welcome to My Homepage</h1>

        <p>This is a paragraph.</p>

        <div style="border: 1px solid black;">
            <p>A paragraph in a div.</p>
            <p>Another paragraph in a div.</p>
        </div>
        <br>

        <div style="border: 1px solid black;">
            <p>A paragraph in another div.</p>
            <p>Another paragraph in another div.</p>
        </div>
        <br>

        <div style="border: 1px solid black;">
            <p>A paragraph in another div.</p>
            <p>Another paragraph in another div.</p>
        </div>
        <br>

        <h1>Welcome to My Homepage</h1>

        <p>My name is Donald (index 7).</p>
        <p class="intro">Donald Duck (index 8).</p>
        <p class="intro">I live in Duckburg (index 9).</p>
        <p>My best friend is Mickey (index 10).</p>
    </body>

</html>