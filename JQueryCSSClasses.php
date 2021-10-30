<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
               $("#btn1").click(function(){
                    $("h1, h2, p").addClass("blue");
                    $("div").addClass("important");
               });

               $("#btn2").click(function(){
                    $("h1, h2, p").removeClass("important");
                    $("div").removeClass("blue");
               });

               $("#btn3").click(function(){
                $("h1, h2, p").toggleClass("important");
                    $("div").toggleClass("blue");
               });
            });;
            
        </script>
    
        <style>
            .important{
                font-weight: bold;
                font-size: xx-large;
            }

            .blue{
                color: blue;
            }
        </style>

    </head>

    <body>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>

        <p>This is a paragraph.</p>
        <p>This is another paragraph.</p>

        <div>This is some important text!</div><br>

        <button id="btn1">Add classes to elements</button> 
        <button id="btn2">Remove classes to elements</button>
        <button id="btn3">Toggle class</button>
    </body>

</html>
