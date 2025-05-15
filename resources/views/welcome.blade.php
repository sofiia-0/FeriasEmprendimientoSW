<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ferias de Emprendimiento</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        :root {
            --primary: #588B71;
            --secondary: #EAE2CF;
            --accent: #D24F6B;
            --dark: #485065;
            --font-sans: 'Poppins', ui-sans-serif, system-ui, sans-serif;
        }
        body {
            font-family: var(--font-sans);
            background: var(--secondary);
            color: var(--dark);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            width: 100%;
            max-width: 900px;
            margin-top: 2rem;
            display: flex;
            justify-content: flex-end;
        }
        nav a {
            margin-left: 1rem;
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            color: var(--dark);
            background: var(--secondary);
            border: 1px solid var(--primary);
            transition: background .2s, color .2s;
        }
        nav a:hover {
            background: var(--primary);
            color: #fff;
        }
        .container {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px #48506522;
            max-width: 900px;
            width: 100%;
            margin: 2rem 0;
            padding: 2.5rem 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .intro {
            flex: 1 1 320px;
        }
        .intro h1 {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        .intro p {
            color: var(--dark);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        .actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .actions a {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            transition: background .2s;
            text-decoration: none;
        }
        .actions a.secondary {
            background: var(--primary);
        }
        .actions a:hover {
            opacity: 0.9;
        }
        .features {
            margin-top: 1rem;
            list-style: none;
            padding: 0;
        }
        .features li {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        .features .icon {
            width: 32px;
            height: 32px;
            background: var(--primary);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .illustration {
            flex: 1 1 320px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .illustration svg {
            width: 90%;
            max-width: 340px;
            height: auto;
        }
        @media (max-width: 800px) {
            .container {
                flex-direction: column;
                padding: 1.5rem 1rem;
            }
            .illustration {
                margin-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Panel</a>
                @else
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <main class="container">
        <section class="intro">
            <h1>Ferias Comunitarias de Emprendimiento</h1>
            <p>
                Un espacio donde los emprendedores locales pueden registrar sus ferias, vincularse y dar a conocer sus productos y servicios a la comunidad.
            </p>
            <div class="actions">
                <a href="{{ route('register') }}">Registrar Feria</a>
                <a href="{{ route('login') }}" class="secondary">Consultar Ferias</a>
            </div>
            <ul class="features">
                <li>
                    <span class="icon">🎪</span>
                    Registra nuevas ferias comunitarias fácilmente.
                </li>
                <li>
                    <span class="icon">🧑‍💼</span>
                    Añade y vincula emprendedores a cada feria.
                </li>
                <li>
                    <span class="icon">🔍</span>
                    Consulta ferias y participantes en cualquier momento.
                </li>
            </ul>
        </section>
        <section class="illustration">
            <!-- SVG ilustración mejorada de una carpa de feria (🎪) sin bordes azules coloreados -->
            <svg viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Feria">
                <!-- Sombra de la carpa -->
                <ellipse cx="110" cy="188" rx="82" ry="14" fill="#EAE2CF" opacity="0.7"/>
                <!-- Base de la carpa -->
                <rect x="38" y="140" width="144" height="44" rx="10" fill="#588B71"/>
                <!-- Techo de la carpa -->
                <polygon points="110,60 28,140 192,140" fill="#D24F6B"/>
                <!-- Rayas del techo -->
                <polygon points="110,60 70,140 110,140" fill="#EAE2CF" opacity="0.9"/>
                <polygon points="110,60 150,140 110,140" fill="#EAE2CF" opacity="0.9"/>
                <!-- Rayas adicionales -->
                <polygon points="110,60 90,140 110,140" fill="#588B71" opacity="0.3"/>
                <polygon points="110,60 130,140 110,140" fill="#588B71" opacity="0.3"/>
                <!-- Bandera -->
                <rect x="106" y="44" width="8" height="22" rx="2" fill="#485065"/>
                <polygon points="110,44 124,54 110,54" fill="#D24F6B"/>
                <!-- Guirnaldas -->
                <path d="M40 130 Q110 110 180 130" stroke="#EAE2CF" stroke-width="3" fill="none"/>
                <circle cx="60" cy="126" r="3" fill="#D24F6B"/>
                <circle cx="85" cy="120" r="3" fill="#588B71"/>
                <circle cx="110" cy="117" r="3" fill="#EAE2CF"/>
                <circle cx="135" cy="120" r="3" fill="#D24F6B"/>
                <circle cx="160" cy="126" r="3" fill="#588B71"/>
                <!-- Puerta con sombra -->
                <rect x="95" y="162" width="30" height="22" rx="7" fill="#485065"/>
                <ellipse cx="110" cy="184" rx="13" ry="3" fill="#222" opacity="0.15"/>
                <!-- Detalles laterales (ventanas) -->
                <rect x="52" y="155" width="14" height="14" rx="3" fill="#EAE2CF"/>
                <rect x="154" y="155" width="14" height="14" rx="3" fill="#EAE2CF"/>
            </svg>
        </section>
    </main>
</body>
</html>
