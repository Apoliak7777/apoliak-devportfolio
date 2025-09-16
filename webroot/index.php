<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Poliak | Portfólio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fira Mono', monospace;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
        }
        .cursor-blink {
            animation: blink 1s steps(2, start) infinite;
        }
        @keyframes blink {
            to {
                visibility: hidden;
            }
        }
    </style>
</head>
<body class="text-gray-100">
    <!-- Header -->
    <header class="p-6 flex flex-col items-center animate__animated animate__fadeInDown">
        <div class="flex items-center space-x-4">
            <img src="https://avatars.githubusercontent.com/u/108365576?v=4" alt="Alex Poliak" class="w-24 h-24 rounded-full border-4 border-indigo-600 shadow-lg">
            <div>
                <h1 class="text-3xl md:text-5xl font-bold text-indigo-400 mb-1">Alex Poliak</h1>
                <h2 class="text-xl md:text-2xl text-indigo-200">Full Stack Developer</h2>
            </div>
        </div>
        <p class="mt-4 text-lg text-gray-400 text-center max-w-xl">
            Nadšenec do programovania, tvorby webov, automatizácie & moderných technológií. Milujem čistý kód a elegantné riešenia.
        </p>
        <div class="mt-4 flex space-x-3">
            <a href="https://github.com/Apoliak7777" target="_blank" class="bg-gray-800 hover:bg-indigo-600 px-4 py-2 rounded transition flex items-center space-x-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.026 2c-5.522 0-10 4.477-10 10 0 4.418 2.867 8.167 6.839 9.489.5.093.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.603-3.369-1.343-3.369-1.343-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.004.07 1.532 1.032 1.532 1.032.892 1.529 2.341 1.088 2.91.832.092-.646.35-1.088.637-1.34-2.22-.252-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.025a9.564 9.564 0 012.5-.336c.85.004 1.71.115 2.5.336 1.909-1.296 2.748-1.025 2.748-1.025.546 1.378.203 2.397.1 2.65.64.699 1.028 1.591 1.028 2.683 0 3.842-2.337 4.687-4.566 4.934.359.309.678.917.678 1.849 0 1.335-.012 2.415-.012 2.743 0 .268.18.579.688.481C19.137 20.164 22 16.418 22 12c0-5.523-4.477-10-9.974-10z"/></svg>
                <span>GitHub</span>
            </a>
            <a href="mailto:alex.poliak@example.com" class="bg-gray-800 hover:bg-indigo-600 px-4 py-2 rounded transition flex items-center space-x-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M21.8,6.4c0-1.1-0.9-2-2-2H4.2c-1.1,0-2,0.9-2,2v11.2c0,1.1,0.9,2,2,2h15.6c1.1,0,2-0.9,2-2V6.4z M20.7,7.1l-8.2,6.7  c-0.3,0.2-0.7,0.2-1,0L3.3,7.1V6.6l9,7.3l9-7.3V7.1z"/></svg>
                <span>Email</span>
            </a>
        </div>
    </header>

    <!-- Terminal-Style About Section -->
    <section class="max-w-3xl mx-auto mt-10 bg-gray-900 rounded-lg p-8 shadow-lg animate__animated animate__fadeInUp">
        <div class="flex items-center space-x-2 mb-4">
            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>
        <pre class="text-green-400 text-lg leading-relaxed">
<span class="text-indigo-300">$</span> <span class="animate__animated animate__flash animate__infinite">whoami</span>
Alex Poliak

<span class="text-indigo-300">$</span> <span class="animate__animated animate__flash animate__infinite">skills --list</span>
- PHP, JavaScript (React.js, Node.js), Python, C#
- HTML5, CSS3, TailwindCSS, SASS
- MySQL, PostgreSQL, MongoDB
- Git, Docker, Linux, CI/CD
- AI & automatizácia, Web Scraping
        </pre>
    </section>

    <!-- Projects Section -->
    <section class="max-w-5xl mx-auto mt-12">
        <h2 class="text-2xl font-bold text-indigo-300 mb-8 text-center animate__animated animate__fadeIn">Vybrané Projekty</h2>
        <div class="grid gap-8 md:grid-cols-2">
            <?php
            // Projekty ako pole (môžeš upraviť/pridať svoje reálne projekty)
            $projects = [
                [
                    "name" => "Hosting Website",
                    "desc" => "Moderný web pre hostingové služby s automatizovaným objednávkovým systémom a responzívnym dizajnom.",
                    "link" => "https://github.com/Apoliak7777/Hosting_Website",
                    "lang" => ["PHP", "Tailwind", "JS"]
                ],
                [
                    "name" => "MAINTENANCE",
                    "desc" => "Systém na správu údržby serverov a služieb s notifikáciami a API.",
                    "link" => "https://github.com/Apoliak7777/MAINTENANCE",
                    "lang" => ["PHP", "API", "MySQL"]
                ],
                [
                    "name" => "Apoliak-Portfolio",
                    "desc" => "Moje staršie portfólio, statický web so zameraním na čistý kód.",
                    "link" => "https://github.com/Apoliak7777/Apoliak-Portfolio",
                    "lang" => ["HTML", "CSS", "JS"]
                ],
                [
                    "name" => "Lorelei-bot",
                    "desc" => "Pokročilý Discord bot pre automatizáciu a správu komunít.",
                    "link" => "https://github.com/Apoliak7777/Lorelei-bot",
                    "lang" => ["Python", "Discord.py", "Docker"]
                ]
            ];
            foreach ($projects as $p) {
                echo '<div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-2xl transition animate__animated animate__fadeInUp">';
                echo '<h3 class="text-xl font-semibold text-indigo-400 mb-2">'.$p["name"].'</h3>';
                echo '<p class="mb-4 text-gray-300">'.$p["desc"].'</p>';
                echo '<div class="flex flex-wrap gap-2 mb-4">';
                foreach ($p["lang"] as $tag) {
                    echo '<span class="bg-indigo-700 bg-opacity-70 text-xs px-2 py-1 rounded">'.$tag.'</span>';
                }
                echo '</div>';
                echo '<a href="'.$p["link"].'" target="_blank" class="text-indigo-300 hover:underline">Zobraziť na GitHube &rarr;</a>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-16 py-8 text-center text-gray-500 text-sm animate__animated animate__fadeInUp">
        &copy; <?php echo date('Y'); ?> Alex Poliak &mdash; Vyrobené s <span class="text-pink-500">♥</span> v PHP
    </footer>

    <!-- Jednoduchá animácia kurzora -->
    <script>
        // Pridanie blikajúceho kurzora do terminal sekcie (voliteľné)
        document.querySelectorAll('pre').forEach(el => {
            let html = el.innerHTML;
            el.innerHTML = html.replace(/\n/g, '<br>');
        });
    </script>
</body>
</html>