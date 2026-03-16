<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SIGEC</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
<style>
    <li/* ============================= */
/* VARIABLES GLOBALES */
/* ============================= */
:root {
    --sidebar-bg: #111827;
    --sidebar-active: #2563eb;
    --sidebar-hover: rgba(255,255,255,0.1);
    --sidebar-text: #e5e7eb;
}

/* ============================= */
/* BODY */
/* ============================= */
body {
    overflow-x: hidden;
    background-color: #f4f6f9;
    transition: background 0.3s ease;
}

/* ============================= */
/* SIDEBAR */
/* ============================= */
.sidebar {
    width: 260px;
    height: 100vh;
    position: fixed;
    padding: 20px;
    background: var(--sidebar-bg);
    transition: all 0.3s ease;
}

/* Sidebar colapsado */
.sidebar.collapsed {
    width: 80px;
}

/* Logo */
.sidebar .logo {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #fff;
    transition: opacity 0.3s ease;
}

/* Ocultar texto cuando colapsa */
.sidebar.collapsed .logo span {
    display: none;
}

/* ============================= */
/* LINKS DEL SIDEBAR */
/* ============================= */
.sidebar .nav-link {
    color: var(--sidebar-text);
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 5px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

/* Iconos */
.sidebar .nav-link i {
    margin-right: 10px;
    font-size: 18px;
}

/* Ocultar texto cuando colapsa */
.sidebar.collapsed .nav-link span {
    display: none;
}

/* Hover */
.sidebar .nav-link:hover {
    background-color: var(--sidebar-hover);
}

/* Activo dinámico */
.sidebar .nav-link.active {
    background-color: var(--sidebar-active);
    color: #fff;
}

/* ============================= */
/* TITULOS DE SECCION */
/* ============================= */
.section-title {
    font-size: 11px;
    color: #94a3b8;
    margin-top: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Ocultar títulos cuando colapsa */
.sidebar.collapsed .section-title {
    display: none;
}

/* ============================= */
/* CONTENIDO */
/* ============================= */
.content {
    margin-left: 260px;
    padding: 30px;
    transition: all 0.3s ease;
}

/* Cuando sidebar está colapsado */
.content.expanded {
    margin-left: 80px;
}

/* ============================= */
/* NAVBAR */
/* ============================= */
.navbar {
    transition: background 0.3s ease;
}

/* ============================= */
/* DARK MODE */
/* ============================= */
body.dark-mode {
    background-color: #0f172a;
}

body.dark-mode .card {
    background-color: #1e293b;
    color: #fff;
}

body.dark-mode .navbar {
    background-color: #1e293b !important;
}

body.dark-mode .section-title {
    color: #cbd5e1;
}

/* ============================= */
/* TRANSICIONES SUAVES */
/* ============================= */
.card {
    transition: background 0.3s ease, color 0.3s ease;
}
    </style>
</head>
<body>

    @include('partials.sidebar')

    <div class="content" id="contenido-dinamico" >
        @include('partials.navbar')

        @yield('content')
    </div>


<script>
    function cargarVista(e, url) {
    e.preventDefault();

    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.querySelector('#contenido-dinamico').innerHTML = html;
            window.history.pushState({}, '', url);
        });
}

    function applyTheme(bg, active) {
        document.documentElement.style.setProperty('--sidebar-bg', bg);
        document.documentElement.style.setProperty('--sidebar-active', active);

        localStorage.setItem('sidebarBg', bg);
        localStorage.setItem('sidebarActive', active);
    }

    function changeTheme(theme) {
        const themes = {
            dark: ['#111827', '#2563eb'],
            blue: ['#1e3a8a', '#3b82f6'],
            green: ['#065f46', '#10b981'],
            red: ['#7f1d1d', '#ef4444']
        };

        applyTheme(themes[theme][0], themes[theme][1]);
    }

    document.addEventListener("DOMContentLoaded", function () {
        let bg = localStorage.getItem('sidebarBg');
        let active = localStorage.getItem('sidebarActive');

        if (bg && active) {
            applyTheme(bg, active);
        }
    });

    function customColor(color) {
        applyTheme(color, shadeColor(color, -20));
    }

    function shadeColor(color, percent) {
        let R = parseInt(color.substring(1,3),16);
        let G = parseInt(color.substring(3,5),16);
        let B = parseInt(color.substring(5,7),16);

        R = parseInt(R * (100 + percent) / 100);
        G = parseInt(G * (100 + percent) / 100);
        B = parseInt(B * (100 + percent) / 100);

        R = (R<255)?R:255;  
        G = (G<255)?G:255;  
        B = (B<255)?B:255;  

        let RR = ((R.toString(16).length==1)?"0"+R.toString(16):R.toString(16));
        let GG = ((G.toString(16).length==1)?"0"+G.toString(16):G.toString(16));
        let BB = ((B.toString(16).length==1)?"0"+B.toString(16):B.toString(16));

        return "#"+RR+GG+BB;
    }

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
