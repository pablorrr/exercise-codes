<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>
            JS Bin
        </title>
        <style>
            body {
                padding-top:50px}
        </style>
    </head>
    <body>
        <input type="text" id="text1"/>
        <input type="button" id="button1" value="Add" />
        <input type="button" id="button2" value="Display"/>
        <div id="Result"></div>
        <script>
            var x = 0;
            var array = Array();
           document.querySelector("input[value='Add']").addEventListener("click", function ()
            {
                array[x] = document.getElementById("text1").value;
                alert("Element: " + array[x] + " Added at index " + x);
                x++;
                document.getElementById("text1").value = "";
            });
            
            
            
          document.querySelector('input[value="Display"]').addEventListener("click",  function()
            {
                var e = "<hr/>";
                for (var y=0; y<array.length; y++)
                {
                    e += "Element " + y + " = " + array[y] + "<br/>";
                }
                document.getElementById("Result").innerHTML = e;
            });
        </script>
    </body>
</html>