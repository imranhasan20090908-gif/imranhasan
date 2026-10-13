
<?php
$imran = "Imran";
$nia = "Nia";
$tanggalJadian = "10 Februari 2026";

$timeline = [
    [
        "tanggal" => "10 FEBRUARI 2026",
        "judul" => "Hari Kita Memulai Cerita",
        "ikon" => "💌",
        "isi" => "Hari ketika Imran memberanikan diri menyatakan perasaannya kepada Nia. Awalnya Imran takut ditolak, tetapi ternyata Nia menerima cintanya. Sejak hari itu, cerita mereka memiliki bab yang baru."
    ],
    [
        "tanggal" => "7 AGUSTUS 2026",
        "judul" => "Saat Kita Mulai Menjauh",
        "ikon" => "🌧️",
        "isi" => "Ada masa ketika hubungan terasa jauh dan komunikasi tidak berjalan seperti biasanya. Kami belajar bahwa hubungan tidak selalu dipenuhi kebahagiaan. Dibutuhkan kejujuran, kesabaran, dan kemauan untuk saling memahami."
    ],
    [
        "tanggal" => "9 AGUSTUS 2026",
        "judul" => "Ulang Tahun Imran",
        "ikon" => "🎂",
        "isi" => "Nia merayakan ulang tahun Imran. Perhatian sederhana itu membuat Imran sangat terharu. Momen tersebut menjadi kenangan yang berharga dan menghangatkan kembali hubungan mereka."
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Imran & Nia | Cerita Kita ❤️</title>

<style>
:root {
    --pink: #ff9fc8;
    --pink-light: #ffe0ed;
    --purple: #a78bfa;
    --dark: #160f25;
    --card: rgba(255,255,255,.075);
    --muted: #d5c9df;
}

* {
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    color: white;
    background:
        radial-gradient(ellipse at top left, #63365e 0%, transparent 40%),
        radial-gradient(ellipse at bottom right, #3e326a 0%, transparent 45%),
        var(--dark);
    min-height: 100vh;
    overflow-x: hidden;
}

button, a, select {
    font-family: inherit;
}

button {
    cursor: pointer;
}

#stars {
    position: fixed;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    overflow: hidden;
}

.star {
    position: absolute;
    color: #ffe1ef;
    animation: twinkle 3s ease-in-out infinite alternate;
}

@keyframes twinkle {
    from { opacity: .15; transform: scale(.7); }
    to { opacity: .95; transform: scale(1.2); }
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 6%;
    gap: 15px;
    flex-wrap: wrap;
    border-bottom: 1px solid #ffffff15;
    background: #160f25e8;
    backdrop-filter: blur(14px);
    position: sticky;
    top: 0;
    z-index: 20;
}

.brand {
    font-weight: 800;
    letter-spacing: 2px;
    color: var(--pink-light);
    white-space: nowrap;
}

.music-area {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 8px;
}

.music-btn {
    color: white;
    border: 1px solid #ffffff40;
    background: #ffffff10;
    border-radius: 25px;
    padding: 10px 15px;
}

.music-label {
    font-size: 12px;
    color: #ffe1ee;
}

#musicSelect {
    max-width: 170px;
    color: white;
    background: #30213e;
    border: 1px solid #ffffff40;
    border-radius: 20px;
    padding: 9px 10px;
}

#musicSelect option {
    background: #30213e;
    color: white;
}

nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    padding: 18px 12px;
    position: relative;
    z-index: 2;
}

nav button {
    border: 1px solid #ffffff20;
    background: #ffffff08;
    color: #f4e7f5;
    padding: 10px 15px;
    border-radius: 22px;
    transition: .25s;
}

nav button:hover,
nav button.active {
    color: #32172f;
    background: linear-gradient(120deg, var(--pink-light), var(--pink));
    border-color: transparent;
    transform: translateY(-2px);
}

main {
    width: min(1000px, 92%);
    margin: auto;
}

.page {
    display: none;
    min-height: 65vh;
    padding: 35px 0 65px;
    animation: appear .5s ease;
}

.page.active {
    display: block;
}

@keyframes appear {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}

.hero {
    text-align: center;
    padding: 45px 15px 55px;
}

.eyebrow {
    color: var(--pink);
    letter-spacing: 4px;
    font-size: 11px;
    font-weight: 700;
}

