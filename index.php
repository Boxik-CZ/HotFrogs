<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotfrogs</title>
</head>
<body>
    <div id="navBar">
        <h1 id="navBarHeading">Hot Frogs</h1>
        <form action="#" method="post">
            <input type="text" placeholder="Serach on Hot Frogs" id="searchIn">
            <input type="image" src="./imgs/searchImg.png" alt="Button image" id="imgBtn">
        </form>
        <a href="#" id="homeBtn">Home</a>
        <a href="#" id="popularVidsBtn">Popular videos</a>
        <a href="#" id="tiers">Tiers</a>
        <button id="loginBtn">Log in</button>
        <button id="singupBtn">Sign up</button>
    </div>
    <div id="mainpage">
        <div id="vid1"class="video">
            <img src="./imgs/frog2.jpg" alt="" id="v1i1" class="videoImg">
            <p>Random frog video</p>
        </div>
        <div id="vid2" class="video">
            <img src="./imgs/Frogus.webp" alt="" id="v1i2" class="videoImg">
            <p>Random frog video</p>
        </div>
    </div>
    <form action="./watch/index.php" method="post" id="vid1F">
        <input type="hidden" name="vid1" value="someValue">
        <input type="submit" name="vid1">
    </form>
    <form action="./watch/index.php" method="post" id="vid2F">
        <input type="hidden" name="vid2" value="someValue">
        <input type="submit" name="vid2">
    </form>

</body>
<script>
    const vid1 = document.getElementById("vid1");
    const vid2 = document.getElementById("vid2");
    vid1.addEventListener("click", () => {
        document.getElementById("vid1F").submit();
    });
    vid2.addEventListener("click", () => {
        document.getElementById("vid2F").submit();
    });
</script>
<style>
    #vid1F {
        opacity: 0;
    }
    #mainpage {
        display: grid;
        grid-template-columns: repeat(4,400px);
        grid-template-rows: repeat(5, 300px);
        gap: 10px;
    }
    .videoImg {
        width: 400px;
        height: 225px;
    }
    .video {
        width: 400px;
        height: 300px;
        background-color: rgb(60, 60, 60);
        position: relative;
        top: 10px;
        left: 10px;
        color: white;
        cursor: pointer;
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
        color: white;
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
    #tiers {
    position: absolute;
    top: 15px;
    left: 940px;
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
        border: 0;
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
        border: 0;
        background-color: rgb(19, 19, 19);
        color: white;
        cursor: pointer;
    }
</style>
<script>
    const loginBtn = document.getElementById("loginBtn");
    const signBtn = document.getElementById("singupBtn");
    loginBtn.addEventListener("click", () => {
        window.location.href = "./login/index.php";
    })
    signBtn.addEventListener("click", () => {
        window.location.href = "./signup/index.php";
    })
</script>
</html>