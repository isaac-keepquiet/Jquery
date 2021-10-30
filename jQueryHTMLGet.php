<!-- jQuery DOM Manipulation
1.One very important part of jQuery is the possibility to manipulate the DOM.
2.jQuery comes with a bunch of DOM related methods that make it easy to access 
  and manipulate elements and attributes.
DOM = Document Object Model-->

<!DOCTYPE html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                alert("Text: " + $("#test").text());
            });
            $("#btn2").click(function(){
                alert("HTML: " + $("#test").html());
            });

            $("#btn3").click(function(){
                alert("Value: " + $("#test1").val());
            });
            $("#btn4").click(function(){
                alert($("#w3s").attr("href"));
            });
        });
    </script>
</head>

<body>
    <p id="test">This is some <b>bold</b> text in a paragraph.</p>
    
    <button id="btn1">Show Text</button><br>
    <button id="btn2">Show HTML</button>

    <p>Name: <input type="text" id="test1" value="Mickey Mouse"></p>
    <button id="btn3">Show Value</button><br>

    <p><a href="https://www.w3schools.com" id="w3s">W3Schools.com</a></p>
    <button id="btn4">Show href Value</button>
</body>