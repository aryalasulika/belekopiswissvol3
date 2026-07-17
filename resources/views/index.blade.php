<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bele Kopi Swiss</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #030008;
            background-image: 
                linear-gradient(rgba(18, 10, 36, 0.4) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 10, 36, 0.4) 1px, transparent 1px);
            background-size: 20px 20px;
            overflow-x: hidden;
        }

        .font-orbitron {
            font-family: 'Orbitron', sans-serif;
        }

        /* Neon Glow Effects */
        .neon-border-cyan {
            box-shadow: 0 0 10px rgba(0, 240, 255, 0.3), inset 0 0 10px rgba(0, 240, 255, 0.2);
            border: 1px solid rgba(0, 240, 255, 0.6);
        }

        .neon-border-pink {
            box-shadow: 0 0 10px rgba(255, 0, 85, 0.3), inset 0 0 10px rgba(255, 0, 85, 0.2);
            border: 1px solid rgba(255, 0, 85, 0.6);
        }

        .neon-text-pink {
            text-shadow: 0 0 5px #ff0055, 0 0 15px #ff0055;
        }

        .neon-text-cyan {
            text-shadow: 0 0 5px #00f0ff, 0 0 15px #00f0ff;
        }

        /* Glitch Animation Effect */
        .glitch {
            position: relative;
        }
        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #030008;
        }
        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 #ff0055;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00f0ff, 0 2px #ff0055;
            clip: rect(85px, 450px, 140px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }
        @keyframes glitch-anim {
            0% { clip: rect(31px, 9999px, 94px, 0); }
            10% { clip: rect(112px, 9999px, 76px, 0); }
            20% { clip: rect(85px, 9999px, 5px, 0); }
            100% { clip: rect(67px, 9999px, 125px, 0); }
        }
        @keyframes glitch-anim2 {
            0% { clip: rect(76px, 9999px, 116px, 0); }
            11% { clip: rect(5px, 9999px, 145px, 0); }
            22% { clip: rect(122px, 9999px, 35px, 0); }
            100% { clip: rect(3px, 9999px, 85px, 0); }
        }

        /* Custom Clip Path for Cyberpunk Corners */
        .cyber-clip {
            clip-path: polygon(0px 0px, calc(100% - 15px) 0px, 100% 15px, 100% 100%, 15px 100%, 0px calc(100% - 15px));
        }
    </style>
