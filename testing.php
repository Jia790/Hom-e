
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
        function display() {
            var z = prompt("enter your name...");
            if(z != null) {
                document.getElementById("demo").innerHTML = "thankyou " + z + "..";
                document.getElementById("case").style.visibility = 'block';
            } else {
                document.getElementById("demo").innerHTML = "thankyou";
            }
        }
        </script>
        <title></title>
    </head>
    <body>
        <p id="demo">
            click on the button.....
        </p><button type="button" onclick="display()">submit</button>
        <form>
            <input type="text" id="case" name="myText" style="display:none">
        </form>
    </body>
</html>

