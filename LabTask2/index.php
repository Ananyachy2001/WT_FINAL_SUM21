<html>
    <head></head>
    <body>
        <form >

            <input id="uname" onkeyup="viewOutput(this)" type="text" placeholder="Username"><br>
            <span id="op"></span> <br>
            <input type="password" placeholder="Password"><br>
        </form>

        <button id="btn_g" onclick="viewGoogle()" >Login with Google</button>
        <form id="g_form" style="display:none">
        <input type="text" placeholder="gmail"><br>
        <input type="text" placeholder="gmail password"><br>

        </form>

        <button onclick="turnOn()" >Turn On</button>
        <img id="bulb" src="pic_bulboff.gif" >
        <button onclick="turnOff()">Turn Off</button>
        <br>
        <span onmouseover="showinfo()" onmouseout="hideinfo()">Aiub</span>
        <p id="info" style="display:none">American International University-Bangladesh, known as AIUB</p>
        <script src="myjs.js" ></script>
    </body>

</html>