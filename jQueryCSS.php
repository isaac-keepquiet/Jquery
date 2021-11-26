<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

      $(document).ready(function(){
        $("#btn1").click(function(){
          alert("background-color = " + $("p").css("background-color"));
        });

        $("#btn3").click(function(){
          $("p").css({"background-color": "yellow", "font-size": "200%"});
        });
      });;
      
    </script>
    
    <style>

    </style>

  </head>

  <body>
    <h2>This is a heading</h2>

    <p style="background-color:#ff0000">This is a paragraph.</p>
    <p style="background-color:#00ff00">This is a paragraph.</p>
    <p style="background-color:#0000ff">This is a paragraph.</p>
    <p>This is a paragraph.</p>

    <button id="btn1">Return background-color of p</button>
    <!-- <button id="btn2">Set background-color of p</button> -->
    <button id="btn3">Set multiple styles for p</button>
  </body>

</html>
