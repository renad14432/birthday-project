<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Surprise 🎁</title>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<style>
body {
    margin: 0;
    overflow: hidden;
    font-family: Arial;
    text-align: center;
    color: white;
}

/* 🎥 فيديو الخلفية */
#bgVideo {
    position: fixed;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -3;
}

/* 🌑 طبقة غامقة */
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: -2;
}

/* 🎁 شاشة المفاجأة */
#startScreen {
    position: fixed;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #ff4d6d, #ff758f);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 10;
    transition: opacity 1s ease;
}

#startScreen h1 {
    font-size: 28px;
    margin-bottom: 20px;
}

#startBtn {
    padding: 15px 25px;
    border: none;
    border-radius: 12px;
    font-size: 18px;
    cursor: pointer;
    background: white;
    color: #ff4d6d;
    font-weight: bold;
}

/* 💎 الكارد */
.card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 20px;
    width: 85%;
    max-width: 420px;
    opacity: 0;
    transition: 1s;
}

h1 {
    font-size: 28px;
}

#msg {
    font-size: 16px;
    margin-top: 10px;
}
</style>
</head>

<body>



<div class="overlay"></div>

<!-- 🎁 شاشة البداية -->
<div id="startScreen">
    <h1>🎁 You have a surprise</h1>
    <button id="startBtn">Open</button>
</div>

<!-- 💎 المحتوى -->
<div class="card" id="card">
    <h1>Happy Birthday</h1>
    <div id="msg"></div>
</div>

<!-- 🎵 الصوت -->
<audio id="bgMusic" loop>
    <source src="{{ asset('music/birthday.mp3') }}" type="audio/mpeg">
</audio>

<script>

// 🎁 فتح المفاجأة
document.getElementById("startBtn").addEventListener("click", function () {

    // إخفاء شاشة البداية
    document.getElementById("startScreen").style.opacity = "0";

    setTimeout(() => {
        document.getElementById("startScreen").style.display = "none";
    }, 1000);

    // إظهار الكارد
    document.getElementById("card").style.opacity = "1";

    // 🎊 كونفيتي
    boom();
    setInterval(boom, 3500);

    // 💌 رسالة
    startText();

    // 🔊 تشغيل الصوت
    let audio = document.getElementById("bgMusic");
    audio.play();

});

// 🎊 كونفيتي
function boom(){
    confetti({
        particleCount: 80,
        spread: 100,
        origin: { y: 0.6 }
    });
}

// 💌 كتابة حرف حرف
let text = `كل عام وأنت بخيررررررررر يزوني 
 عقبال كل السنين تكون معي أحبك مره ممتنه انك بحياتي `;

let i = 0;
function startText(){
    function typeWriter(){
        if(i < text.length){
            document.getElementById("msg").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, 40);
        }
    }
    typeWriter();
}

</script>

</body>
</html>