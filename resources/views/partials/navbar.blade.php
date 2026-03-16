<nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
    <div class="dropdown me-3">
    <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
        🎨 
    </button>
    <ul class="dropdown-menu">
        <li><hr class="dropdown-divider"></li>
        <li class="px-3">
            <label class="form-label">Color Personalizado</label>
            <input type="color" class="form-control form-control-color"
           onchange="customColor(this.value)">
        </li>

    </ul>
</div>
    <button class="btn btn-outline-secondary me-3" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <span class="fw-semibold">Panel Administrativo SIGEC</span>

    <div class="ms-auto">

        <button class="btn btn-outline-dark me-2" onclick="toggleDarkMode()">
            <i class="bi bi-moon" id="darkModeIcon"></i>
        </button>

        <i class="bi bi-bell me-3"></i>
        <i class="bi bi-person-circle"></i>

    </div>

</nav>