.hero h1 {
    font-size: clamp(42px, 8vw, 78px);
    line-height: 1.08;
    margin: 20px 0;
    background: linear-gradient(100deg, white, #ffc1dd, #d7c6ff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.hero p {
    max-width: 620px;
    margin: 0 auto;
    color: var(--muted);
    line-height: 1.9;
}

.couple {
    margin: 30px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: clamp(15px, 5vw, 45px);
}

.person {
    font-size: clamp(65px, 12vw, 105px);
    animation: float 3s ease-in-out infinite;
    filter: drop-shadow(0 10px 15px #0005);
}

.person:nth-child(3) {
    animation-delay: .8s;
}

.heart {
    font-size: 38px;
    animation: heartbeat 1.2s infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-13px); }
}

@keyframes heartbeat {
    0%, 100% { transform: scale(.85); }
    50% { transform: scale(1.18); }
}

.primary-btn {
    display: inline-block;
    border: 0;
    color: #32172f;
    background: linear-gradient(120deg, #ffe1ee, #ff9fc8);
    padding: 14px 23px;
    border-radius: 28px;
    font-weight: 800;
    margin-top: 25px;
    box-shadow: 0 8px 30px #ff9fc826;
}

.section-title {
    text-align: center;
    margin-bottom: 30px;
}

.section-title h2 {
    color: var(--pink-light);
    font-size: clamp(27px, 5vw, 39px);
    margin: 12px 0;
}

.section-title p {
    color: var(--muted);
    line-height: 1.8;
}

.grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.card {
    padding: 24px;
    border-radius: 22px;
    border: 1px solid #ffffff20;
    background: var(--card);
    backdrop-filter: blur(10px);
    box-shadow: 0 12px 35px #00000015;
}

.card h3 {
    color: #ffd5e7;
    margin-top: 8px;
}

.card p {
    color: #e5d9e9;
    line-height: 1.9;
    white-space: pre-line;
}

.big-icon {
    font-size: 38px;
}

.quote {
    border-left: 3px solid var(--pink);
    padding: 15px 18px;
    background: #ffb7d80b;
    color: #ffe5f0;
    border-radius: 0 15px 15px 0;
    line-height: 1.9;
    margin: 20px 0;
}

.timeline {
    max-width: 760px;
    margin: auto;
}

.event {
    position: relative;
    margin: 0 0 20px 14px;
    padding: 23px;
    border-left: 2px solid #ff9fc8;
    border-radius: 0 20px 20px 0;
    background: #ffffff09;
}

.event-date {
    font-size: 11px;
    letter-spacing: 2px;
    color: var(--pink);
    font-weight: bold;
}

.event h3 {
    color: #ffe1ee;
}

.event p {
    color: #e5d9e9;
    line-height: 1.9;
}

.letter {
    max-width: 760px;
    margin: auto;
    padding: clamp(22px, 5vw, 45px);
    border: 1px solid #ffffff24;
    border-radius: 25px;
    background: linear-gradient(145deg, #ffffff10, #ffb3d809);
    box-shadow: 0 20px 60px #0003;
}

.letter p {
    white-space: pre-line;
    color: #f1e5f0;
    line-height: 2;
}

/* GALERI FOTO */
#galeri .album-tabs {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin: 25px 0;
}

#galeri .album-tabs button {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 120px;
    padding: 14px 7px;
    color: #ffe5f0;
    background: #ffffff0b;
    border: 1px solid #ffffff25;
    border-radius: 20px;
    transition: .25s;
}

#galeri .album-tabs button.active,
#galeri .album-tabs button:hover {
    background: linear-gradient(145deg, #ffb8d6, #d9b8ff);
    color: #32172f;
    border-color: transparent;
    transform: translateY(-2px);
}

#galeri .gallery-grid {
    display: none;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
}

#galeri .gallery-grid.album.active {
    display: grid;
}

#galeri .gallery-item {
    aspect-ratio: 9 / 16;
    min-width: 0;
    border-radius: 18px;
    overflow: hidden;
    background: linear-gradient(145deg, #7b477a, #282041);
    border: 1px solid #ffffff25;
    position: relative;
    cursor: pointer;
}

#galeri .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .3s;
}

