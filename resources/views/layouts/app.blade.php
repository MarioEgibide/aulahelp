<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'AulaHelp') }}</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #d1d5db;
            --accent: #b91c1c;
            --accent-soft: #fee2e2;
            --header: #111827;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
        }
        header {
            background: var(--header);
            color: #fff;
            padding: 20px 24px;
        }
        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        header p {
            margin: 6px 0 0;
            color: #d1d5db;
        }
        main {
            max-width: 1100px;
            margin: 24px auto;
            padding: 0 16px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 8px 22px rgba(0,0,0,.05);
            overflow: hidden;
        }
        .card-header {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border);
            background: #fafafa;
        }
        .card-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }
        .card-header p {
            margin: 6px 0 0;
            color: var(--muted);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 14px 16px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            vertical-align: top;
        }
        th {
            background: #f9fafb;
            font-size: .95rem;
        }
        tr:hover td {
            background: #fcfcfd;
        }
        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: .85rem;
            font-weight: 700;
        }
        .muted {
            color: var(--muted);
        }
        .empty {
            padding: 30px 20px;
            color: var(--muted);
        }
        footer {
            max-width: 1100px;
            margin: 0 auto 24px;
            padding: 0 16px;
            color: var(--muted);
            font-size: .92rem;
        }
    </style>
</head>
<body>
<header>
    <h1>{{ config('app.name', 'AulaHelp') }}</h1>
    <p>Panel básico de incidencias del aula</p>
</header>

<main>
    @yield('content')
</main>

<footer>
    Proyecto base para prácticas de Git, Laravel, MySQL y despliegue en DAW.
</footer>
</body>
</html>