</head>
<body class="text-gray-200 min-h-screen flex flex-col justify-between">

    <header class="border-b border-purple-900 bg-black bg-opacity-80 sticky top-0 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="font-orbitron text-xl font-black tracking-widest text-cyan-400">
                BELE<span class="text-pink-500">KOPI</span>
            </div>
            <nav class="hidden md:flex space-x-8 font-semibold tracking-wider">
                <a href="#hero" class="hover:text-pink-500 transition-colors">HOME</a>
                <a href="#info" class="hover:text-pink-500 transition-colors">INFO</a>
                <a href="#bracket" class="hover:text-pink-500 transition-colors">BRACKET</a>
                <a href="#rules" class="hover:text-pink-500 transition-colors">RULES</a>
            </nav>
            <a href="#register" class="neon-border-pink px-5 py-2 font-orbitron text-xs text-pink-500 font-bold hover:bg-pink-600 hover:text-white transition-all duration-300 cyber-clip">
                DAFTAR
            </a>
        </div>
    </header>

    <!-- <section id="hero" class="relative flex flex-col items-center justify-center text-center py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 bg-radial-at-c from-purple-950/20 via-transparent to-transparent pointer-events-none"></div>
        
        <p class="font-orbitron text-cyan-400 tracking-[0.3em] text-sm md:text-lg mb-3 uppercase">Mobile Legends Tournament</p>
        
        <h1 class="font-orbitron text-5xl md:text-8xl font-black tracking-tighter text-white mb-6 glitch" data-text="BELE KOPI SWISS S3">
            BELE KOPI SWISS S3
        </h1>
        
        <p class="text-gray-400 max-w-xl text-md md:text-xl mb-10 tracking-wide">
            Masuki arena distopia masa depan. Buktikan tim milikmu adalah yang terkuat di jagat Cyber Bele Kopi Swiss Season 3!
        </p>

        <div class="grid grid-cols-4 gap-2 md:gap-4 max-w-lg mx-auto mb-12">
            <div class="neon-border-cyan bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="days" class="block font-orbitron text-2xl md:text-4xl font-bold text-cyan-400">00</span>
                <span class="text-xs text-gray-500 uppercase">Hari</span>
            </div>
            <div class="neon-border-cyan bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="hours" class="block font-orbitron text-2xl md:text-4xl font-bold text-cyan-400">00</span>
                <span class="text-xs text-gray-500 uppercase">Jam</span>
            </div>
            <div class="neon-border-cyan bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="minutes" class="block font-orbitron text-2xl md:text-4xl font-bold text-cyan-400">00</span>
                <span class="text-xs text-gray-500 uppercase">Menit</span>
            </div>
            <div class="neon-border-cyan bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="seconds" class="block font-orbitron text-2xl md:text-4xl font-bold text-cyan-400">00</span>
                <span class="text-xs text-gray-500 uppercase">Detik</span>
            </div>
        </div>

        <a href="#register" class="px-10 py-4 font-orbitron text-lg font-bold text-white bg-pink-600 hover:bg-pink-700 hover:shadow-[0_0_25px_#ff0055] transition-all duration-300 cyber-clip neon-border-pink">
            REGISTRASI SEKARANG
        </a>
    </section> -->

    <!-- Hero Section -->
    <section id="hero" class="relative flex flex-col items-center justify-center text-center py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 bg-radial-at-c from-purple-950/20 via-transparent to-transparent pointer-events-none"></div>
        
        <p class="font-orbitron text-cyan-400 tracking-[0.3em] text-sm md:text-lg mb-3 uppercase animate-pulse">● TOURNAMENT IN PROGRESS</p>
        
        <h1 class="font-orbitron text-5xl md:text-8xl font-black tracking-tighter text-white mb-6 glitch" data-text="BELE KOPI SWISS S3">
            BELE KOPI SWISS S3
        </h1>
        
        <!-- Kalimat Motivasi Baru -->
        <p class="text-gray-200 max-w-2xl text-md md:text-xl mb-10 tracking-wide font-medium font-orbitron uppercase text-shadow-sm">
            "Panggung juara telah dibuka. Tak ada tempat untuk ragu, buktikan kerja keras timmu, hancurkan batasanmu, dan rebut takhta tertinggi di Bele Kopi Swiss!"
        </p>

   <!-- Live Real-Time Clock -->
   <div class="mb-4 text-xs font-orbitron tracking-widest text-pink-500 uppercase">WAKTU REAL-TIME VENUE</div>
        <div class="grid grid-cols-4 gap-2 md:gap-4 max-w-lg mx-auto mb-12">
            <div class="neon-border-pink bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="live-hours" class="block font-orbitron text-2xl md:text-4xl font-bold text-pink-500">00</span>
                <span class="text-xs text-gray-500 uppercase">Jam</span>
            </div>
            <div class="neon-border-pink bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="live-minutes" class="block font-orbitron text-2xl md:text-4xl font-bold text-pink-500">00</span>
                <span class="text-xs text-gray-500 uppercase">Menit</span>
            </div>
            <div class="neon-border-pink bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip">
                <span id="live-seconds" class="block font-orbitron text-2xl md:text-4xl font-bold text-pink-500">00</span>
                <span class="text-xs text-gray-500 uppercase">Detik</span>
            </div>
            <div class="neon-border-pink bg-black/60 p-4 rounded-lg w-20 md:w-24 cyber-clip flex flex-col justify-center items-center">
                <span id="live-ampm" class="block font-orbitron text-xl md:text-2xl font-black text-cyan-400">--</span>
                <span class="text-xs text-gray-500 uppercase mt-1">Format</span>
            </div>
        </div>

        <!-- Mengubah Tombol Daftar Menjadi Lihat Live Bracket -->
        <a href="#bracket" class="px-10 py-4 font-orbitron text-lg font-bold text-white bg-cyan-600 hover:bg-cyan-700 hover:shadow-[0_0_25px_#00f0ff] transition-all duration-300 cyber-clip neon-border-cyan">
            LIHAT LIVE BRACKET
        </a>
    </section>

    <section id="info" class="max-w-7xl mx-auto px-4 py-16 w-full">
        <h2 class="font-orbitron text-3xl font-black text-center mb-12 tracking-widest text-white">
            DATABASE <span class="text-cyan-400">TURNAMEN</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="neon-border-pink bg-black/40 p-8 rounded-lg cyber-clip relative group overflow-hidden">
                <div class="absolute -right-8 -bottom-8 text-pink-600/10 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14h-2v-2h2zm0-4h-2V7h2z"/></svg>
                </div>
                <h3 class="font-orbitron text-pink-500 text-xl font-bold mb-4 tracking-wider">TOTAL PRIZE POOL</h3>
                <p class="font-orbitron text-4xl font-black text-white mb-2 tracking-tight">Rp 2.500.000</p>
                <p class="text-gray-400 text-sm">+ Trophy, E-Certificate, & Merchandise Eksklusif.</p>
            </div>

            <div class="neon-border-cyan bg-black/40 p-8 rounded-lg cyber-clip relative group overflow-hidden">
                <h3 class="font-orbitron text-cyan-400 text-xl font-bold mb-4 tracking-wider">REGISTRATION FEE</h3>
                <p class="font-orbitron text-4xl font-black text-white mb-2 tracking-tight">Rp 100.000 / Tim</p>
                <p class="text-gray-400 text-sm">Slot Terbatas! Maksimal pendaftaran 32 Tim terpilih.</p>
            </div>

            <div class="neon-border-pink bg-black/40 p-8 rounded-lg cyber-clip relative group overflow-hidden">
                <h3 class="font-orbitron text-pink-500 text-xl font-bold mb-4 tracking-wider">TIMELINE</h3>
                <p class="font-orbitron text-2xl font-black text-white mb-1">16 JULI 2026</p>
                <p class="text-gray-400 text-sm mb-4">Mulai Pertandingan Penyisihan</p>
                <p class="font-orbitron text-lg font-bold text-cyan-400">VENUE: BELE KOPI SWISS</p>
                <p class="text-xs text-gray-500">(Grand Final diselenggarakan Offline)</p>
            </div>
        </div>
    </section>

    <section id="bracket" class="max-w-7xl mx-auto px-4 py-16 w-full border-t border-purple-950">
        <h2 class="font-orbitron text-3xl font-black text-center mb-12 tracking-widest text-white">
            BATTLEFIELD <span class="text-pink-500">BRACKETS</span>
        </h2>
        
        <div class="neon-border-cyan bg-black/80 p-2 md:p-6 rounded-lg cyber-clip relative overflow-hidden">
            <div class="absolute top-0 left-0 bg-cyan-400 text-black font-orbitron text-xs px-2 py-0.5 tracking-wider font-bold">
                LIVE_FEED_v1.0
            </div>
            
            <div class="w-full mt-4 bg-gray-950/50 rounded border border-purple-900/40 p-1">
                <iframe 
                    src="https://brackethq.com/b/vt1id/embed/?name=1" 
                    width="100%" 
                    height="550" 
                    frameborder="0"
                    class="rounded opacity-90 hover:opacity-100 transition-opacity duration-300"
                    style="filter: drop-shadow(0 0 5px rgba(0, 240, 255, 0.1));">
                </iframe>
            </div>

            <div class="mt-4 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 font-orbitron tracking-wider px-2">
                <span class="mb-2 md:mb-0 text-cyan-400 animate-pulse">● TRANSMISSION STABLE</span>
                <span>DATA REFRESHES AUTOMATICALLY</span>
            </div>
        </div>
    </section>

    <footer class="border-t border-purple-900 bg-black/90 py-8 text-center text-sm text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p class="font-orbitron mb-2 text-gray-400 tracking-wider">BELE KOPI SWISS S3 &copy; 2026</p>
            <p class="text-xs">Created for Esport Enthusiasts in Laravel. All rights reserved.</p>
        </div>
    </footer>

<!-- JavaScript Live Real-Time Clock -->
<script>
        function updateLiveClock() {
            const now = new Date();
            
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            const ampm = hours >= 12 ? 'PM' : 'AM';

            // Mengubah format ke 12 jam (Opsional, jika ingin format 24 jam hapus 2 baris di bawah ini)
            hours = hours % 12;
            hours = hours ? hours : 12; // Angka '0' diubah menjadi '12'

            // Menambahkan angka 0 di depan jika angka satuan (misal: 09:05:01)
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Masukkan data ke elemen HTML
            document.getElementById('live-hours').innerText = hours;
            document.getElementById('live-minutes').innerText = minutes;
            document.getElementById('live-seconds').innerText = seconds;
            document.getElementById('live-ampm').innerText = ampm;
        }

        // Jalankan fungsi setiap 1 detik (1000 milidetik)
        setInterval(updateLiveClock, 1000);

        // Jalankan fungsi langsung saat halaman pertama kali dimuat tanpa menunggu 1 detik pertama
        updateLiveClock();
    </script>
</body>
</html>