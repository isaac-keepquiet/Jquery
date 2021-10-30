<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            //$(function(){
            // 文档就绪事件更短的方法
            // });
                // $("p").dblclick(function(){
                //     $(this).hide();
                // });

                // $("p").on("click", function(){
                //     $(this).hide();
                // });

                $("p").on({
                    mouseenter:function(){
                        $(this).css("background-color", "lightgray");
                    },
                    mouseleave:function(){
                        $(this).css("background-color", "lightblue");
                    },
                    click:function(){
                        $(this).css("background-color", "red");
                    }
                });
                //注意on单一事件和多时间语法结构略有不同

                $("button").click(function(){
                    $("p").hide();
                }); 

                $("#p1").mouseenter(function(){
                    alert("You entered p1!");
                });

                $("#p2").mouseleave(function(){
                    alert("Bye! You now leave p2!");
                });

                $("#p3").mousedown(function(){
                    alert("Mouse down over P3!");
                });

                $("#p4").mouseup(function(){
                    alert("Mouse up over P4!");
                });

                $("#p5").hover(function(){
                    alert("You entered p5!");
                },
                function(){
                    alert("Bye! You now leave P5!");
                });

                $("input").focus(function(){
                    $(this).css("background-color", "yellow");
                });
                $("input").blur(function(){
                    $(this).css("background-color", "green");
                });
            });
        </script>
    </head>


    <body>

        <h2>This is a heading</h2>
        <p>If you click on me, I will disappear.</p>
        <p>Click me away!</p>
        <p>Click me too!</p>
        <p>This is a paragraph.</p>
        <p>This is another paragraph.</p>
        <!-- <p id="p1">Enter this paragraph</p> -->
        <!-- <p id="p2">This is a pargraph</p> -->
        <!-- <p id="p3">This isn't a paragraph.</p>
        <p id="p4">This is a paragraph.</p> -->
        <!-- <p id="p5">This isn't a paragraph.</p> -->
        Name: <input type="text" name="funame"><br>
        Email: <input type="text" name="email"><br>

        <button>Click me</button>
    </body>
</html>