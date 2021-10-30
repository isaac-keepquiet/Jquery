<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn1").click(function(){
                    $("p").append("<b>Appended text</b>.");
                    $("p").prepend("<b>Appended text</b>.");
                });

                $("#btn2").click(function(){
                    $("ol").append("<li>Appended item</li>");
                    $("ol").prepend("<li>Appended item</li>");  
                });

                $("#btn3").click(function(){
                    $("img").before("<b>before</b>");
                });

                $("#btn4").click(function(){
                    $("img").after("<i>before</i>");
                });

                //append和before有啥区别？
            });

            function appendText(){                
                var txt1 = "<p>Text.</p>";                // Create element with HTML
                var txt2 = $("<p></p>").text("Text.");    // Create with jQuery
                var txt3 = document.createElement("p");   // Create with DOM
                txt3.innerHTML = "text.";
                $("body").append(txt1, txt2, txt3);       // Append the new elements
            }
            //这一段代码有几处不明白
            //1、var的含义？
            //2、DOM
        </script>
    </head>

    <body>
        <p>This is a paragraph.</p>
        <p>This is another paragraph.</p>

        <ol>
            <li>List item1</li>
            <li>List item2</li>
            <li>List item3</li>
        </ol>

        <button id="btn1">Append text</button>
        <button id="btn2">Append list items</button>
        <button onclick="appendText()">Append text</button><br>
        <!-- 为什么是 onclick？ -->

        <img src="https://images.unsplash.com/photo-1635417073744-0b09b9ac4dfc?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDd8NnNNVmpUTFNrZVF8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="jQuery" width="100" height="140">
        <br><br>
        <button id="btn3">Insert before</button>
        <button id="btn4">Insert after</button>
    </body>

</html>
