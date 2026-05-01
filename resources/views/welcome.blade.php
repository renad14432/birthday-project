<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Surprise</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    overflow:hidden;
}

/* 🎬 الفيديو الخلفية */
.bg-video{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-1;
}

/* 💖 الكرت */
.box{
    text-align:center;
    color:white;
    background:rgba(0,0,0,0.4);
    padding:25px;
    border-radius:20px;
    backdrop-filter: blur(8px);
    width:85%;
    max-width:350px;
    position:relative;
    z-index:1;
}

/* الأزرار */
.buttons{
    display:flex;
    flex-direction:column;
    gap:12px;
    margin-top:15px;
    align-items:center;
}

button{
    width:150px;
    padding:12px;
    border:none;
    border-radius:10px;
    font-size:16px;
    cursor:pointer;
}

/* Yes */
.yes{
    background:white;
    color:#ff4d6d;
    font-weight:bold;
}

/* No */
.no{
    background:#333;
    color:white;
    position:absolute;
    transition:0.2s;
}
</style>
</head>

<body>

<!-- 🎬 الفيديو -->
<video autoplay muted loop playsinline class="bg-video">
    <source src="{{ asset('videos/bj.mp4.mp4') }}" type="video/mp4">
</video>

<!-- 💖 الكرت -->
<div class="box">
    <h2>Will you open your surprise? 🎁</h2>

    <div class="buttons">
        <button class="yes" onclick="go()">Yes 💖</button>
    </div>

    <button class="no" id="noBtn">No 😢</button>
</div>

<script>
function go(){
    window.location.href="/birthday";
}

const noBtn = document.getElementById("noBtn");

noBtn.addEventListener("mouseover", moveNo);
noBtn.addEventListener("touchstart", moveNo);

function moveNo(){
    let x = Math.random() * (window.innerWidth - 120);
    let y = Math.random() * (window.innerHeight - 120);

    noBtn.style.left = x + "px";
    noBtn.style.top = y + "px";
}
</script>

</body>
</html>