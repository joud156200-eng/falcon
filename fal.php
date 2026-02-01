<?php
/* =====================
   TEAM FALCONS CORE
===================== */
$falcons = [
    "logo"  => "https://tse2.mm.bing.net/th/id/OIP.B7k7kXvu1vZ3jz0l4YDGwwAAAA?rs=1&pid=ImgDetMain&o=7&rm=3",
    "store" => "https://store.teamfalcons.gg",
    "ewc"   => "https://esportsworldcup.com"
];

/* =====================
   MATCHES (DEMO / FILTERABLE)
===================== */
$matchesAll = [
    ["game"=>"cs2","label"=>"CS2","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"valorant","label"=>"Valorant","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"r6","label"=>"R6 Siege","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"ow2","label"=>"Overwatch 2","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"apex","label"=>"Apex Legends","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"pubg","label"=>"PUBG","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"pubgm","label"=>"PUBG Mobile","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"freefire","label"=>"Free Fire","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"fortnite","label"=>"Fortnite","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"dota2","label"=>"Dota 2","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"lol","label"=>"LoL","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"mlbb","label"=>"MLBB","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"hok","label"=>"Honor of Kings","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"eafc","label"=>"EA FC","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"rl","label"=>"Rocket League","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"tekken","label"=>"Tekken 8","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"sf6","label"=>"Street Fighter 6","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"cod","label"=>"Call of Duty","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"tft","label"=>"TFT","vs"=>"TBD","time"=>"قريبًا"],
    ["game"=>"sc2","label"=>"StarCraft II","vs"=>"TBD","time"=>"قريبًا"],
];

$matchFilter = $_GET['match'] ?? 'all';
$matches = array_filter($matchesAll, fn($m)=>$matchFilter==='all'||$m['game']===$matchFilter);

