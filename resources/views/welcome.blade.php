<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Special Invitation</title>

<style>
body {
    margin: 0;
    overflow: hidden;
    font-family: Arial, sans-serif;
    color: white;
}

/* 🎥 خلفية فيديو */
#bgVideo {
    position: fixed;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -2;
}

/* 🌑 طبقة تغبيش */
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: -1;
}

/* 💎 كرت احترافي */
.card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(12px);
    padding: 30px;
    border-radius: 20px;
    width: 85%;
    max-width: 380px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

/* ✨ عنوان */
h2 {
    margin-bottom: 20px;
    font-size: 20px;
}

/* 🔘 أزرار */
button {
    width: 100%;
    padding: 14px;
    margin: 8px 0;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    cursor: pointer;
}

.yes {
    background: #ff4d6d;
    color: white;
    font-weight: bold;
}

.no {
    background: #444;
    color: white;
    position: absolute;
    transition: all 0.3s ease;
}
</style>
</head>

<body>

<!-- 🎥 فيديو -->
<video autoplay muted loop playsinline id="bgVideo">
    <source src="{{ asset('videos/bj.mp4.mp4') }}" type="video/mp4">
</video>

<div class="overlay"></div>

<!-- 💎 كرت -->
<div class="card">
    <h2>Will you open your surprise? 🎁</h2>

    <button class="yes" onclick="location.href='/birthday'">Yes 💖</button>
    <button class="no" id="noBtn">No 😢</button>
</div>

<script>

// 🏃 زر No يهرب بسلاسة
let noBtn = document.getElementById("noBtn");

noBtn.addEventListener("mouseover", function () {
    let x = Math.random() * (window.innerWidth - 120);
    let y = Math.random() * (window.innerHeight - 120);

    noBtn.style.left = x + "px";
    noBtn.style.top = y + "px";
});

</script>

</body>
</html>