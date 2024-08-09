<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="navBar">
        <h1 id="navBarHeading">Hot Frogs</h1>
        <form action="#" type="post">
            <input type="text" placeholder="Serach on Hot Frogs" id="searchIn">
            <input type="image" src="./../imgs/searchImg.png" alt="Button image" id="imgBtn">
        </form>
        <a href="./../index.php" id="homeBtn">Home</a>
        <a href="#" id="popularVidsBtn">Popular videos</a>
        <a href="#" id="tiers">Tiers</a>
        <button id="loginBtn">Log in</button>
        <button id="singupBtn">Sign up</button>
    </div>
    <div id="form">
        <form action="#" method="post">
            <h2>Log in:</h2>
            <input type="text" name="username" placeholder="Username" id="username"><br>
            <input type="password" name="password" placeholder="Password" id="pass"><br>
            <input type="submit" name="submit" value="Log in" id="sub"><br><br><br><br><br>
        </form>
    </div>
    <a href="#" id="signUpa">You don't have a account?</a>
    <a href="#" id="forgetPassword">Did you forget password?</a>
</body>
<script>
    const signupBtn =document.getElementById("singupBtn");
    signupBtn.addEventListener("click", () => {
        window.location.href = "./../signup/index.php"; 
    });
</script>
<style>
    h2 {
        color: white;
    }
    #signUpa {
        color: blue;
        /*transform: translateX(-310px);*/
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translate(-57px, 140px);
    }
    #forgetPassword {
        color: blue;
        /*transform: translateX(-310px);*/
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translate(-60px, 100px);   
    }
    #username, #pass, #sub {
        width: 300px;
        height: 30px;
        font-size: 20px;
    }
    #username, #pass {
        background-color: rgb(60, 60, 60);
        border-width: 0;
        border-radius: 2%;  
        color: gray;
    }
    #sub {
        background-color: rgb(27, 173, 27);
        border-color: white;
        border-width: 1px;
        border-radius: 2%;
        color:white;
    }
    #form {
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translateY(300px);
        line-height: 50px;
    }
    html, body {
        background-color: rgb(26, 26, 26);
        margin: 0;
        padding: 0;
        font-family: Arial;
    }
    #navBar {
        background-color: rgb(46, 46, 46);
        width: 100%;
        height: 50px;
    }
    #navBarHeading {
        color: white;
        font-size: 20px;
        position: absolute;
        left: 20px;
    }
    #searchIn {
        background-color: rgb(60, 60, 60);
        border-width: 0;
        border-radius: 2%;
        width: 300px;
        height: 30px;
        position: absolute;
        top: 1%;
        left: 200px; 
        color: gray;    
    }
    #imgBtn {
        width: 30px;
        height: 30px;
        position: absolute;
        left: 505px;
        top: 10px;
    }
    #homeBtn, #popularVidsBtn, #tiers {
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 22px;
    }
    #homeBtn {
        position: absolute;
        top: 15px;
        left: 650px;
    }
    #popularVidsBtn {
        position: absolute;
        top: 15px;
        left: 750px;
    }
    #homeBtn:hover{
        text-decoration: underline;
        text-decoration-color: rgb(27, 173, 27);
    }
    #popularVidsBtn:hover{
        text-decoration: underline;
        text-decoration-color: rgb(27, 173, 27);
    }
    #loginBtn {
        position: absolute;
        top: 10px;
        left: 1780px;
        width: 50px;
        height: 30px;
        background-color: rgb(27, 173, 27);
        border-radius: 10%;
        border: solid 1px white;
        color: white;
        cursor: pointer;
    }
    #singupBtn {
        position: absolute;
        top: 10px;
        left: 1850px;
        width: 60px;
        height: 30px;
        border-radius: 10%;
        border: solid 1px white;
        background-color: rgb(19, 19, 19);
        color: white;
        cursor: pointer;
    }
    #tiers {
    position: absolute;
    top: 15px;
    left: 940px;
}
</style>
</html>