/* =====================
   ALL GAMES (OFFICIAL & CORRECT)
===================== */
$games = [
    "cs2"=>[
        "name"=>"Counter-Strike 2",
        "url"=>"https://liquipedia.net/counterstrike/Team_Falcons",
        "img"=>"https://cdn.cloudflare.steamstatic.com/apps/csgo/images/csgo_react/social/cs2.jpg",
        "type"=>"pc","cat"=>"FPS"
    ],
    "valorant"=>[
        "name"=>"Valorant",
        "url"=>"https://liquipedia.net/valorant/Team_Falcons",
        "img"=>"https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9f1f9a93cbb18ce6/64d28f06d9a46c4f0db5df0a/VALORANT_Logo_V.png",
        "type"=>"pc","cat"=>"FPS"
    ],
    "r6"=>[
        "name"=>"Rainbow Six Siege",
        "url"=>"https://liquipedia.net/rainbowsix/Team_Falcons",
        "img"=>"https://cdn.akamai.steamstatic.com/steam/apps/359550/header.jpg",
        "type"=>"pc","cat"=>"FPS"
    ],
    "ow2"=>[
        "name"=>"Overwatch 2",
        "url"=>"https://liquipedia.net/overwatch/Team_Falcons",
        "img"=>"https://images.blz-contentstack.com/v3/assets/blt2477dcaf4ebd440c/blt09df2c4a7b38c28c/62e1c8c594e6c2316b4b27f3/OW2_KeyArt.png",
        "type"=>"pc","cat"=>"Shooter"
    ],
    "apex"=>[
        "name"=>"Apex Legends",
        "url"=>"https://liquipedia.net/apexlegends/Team_Falcons",
        "img"=>"https://media.contentapi.ea.com/content/dam/apex-legends/common/apex-legends-keyart.jpg",
        "type"=>"pc","cat"=>"Royale"
    ],
    "pubg"=>[
        "name"=>"PUBG",
        "url"=>"https://liquipedia.net/pubg/Team_Falcons",
        "img"=>"https://cdn.akamai.steamstatic.com/steam/apps/578080/header.jpg",
        "type"=>"pc","cat"=>"Royale"
    ],
    "pubgm"=>[
        "name"=>"PUBG Mobile",
        "url"=>"https://liquipedia.net/pubg/Team_Falcons",
        "img"=>"https://www.pubgmobile.com/images/event/home/home_kv.jpg",
        "type"=>"mobile","cat"=>"Mobile"
    ],
    "freefire"=>[
        "name"=>"Free Fire",
        "url"=>"https://liquipedia.net/freefire/Team_Falcons",
        "img"=>"https://dl.dir.freefiremobile.com/common/web_event/hash/cc8d98c3c9e29f2fa2b5756fa0fe58c5jpg",
        "type"=>"mobile","cat"=>"Mobile"
    ],
    "fortnite"=>[
        "name"=>"Fortnite",
        "url"=>"https://liquipedia.net/fortnite/Team_Falcons",
        "img"=>"https://cdn2.unrealengine.com/fortnite-chapter-4-keyart-1920x1080-1920x1080-fbc7d47b3f7a.jpg",
        "type"=>"pc","cat"=>"Royale"
    ],
    "dota2"=>[
        "name"=>"Dota 2",
        "url"=>"https://liquipedia.net/dota2/Team_Falcons",
        "img"=>"https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota2_social.jpg",
        "type"=>"pc","cat"=>"MOBA"
    ],
    "lol"=>[
        "name"=>"League of Legends",
        "url"=>"https://liquipedia.net/leagueoflegends/Team_Falcons",
        "img"=>"https://cdn.riotgames.com/riotbar/production/assets/league_of_legends.png",
        "type"=>"pc","cat"=>"MOBA"
    ],
    "mlbb"=>[
        "name"=>"Mobile Legends",
        "url"=>"https://liquipedia.net/mobilelegends/Team_Falcons",
        "img"=>"https://play-lh.googleusercontent.com/0Hkws5e9K6q4u9F4p8Lr9S2Jp5G1cY0mL2fZpU2yJ6GmG5xkQ",
        "type"=>"mobile","cat"=>"MOBA"
    ],
    "hok"=>[
        "name"=>"Honor of Kings",
        "url"=>"https://liquipedia.net/honorofkings/Team_Falcons",
        "img"=>"https://cdn.taptap.com/market/images/3c7d8a9d4b5b2f8d2f4d1d1d4.jpg",
        "type"=>"mobile","cat"=>"MOBA"
    ],
    "eafc"=>[
        "name"=>"EA FC 25",
        "url"=>"https://liquipedia.net/fifa/Team_Falcons",
        "img"=>"https://media.contentapi.ea.com/content/dam/ea/fc/common/fc25-hero-medium-16x9.jpg",
        "type"=>"pc","cat"=>"Sports"
    ],
    "rl"=>[
        "name"=>"Rocket League",
        "url"=>"https://liquipedia.net/rocketleague/Team_Falcons",
        "img"=>"https://cdn2.unrealengine.com/rocket-league-keyart-1920x1080-1920x1080-8b0d6d6df4d5.jpg",
        "type"=>"pc","cat"=>"Sports"
    ],
    "tekken"=>[
        "name"=>"Tekken 8",
        "url"=>"https://liquipedia.net/fighters/Team_Falcons",
        "img"=>"https://cdn.bandainamcoent.eu/images/tekken8/tekken8-keyart.jpg",
        "type"=>"pc","cat"=>"Fighting"
    ],
    "sf6"=>[
        "name"=>"Street Fighter 6",
        "url"=>"https://liquipedia.net/fighters/Team_Falcons",
        "img"=>"https://www.streetfighter.com/6/assets/images/common/share.png",
        "type"=>"pc","cat"=>"Fighting"
    ],
    "cod"=>[
        "name"=>"Call of Duty",
        "url"=>"https://liquipedia.net/callofduty/Team_Falcons",
        "img"=>"https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mw3/MWIII_Hero.jpg",
        "type"=>"pc","cat"=>"FPS"
    ],
    "tft"=>[
        "name"=>"Teamfight Tactics",
        "url"=>"https://liquipedia.net/tft/Team_Falcons",
        "img"=>"https://cdn.riotgames.com/riotbar/production/assets/tft.png",
        "type"=>"pc","cat"=>"Strategy"
    ],
    "sc2"=>[
        "name"=>"StarCraft II",
        "url"=>"https://liquipedia.net/starcraft2/Team_Falcons",
        "img"=>"https://blz-contentstack-images.akamaized.net/v3/assets/blt2477dcaf4ebd440c/blt19e3d6c17a1c4d8a/60a2c7c33a0e8a1b3c0b3fcb/sc2-share.jpg",
        "type"=>"pc","cat"=>"Strategy"
    ],
];

