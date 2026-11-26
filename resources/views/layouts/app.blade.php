<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Мой первый проект на Laravel')</title>
    <style>
        :root {
            --bg: #0f172a;
            --panel: #16213b;
            --panel-2: #1c2a4a;
            --accent: #ff2d20;
            --accent-2: #ff7a70;
            --text: #e8edf7;
            --muted: #9aa8c2;
            --line: rgba(255, 255, 255, .09);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
            background:
                radial-gradient(900px 500px at 15% -10%, rgba(255, 45, 32, .22), transparent 60%),
                radial-gradient(800px 500px at 95% 0%, rgba(56, 132, 255, .18), transparent 55%),
                var(--bg);
            color: var(--text);
            min-height: 100vh;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        .wrap { max-width: 1120px; margin: 0 auto; padding: 0 28px; }
        header {
            border-bottom: 1px solid var(--line);
            background: rgba(15, 23, 42, .72);
            backdrop-filter: blur(10px);
            position: sticky; top: 0; z-index: 10;
        }
        .nav { display: flex; align-items: center; justify-content: space-between; height: 72px; }
        .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; font-size: 19px; }
        .logo {
            width: 38px; height: 38px; border-radius: 10px;
            display: grid; place-items: center;
            background: linear-gradient(135deg, var(--accent), #b3120a);
            box-shadow: 0 8px 24px rgba(255, 45, 32, .35);
            font-size: 20px;
        }
        .nav-links { display: flex; gap: 26px; font-size: 15px; color: var(--muted); }
        .nav-links a:hover { color: #fff; }
        .nav-links .active { color: #fff; }
        .hero { padding: 84px 0 56px; }
        .badge {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 7px 14px; border-radius: 999px;
            border: 1px solid rgba(255, 122, 112, .35);
            background: rgba(255, 45, 32, .1);
            color: var(--accent-2); font-size: 13px; font-weight: 600;
            letter-spacing: .02em; margin-bottom: 24px;
        }
        .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--accent-2); }
        h1 { font-size: clamp(36px, 5vw, 58px); line-height: 1.1; letter-spacing: -.02em; max-width: 900px; }
        h1 span { color: var(--accent-2); }
        .lead { margin-top: 22px; max-width: 780px; font-size: 19px; color: var(--muted); }
        .actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 34px; }
        .btn {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 13px 22px; border-radius: 12px; font-weight: 600; font-size: 15px;
            border: 1px solid var(--line); transition: .2s;
        }
        .btn-primary { background: var(--accent); border-color: var(--accent); box-shadow: 0 10px 26px rgba(255, 45, 32, .3); }
        .btn-primary:hover { background: #e62317; transform: translateY(-1px); }
        .btn-ghost { background: rgba(255, 255, 255, .04); }
        .btn-ghost:hover { background: rgba(255, 255, 255, .08); }
        .stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin: 18px 0 70px; }
        .stat {
            background: linear-gradient(180deg, rgba(255,255,255,.05), rgba(255,255,255,.02));
            border: 1px solid var(--line); border-radius: 16px; padding: 20px 22px;
        }
        .stat b { display: block; font-size: 24px; margin-bottom: 2px; }
        .stat span { color: var(--muted); font-size: 14px; }
        section { padding-bottom: 64px; }
        .section-title { font-size: 27px; margin-bottom: 8px; }
        .section-sub { color: var(--muted); margin-bottom: 26px; }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 18px; }
        .card {
            background: var(--panel); border: 1px solid var(--line);
            border-radius: 18px; padding: 26px;
            transition: .2s;
        }
        .card:hover { transform: translateY(-3px); border-color: rgba(255, 122, 112, .35); }
        .icon {
            width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center;
            background: rgba(255, 45, 32, .12); border: 1px solid rgba(255, 45, 32, .25);
            font-size: 21px; margin-bottom: 18px;
        }
        .card h3 { font-size: 18px; margin-bottom: 8px; }
        .card p { color: var(--muted); font-size: 14.5px; }
        .card p + p { margin-top: 10px; }
        code {
            font-family: "Cascadia Code", Consolas, monospace;
            font-size: .9em; color: #ffc9c4;
            background: rgba(255, 45, 32, .1); padding: 2px 7px; border-radius: 6px;
        }
        .chain {
            display: flex; align-items: stretch; gap: 12px; flex-wrap: wrap;
            background: var(--panel); border: 1px solid var(--line);
            border-radius: 18px; padding: 24px;
        }
        .chain-item {
            flex: 1 1 200px; background: var(--panel-2); border: 1px solid var(--line);
            border-radius: 14px; padding: 18px 20px;
        }
        .chain-item small { color: var(--accent-2); font-weight: 700; letter-spacing: .08em; font-size: 11px; text-transform: uppercase; }
        .chain-item b { display: block; margin: 6px 0 4px; font-size: 16px; }
        .chain-item span { color: var(--muted); font-size: 13.5px; }
        .arrow { display: grid; place-items: center; color: var(--accent-2); font-size: 22px; }
        table { width: 100%; border-collapse: collapse; font-size: 14.5px; }
        th, td { text-align: left; padding: 14px 16px; border-bottom: 1px solid var(--line); vertical-align: top; }
        th { color: var(--accent-2); font-size: 12px; letter-spacing: .07em; text-transform: uppercase; }
        tr:last-child td { border-bottom: none; }
        td:first-child { white-space: nowrap; color: #fff; }
        td { color: var(--muted); }
        .panel {
            background: var(--panel); border: 1px solid var(--line);
            border-radius: 18px; padding: 8px 10px; overflow: hidden;
        }
        .note {
            border-left: 3px solid var(--accent); background: rgba(255, 45, 32, .07);
            border-radius: 0 12px 12px 0; padding: 16px 20px; color: var(--muted); font-size: 14.5px;
        }
        .note b { color: #fff; }
        ul.clean { list-style: none; display: grid; gap: 12px; }
        ul.clean li { display: flex; gap: 12px; color: var(--muted); font-size: 15px; }
        ul.clean li::before { content: "✓"; color: var(--accent-2); font-weight: 700; }
        footer { border-top: 1px solid var(--line); padding: 26px 0 34px; color: var(--muted); font-size: 14px; }
        .footer-row { display: flex; justify-content: space-between; gap: 16px; flex-wrap: wrap; }
        @media (max-width: 860px) {
            .grid, .grid-2, .stats { grid-template-columns: 1fr; }
            .nav-links { gap: 16px; font-size: 14px; }
            .hero { padding-top: 54px; }
            td:first-child { white-space: normal; }
        }
    </style>
</head>
<body>
<header>
    <div class="wrap nav">
        <a class="brand" href="/">
            <div class="logo">L</div>
            <span>Laravel Practice</span>
        </a>
        <nav class="nav-links">
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Главная</a>
            <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">О проекте</a>
            <a href="https://github.com/maxon206/laravel-practice" target="_blank" rel="noopener">GitHub</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="wrap footer-row">
        <span>Практическая работа «Установка Laravel через Composer и структура проекта»</span>
        <span>© {{ date('Y') }} · Макаров А.</span>
    </div>
</footer>
</body>
</html>