#galeri .gallery-item img:hover {
    transform: scale(1.04);
}

.photo-viewer {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 100;
    background: #10091bea;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.photo-viewer.active {
    display: flex;
}

.photo-viewer img {
    max-width: 95%;
    max-height: 85vh;
    object-fit: contain;
    border-radius: 15px;
}

.photo-viewer button {
    position: absolute;
    top: 18px;
    right: 20px;
    width: 42px;
    height: 42px;
    border: 0;
    border-radius: 50%;
    background: #ffffff25;
    color: white;
    font-size: 25px;
}

footer {
    border-top: 1px solid #ffffff15;
    padding: 25px 15px;
    text-align: center;
    color: #cbb9d4;
    font-size: 12px;
    line-height: 1.8;
}

.floating-heart {
    position: fixed;
    z-index: 50;
    bottom: -40px;
    pointer-events: none;
    animation: rise 5s linear forwards;
}

@keyframes rise {
    to {
        transform: translateY(-110vh) rotate(35deg);
        opacity: 0;
    }
}

@media(max-width: 650px) {
    header {
        padding: 14px 4%;
    }

    .brand {
        font-size: 12px;
        letter-spacing: 1px;
    }

    .music-area {
        justify-content: flex-start;
    }

    nav {
        gap: 6px;
        padding: 13px 8px;
    }

    nav button {
        font-size: 12px;
        padding: 9px 11px;
    }

    .grid {
        grid-template-columns: 1fr;
    }

    .page {
        padding-top: 25px;
    }

    #galeri .album-tabs {
        gap: 7px;
    }

    #galeri .album-tabs button {
        min-height: 100px;
        padding: 10px 4px;
        font-size: 12px;
    }

    #galeri .gallery-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }
}
</style>
</head>

<body>
<div id="stars"></div>

<header>
    <div class="brand">IMRAN <span style="color:#ff9fc8">&</span> NIA ♡</div>

    <div class="music-area">
        <button type="button" class="music-btn" id="musicBtn" onclick="toggleMusic()">▶ Putar musik</button>

        <label class="music-label" for="musicSelect">🎵 Ganti musik:</label>

        <select id="musicSelect" onchange="changeMusic(this.value)">
            <option value="lagu1.mp3">Lagu romantis</option>
            <option value="lagu2.mp3">Lagu sempurna</option>
            <option value="lagu3.mp3">Lagu wkkw</option>
        </select>
    </div>
</header>

<nav>
    <button type="button" class="active" onclick="showPage('home', this)">🏠 Beranda</button>
    <button type="button" onclick="showPage('imran', this)">🧑 Tentang Imran</button>
    <button type="button" onclick="showPage('nia', this)">👩 Tentang Nia</button>
    <button type="button" onclick="showPage('hubungan', this)">💕 Hubungan Kita</button>
    <button type="button" onclick="showPage('kenangan', this)">📅 Kenangan</button>
    <button type="button" onclick="showPage('surat', this)">💌 Surat Cinta</button>
    <button type="button" onclick="showPage('galeri', this)">🌷 Galeri</button>
    <button type="button" onclick="showPage('masa-depan', this)">🌙 Masa Depan</button>
</nav>

<main>

<section class="page active" id="home">
    <div class="hero">
        <div class="eyebrow">SEBUAH CERITA YANG BERARTI</div>
        <h1>Imran & Nia</h1>
        <p>Dari dua teman sekelas, tumbuh sebuah perasaan. Dari sebuah keberanian, dimulailah cerita tentang kasih sayang, kenangan, kepercayaan, dan harapan.</p>

        <div class="couple">
            <span class="person">🧑🏻‍🎓</span>
            <span class="heart">❤️</span>
            <span class="person">👩🏻‍🎓</span>
        </div>

        <div style="color:#ffc6df;letter-spacing:2px">10 FEBRUARI 2026</div>
        <button type="button" class="primary-btn" onclick="showPage('hubungan')">Buka Cerita Kita ❤️</button>
    </div>

    <div class="grid">
        <div class="card">
            <div class="big-icon">💗</div>
            <h3>Dua Nama, Satu Cerita</h3>
            <p>Imran dan Nia. Dua orang yang memiliki cerita, perasaan, dan perjalanan untuk saling mengenal.</p>
        </div>

        <div class="card">
            <div class="big-icon">✨</div>
            <h3>Kenangan yang Berarti</h3>
            <p>Setiap tanggal penting dan setiap perhatian kecil bisa menjadi kenangan yang sulit dilupakan.</p>
        </div>
    </div>