$filters = ['all'=>'الكل','pc'=>'PC','mobile'=>'MOBILE'];
$currentFilter = $_GET['filter'] ?? 'all';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>Team Falcons Hub</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
:root{--green:#45d48a;--bg:#0f1412;--card:#161d19}
body{font-family:'Cairo',sans-serif;background:var(--bg);color: #828682ff;}
.glow{box-shadow:0 0 14px rgba(69,212,138,.35)}
</style>
</head>
<body>

<nav class="h-20 px-6 flex justify-between items-center bg-black/40 border-b border-white/10">
<div class="flex items-center gap-3">
<img src="<?=$falcons['logo']?>" class="w-10 h-10 glow">
<span class="font-black italic uppercase">Falcons <span class="text-[var(--green)]">Hub</span></span>
</div>
<div class="flex gap-3">
<a href="<?=$falcons['store']?>" target="_blank" class="px-4 py-2 text-[11px] font-black rounded-xl bg-white/10">المتجر</a>
<a href="<?=$falcons['ewc']?>" target="_blank" class="px-4 py-2 text-[11px] font-black rounded-xl bg-[var(--green)] text-black">🏆 كأس العالم</a>
</div>
</nav>

<header class="py-14 text-center">
<img src="<?=$falcons['logo']?>" class="w-32 mx-auto mb-6 glow">
<h1 class="text-5xl font-black italic uppercase">TEAM <span class="text-[var(--green)]">FALCONS</span></h1>
</header>

<!-- FILTERS -->
<div class="flex justify-center gap-3 mb-10">
<?php foreach($filters as $k=>$v): ?>
<a href="?filter=<?=$k?>" class="px-6 py-2 text-[11px] font-black rounded-xl border
<?=$currentFilter===$k?'bg-[var(--green)] text-black':'border-white/10 text-gray-400'?>">
<?=$v?>
</a>
<?php endforeach; ?>
</div>

<!-- GAMES GRID -->
<main class="grid max-w-7xl mx-auto px-6 gap-6 sm:grid-cols-2 lg:grid-cols-4 pb-28">
<?php foreach($games as $g):
if($currentFilter!=='all' && $g['type']!==$currentFilter) continue; ?>
<a href="<?=$g['url']?>" target="_blank"
class="relative h-[360px] rounded-[2.5rem] overflow-hidden bg-[var(--card)] border border-white/10 hover:border-[var(--green)]">
<img src="<?=$g['img']?>" class="absolute inset-0 w-full h-full object-cover opacity-50">
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute inset-0 flex flex-col justify-end items-center p-8 text-center">
<h3 class="text-xl font-black italic uppercase"><?=$g['name']?></h3>
<span class="mt-2 text-[10px] tracking-widest text-[var(--green)] font-black uppercase"><?=$g['cat']?></span>
</div>
</a>
<?php endforeach; ?>
</main>

<footer class="py-8 text-center text-[10px] text-gray-500 border-t border-white/10">
© 2026 Team Falcons
</footer>

</body>
</html>