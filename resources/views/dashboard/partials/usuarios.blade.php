<div class="card shadow-sm">
    <div class="card-body">
        <h4 class="mb-4">Panel de Preferencias</h4>

        <div class="mb-3">
            <label class="form-label">Color del Sidebar</label>
            <input type="color" class="form-control form-control-color"
                   onchange="customColor(this.value)">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" onclick="changeTheme('dark')">Tema Oscuro</button>
            <button class="btn btn-info" onclick="changeTheme('blue')">Tema Azul</button>
            <button class="btn btn-success" onclick="changeTheme('green')">Tema Verde</button>
            <button class="btn btn-danger" onclick="changeTheme('red')">Tema Rojo</button>
        </div>

        <p class="text-muted">
            Los cambios se guardan automáticamente.
        </p>
    </div>
</div>