</section>

<section class="page" id="imran">
    <div class="section-title">
        <div class="eyebrow">BAGIAN PERTAMA</div>
        <h2>Tentang Imran 🧑🏻</h2>
        <p>Seseorang yang memberanikan diri mengungkapkan perasaannya.</p>
    </div>

    <div class="grid">
        <div class="card">
            <div class="big-icon">🙋🏻‍♂️</div>
            <h3>Profil Imran</h3>
            <p>Nama: Imran
Tanggal lahir: 9 Agustus 2009
Sekolah: SMK Negeri 2 Ambon

Imran adalah seseorang yang sedang belajar menjadi pribadi yang lebih baik, menjaga pendidikan, dan memahami arti sebuah hubungan.</p>
        </div>

        <div class="card">
            <div class="big-icon">💌</div>
            <h3>Perasaan Imran</h3>
            <p>Awalnya Imran mengagumi Nia dari kejauhan. Ia sempat merasa tidak cukup percaya diri untuk menyatakan cinta.

Namun, ia akhirnya memberanikan diri karena tidak ingin terus menyimpan perasaan tanpa pernah mencoba mengungkapkannya.</p>
        </div>
    </div>

    <div class="quote">"Aku tidak harus menjadi orang yang sempurna. Aku hanya ingin terus belajar menjadi seseorang yang lebih baik."</div>
</section>

<section class="page" id="nia">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KEDUA</div>
        <h2>Tentang Nia 🌷</h2>
        <p>Sosok yang perlahan menjadi seseorang yang berarti bagi Imran.</p>
    </div>

    <div class="card">
        <div style="text-align:center" class="big-icon">👩🏻‍🎓💗</div>
        <h3>Nia di Mata Imran</h3>
        <p>Awalnya, Nia adalah teman perempuan di kelas. Seiring waktu, Imran mulai menyadari kecantikan Nia dan semakin memperhatikan kehadirannya.

Perhatian kecil dari Nia membuat Imran bahagia. Hal-hal yang terlihat sederhana ternyata mampu meninggalkan kesan yang mendalam di hatinya.

Bagi Imran, Nia bukan hanya seseorang yang cantik. Ia adalah seseorang yang kehadirannya memiliki arti khusus dalam perjalanan hidupnya.</p>
    </div>

    <div class="card" style="margin-top:18px">
        <div class="big-icon">🎂🌷</div>
        <h3>Profil Lengkap Nia</h3>
        <p>Nama: Nia
Tanggal lahir: 20 Oktober 2010

Sifat Nia:
🌸 Baik hati
🌷 Tidak sombong
😊 Ramah
💗 Asyik diajak bercanda
🌧️ Kadang pemarah
🙈 Gengsian

Bagi Imran, Nia adalah seseorang yang istimewa dengan kepribadian dan keunikannya sendiri.</p>
    </div>

    <div class="quote">"Ada orang yang datang tanpa kita rencanakan, tetapi perlahan menjadi bagian dari cerita yang paling kita ingat."</div>
</section>

<section class="page" id="hubungan">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KETIGA</div>
        <h2>Tentang Hubungan Kita 💕</h2>
        <p>Perjalanan dua orang yang sedang belajar saling memahami.</p>
    </div>

    <div class="grid">
        <div class="card">
            <div class="big-icon">🌸</div>
            <h3>Awal Kita</h3>
            <p>Semuanya bermula dari pertemanan di sekolah. Perlahan, perasaan Imran kepada Nia tumbuh dan menjadi semakin berarti.</p>
        </div>

        <div class="card">
            <div class="big-icon">💌</div>
            <h3>Keberanian untuk Jujur</h3>
            <p>Pada 10 Februari 2026, Imran menyatakan perasaannya. Nia menerima cintanya, dan mereka memulai perjalanan sebagai pasangan.</p>
        </div>

        <div class="card">
            <div class="big-icon">🌧️</div>
            <h3>Masa Sulit</h3>
            <p>Hubungan mereka pernah terasa jauh. Komunikasi menjadi sulit dan keduanya membutuhkan ruang. Dari masa ini, mereka belajar bahwa masalah perlu dibicarakan dengan tenang dan jujur.</p>
        </div>

        <div class="card">
            <div class="big-icon">🤝</div>
            <h3>Belajar Bersama</h3>
            <p>Imran berharap mereka dapat saling memberi tahu ketika ada sikap yang menyakiti, saling mendengarkan, dan menjaga kepercayaan tanpa melupakan sekolah.</p>
        </div>
    </div>

    <div class="quote">"Hubungan bukan tentang siapa yang selalu benar. Hubungan juga tentang kesediaan untuk mendengarkan, meminta maaf, memperbaiki diri, dan saling menghormati."</div>
