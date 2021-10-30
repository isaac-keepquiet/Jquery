<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
               $("#btn1").click(function(){
                   $("#div1").remove();
               });

               $("#btn2").click(function(){
                   $("#div1").empty();
               });

               $("#btn3").click(function(){
                   $("p").remove(".test");
               });

               $("#btn4").click(function(){
                   $("p").remove(".test1, .demo");
               });
            });
            
        </script>

        <style>
            .test1{
                color:red;
                font-size:20px;
            }
            .demo{
                color:green;
                font-size:20px;
            }
        </style>

    </head>

    <body>
        <div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
            This is some text in the div.
            <p>This is a paragraph in the div.</p>
            <p>This is another paragraph in the div.</p>
        </div>
        <br>
        <button id="btn1">Remove div element</button>
        <button id="btn2">Empty the div element</button>

        <P class="test">This is another paragraph.</P>
        <P class="test">This is another paragraph.</P>
        <button id="btn3">Remove all p elements with class="test"</button>

        <p class="test1">This is p element with class="test".</p>
        <p class="test1">This is p element with class="test".</p>
        <p class="demo">This is p element with class="demo".</p>
        <button id="btn4">Remove all p elements with class="test" and class="demo"</button>
    </body>

</html>