</section>

<section class="page" id="kenangan">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KEEMPAT</div>
        <h2>Timeline Kenangan 📅</h2>
        <p>Tiga tanggal penting dalam cerita Imran dan Nia.</p>
    </div>

    <div class="timeline">
        <?php foreach ($timeline as $item): ?>
        <article class="event">
            <div class="big-icon"><?= htmlspecialchars($item["ikon"], ENT_QUOTES, 'UTF-8') ?></div>
            <div class="event-date"><?= htmlspecialchars($item["tanggal"], ENT_QUOTES, 'UTF-8') ?></div>
            <h3><?= htmlspecialchars($item["judul"], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($item["isi"], ENT_QUOTES, 'UTF-8') ?></p>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="page" id="surat">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KELIMA</div>
        <h2>Surat untuk Nia 💌</h2>
        <p>Sebuah pesan dari hati Imran.</p>
    </div>

    <article class="letter">
        <div class="big-icon">💗</div>
        <h3>Untuk Nia yang kusayangi,</h3>

        <p>Nia, aku ingin kita bisa menghadapi hari-hari baik maupun hari-hari sulit bersama.

Kalau ada sikapku yang membuatmu tidak nyaman, tolong katakan kepadaku. Aku ingin mendengarkan dan memperbaiki diri, bukan membuatmu harus memendam perasaan sendirian.

Aku juga ingin kamu merasa aman untuk bercerita kepadaku. Kita boleh punya perasaan yang berbeda, boleh membutuhkan waktu sendiri, tetapi aku berharap kita tetap bisa saling menghormati dan berbicara dengan jujur.

Aku tidak ingin mencari orang lain hanya karena hubungan kita sedang mengalami masalah. Aku ingin berusaha menjaga hubungan ini selama kita sama-sama ingin menjalaninya.

Aku tahu kita masih sekolah dan masih punya banyak hal yang harus dipelajari. Aku ingin kita saling mendukung, mengejar cita-cita, dan tidak menjadikan hubungan sebagai penghalang masa depan.

Aku tidak tahu apa yang akan terjadi di masa depan, tetapi aku ingin menghargai setiap kesempatan yang kita miliki sekarang.

Semoga kita bisa terus belajar menjadi lebih dewasa, lebih jujur, dan lebih baik dalam memperlakukan satu sama lain.

Terima kasih sudah menjadi bagian dari ceritaku.

Dengan sayang,
Imran ❤️</p>

        <div class="quote">"Penyesalan itu di akhir, bukan di awal. Jadi, selagi ada kesempatan, belajarlah menghargai dan menjaga apa yang berarti."</div>
        <h3 style="text-align:right">Dari Imran, Imran sayang Nia. ❤️</h3>
    </article>
</section>

<section class="page" id="galeri">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KEENAM</div>
        <h2>Galeri Kenangan 🌷</h2>
        <p>Pilih album untuk melihat foto-foto kenangan.</p>
    </div>

    <div class="album-tabs">
        <button type="button" class="active" onclick="pilihAlbum('album-imran', this)">
            <span style="font-size:30px">📸</span>
            <span>Album Imran</span>
        </button>

        <button type="button" onclick="pilihAlbum('album-nia', this)">
            <span style="font-size:30px">🌷</span>
            <span>Album Nia</span>
        </button>

        <button type="button" onclick="pilihAlbum('album-bersama', this)">
            <span style="font-size:30px">❤️</span>
            <span>Foto Bersama</span>
        </button>
    </div>

    <div class="gallery-grid album active" id="album-imran">
        <div class="gallery-item">
            <img src="imran1.jpg" alt="Foto Imran 1" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="imran3.jpg" alt="Foto Imran 2" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="imran2.jpg" alt="Foto Imran 3" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
    </div>

    <div class="gallery-grid album" id="album-nia">
        <div class="gallery-item">
            <img src="kurnia2.jpg" alt="Foto Nia 1" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="kurnia1.jpg" alt="Foto Nia 2" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="kurnia3.jpg" alt="Foto Nia 3" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
    </div>

    <div class="gallery-grid album" id="album-bersama">
        <div class="gallery-item">
            <img src="bersama1.jpg" alt="Foto Imran dan Nia bersama 1" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="bersama3.jpg" alt="Foto Imran dan Nia bersama 2" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
        <div class="gallery-item">
            <img src="bersama2.jpg" alt="Foto Imran dan Nia bersama 3" loading="lazy" onclick="lihatFoto(this.src)">
        </div>
    </div>

    <div class="quote">
        Setiap foto menyimpan cerita, setiap cerita menyimpan kenangan, dan setiap kenangan punya tempat tersendiri di hati. ❤️
    </div>
</section>

<section class="page" id="masa-depan">
    <div class="section-title">
        <div class="eyebrow">BAGIAN KETUJUH</div>
        <h2>Harapan Masa Depan 🌙</h2>
        <p>Bukan tentang menjanjikan segalanya, melainkan belajar melakukan yang terbaik hari ini.</p>
    </div>

    <div class="grid">
        <div class="card">
            <div class="big-icon">📚</div>
            <h3>Utamakan Pendidikan</h3>
            <p>Semoga Imran dan Nia dapat menyelesaikan sekolah, mengembangkan kemampuan, dan mengejar cita-cita masing-masing.</p>
        </div>

        <div class="card">
            <div class="big-icon">🫶</div>
            <h3>Menjaga Kepercayaan</h3>
            <p>Semoga kami belajar untuk jujur, menghormati batasan, dan menyelesaikan masalah tanpa menyakiti satu sama lain.</p>
        </div>

        <div class="card">
            <div class="big-icon">🌱</div>
            <h3>Tumbuh Menjadi Lebih Baik</h3>
            <p>Semoga kami bisa saling mendukung untuk berkembang sebagai pribadi, bukan saling menghalangi.</p>
        </div>

        <div class="card">
            <div class="big-icon">❤️</div>
            <h3>Menghargai Hari Ini</h3>
            <p>Semoga apa pun yang terjadi di masa depan, kami tetap menghargai kenangan dan pelajaran yang kami dapatkan dari perjalanan ini.</p>
        </div>
    </div>

    <div style="text-align:center;margin-top:35px">
        <div class="couple">
            <span class="person">🧑🏻‍🎓</span>
            <span class="heart">💗</span>
            <span class="person">👩🏻‍🎓</span>
        </div>

        <h2 style="color:#ffd5e7">Cerita Kita Belum Selesai</h2>
        <p style="color:#d5c9df;line-height:1.9">Satu hari, satu kenangan, satu pelajaran pada satu waktu.</p>
        <button type="button" class="primary-btn" onclick="showPage('home')">Kembali ke Beranda ♡</button>
    </div>
</section>

</main>

<footer>
    <div>IMRAN & NIA ❤️</div>
    Sebuah cerita tentang perasaan, kenangan, dan harapan.<br>
    Dibuat dengan hati oleh Imran.
</footer>

<div class="photo-viewer" id="photoViewer" onclick="tutupFoto()">
    <button type="button" aria-label="Tutup foto" onclick="event.stopPropagation(); tutupFoto()">×</button>
    <img id="fotoBesar" src="" alt="Foto yang diperbesar" onclick="event.stopPropagation()">
</div>

<!-- PEMUTAR MUSIK: HANYA SATU SOURCE -->
<audio id="lagu" loop preload="none">
    <source id="musicSource" src="lagu1.mp3" type="audio/mpeg">
</audio>

<script>
function showPage(id, button) {
    document.querySelectorAll(".page").forEach(page => {
        page.classList.remove("active");
    });

    const target = document.getElementById(id);
    if (!target) return;

    target.classList.add("active");

    document.querySelectorAll("nav button").forEach(btn => {
        btn.classList.remove("active");
    });

    if (button) {
        button.classList.add("active");
    } else {
        document.querySelectorAll("nav button").forEach(btn => {
            if ((btn.getAttribute("onclick") || "").includes("'" + id + "'")) {
                btn.classList.add("active");
            }
        });
    }

    window.scrollTo({ top: 0, behavior: "smooth" });

    if (id === "masa-depan") {
        hearts();
    }
}

/* PEMUTAR MUSIK */
const audio = document.getElementById("lagu");
const musicSource = document.getElementById("musicSource");
const musicBtn = document.getElementById("musicBtn");
const musicSelect = document.getElementById("musicSelect");

async function toggleMusic() {
    if (audio.paused) {
        try {
            await audio.play();
            musicBtn.textContent = "♫ Musik aktif";
        } catch (error) {
            console.error("Musik gagal diputar:", error);
            musicBtn.textContent = "▶ Putar musik";
            alert("Musik gagal diputar. Pastikan file MP3 tersedia dan nama file benar.");
        }
    } else {
        audio.pause();
        musicBtn.textContent = "▶ Putar musik";
    }
}

async function changeMusic(fileName) {
    const sedangDiputar = !audio.paused;

    audio.pause();
    musicSource.src = fileName;
    audio.load();
    musicBtn.textContent = "▶ Putar musik";

    if (sedangDiputar) {
        try {
            await audio.play();
            musicBtn.textContent = "♫ Musik aktif";
        } catch (error) {
            console.error("Lagu gagal diputar:", error);
            alert("Lagu sudah diganti. Tekan tombol Putar musik untuk mendengarkan.");
        }
    }
}

audio.addEventListener("play", function() {
    musicBtn.textContent = "♫ Musik aktif";
});

audio.addEventListener("pause", function() {
    musicBtn.textContent = "▶ Putar musik";
});

audio.addEventListener("error", function() {
    console.error("File musik tidak dapat dimuat:", musicSource.src);
});

/* BINTANG */
function makeStars() {
    const area = document.getElementById("stars");

    for (let i = 0; i < 70; i++) {
        const star = document.createElement("span");
        star.className = "star";
        star.textContent = Math.random() > .5 ? "✦" : "·";
        star.style.left = Math.random() * 100 + "%";
        star.style.top = Math.random() * 100 + "%";
        star.style.fontSize = (8 + Math.random() * 14) + "px";
        star.style.animationDelay = Math.random() * 3 + "s";
        area.appendChild(star);
    }
}

/* HATI MELAYANG */
function hearts() {
    const symbols = ["❤️", "💕", "💗", "💖", "♡"];

    for (let i = 0; i < 15; i++) {
        setTimeout(() => {
            const heart = document.createElement("span");
            heart.className = "floating-heart";
            heart.textContent = symbols[Math.floor(Math.random() * symbols.length)];
            heart.style.left = Math.random() * 100 + "vw";
            heart.style.fontSize = (18 + Math.random() * 18) + "px";
            heart.style.animationDuration = (4 + Math.random() * 3) + "s";
            document.body.appendChild(heart);

            setTimeout(() => heart.remove(), 7500);
        }, i * 180);
    }
}

/* ALBUM FOTO */
function pilihAlbum(id, tombol) {
    const galeri = document.getElementById("galeri");
    if (!galeri) return;

    galeri.querySelectorAll(".album").forEach(album => {
        album.classList.remove("active");
    });

    const albumDipilih = document.getElementById(id);

    if (albumDipilih && galeri.contains(albumDipilih)) {
        albumDipilih.classList.add("active");
    }

    galeri.querySelectorAll(".album-tabs button").forEach(btn => {
        btn.classList.remove("active");
    });

    if (tombol) {
        tombol.classList.add("active");
    }
}

/* MEMPERBESAR FOTO */
function lihatFoto(src) {
    document.getElementById("fotoBesar").src = src;
    document.getElementById("photoViewer").classList.add("active");
}

function tutupFoto() {
    document.getElementById("photoViewer").classList.remove("active");
    document.getElementById("fotoBesar").src = "";
}

document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        tutupFoto();
    }
});

makeStars();
</script>
</body>
</html>
